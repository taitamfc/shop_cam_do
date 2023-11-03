<?php

namespace App\Http\Controllers;

use App\Enums\LoanType;
use App\Enums\PaymentType;
use App\Enums\StatusLoan;
use App\Models\Customer;
use App\Models\Asset;
use App\Models\Contract;
use App\Models\Fund;
use App\Models\Log as SystemLog;
use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Traits\UploadFileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InstallmentController extends Controller
{
    use UploadFileTrait;
    // Trả góp
    public function index(Request $request)
    {
        $items = Contract::with(['customer', 'asset', 'user', 'payments'])
            ->where('type', LoanType::INSTALLMENT)
            ->latest()->get();

        $params = [
            'items' => $items
        ];
        return view("admin.installment.index", $params);
    }
    public function create()
    {
        $assets = Asset::all();
        $funds = Fund::all();

        $param = [
            'assets' => $assets,
            'funds' => $funds
        ];

        return view("admin.installment.create", $param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $isExitsCustomer = Customer::where('cmnd', $request->cmnd)->exists();
            
            if ($isExitsCustomer) {
                return redirect()->back()->with('error', 'Tên khách hàng đã tồn tại');
            }

            $customer = new Customer();
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->birthday = $request->birthday;
            $customer->cmnd = $request->cmnd;
            $customer->link_fb = $request->link_fb;

            if ($request->hasFile('identification')) {
                $customer->identification = $this->uploadFile($request->file('identification'), 'uploads');
            }
            if ($request->hasFile('id_image_front')) {
                $customer->id_image_front = $this->uploadFile($request->file('id_image_front'), 'uploads');
            }
            if ($request->hasFile('id_image_back')) {
                $customer->id_image_back = $this->uploadFile($request->file('id_image_back'), 'uploads');
            }
            if ($request->hasFile('image_user')) {
                $customer->image_user = $this->uploadFile($request->file('image_user'), 'uploads');
            }

            if ($customer->save()) {
                $item = new Contract();
                $contractCode = 'TRAGOP' . str_pad($item->id, 10, '0', STR_PAD_LEFT);
                $item->customer_id = $customer->id;
                $item->code = $contractCode;
                $item->imei = $request->imei;
                $item->asset_id = $request->asset_id;
                $item->password = $request->password;
                $item->icloud = $request->icloud;
                $item->fund_id = $request->fund_id;
                $item->total_loan = $request->total_loan;
                $item->interest_payment_period = $request->interest_payment_period;
                $item->interest_rate = $request->interest_rate;
                $item->date_paid = Carbon::now();
                $item->note = $request->note;
                $item->user_id = Auth::id();
                $item->type = LoanType::INSTALLMENT;
                $item->monthly_revenue = $request->monthly_revenue;
                $item->time_loan = $request->time_loan;
                $item->status = StatusLoan::PENDING;

            
                if ($request->hasFile('phone_front_image')) {
                    $item->phone_front_image = $this->uploadFile($request->file('phone_front_image'), 'uploads');
                }
                if ($request->hasFile('phone_back_image')) {
                    $item->phone_back_image = $this->uploadFile($request->file('phone_back_image'), 'uploads');
                }

                if ($item->save()) {
                    $loanStartDate = now(); // Ngày hôm nay
                    $paymentInterval = $item->interest_payment_period; // Kỳ góp (số ngày giữa mỗi lần trả)
                    $numberOfPayments = (int) $item->time_loan / (int) $paymentInterval; // Số lần trả

                    $paymentDate = $loanStartDate->copy();

                    for ($i = 0; $i < $numberOfPayments; $i++) {
                        $payment = new Payments();
                        $payment->amount = $item->monthly_revenue;
                        $payment->contract_id = $item->id;
                        $payment->date_paid = $paymentDate;
                        $payment->status = PaymentType::UNPAID;
                        $payment->save();

                        $paymentDate->addDays($paymentInterval); // Tăng ngày thanh toán lên theo kỳ góp
                    }

                }
            }
            DB::commit();
            SystemLog::addLog('Contract', 'store', $item->id);
            return redirect()->route('installment.index')->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return redirect()->route('installment.index')->with('error', __('sys.store_item_error'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $item = Contract::with(['customer', 'asset', 'user', 'payments'])
                ->where('type', LoanType::INSTALLMENT)
                ->findOrFail($id);
            $totalLoan = 0;
            foreach ($item->payments as $payment) {
                $totalLoan += (int) $payment->paid;
            }
            $amountOwed = (int) $item->total_loan - $totalLoan;
            $params = [
                'item' => $item,
                'success' => __('sys.store_item_success'),
                'amountOwed' => $amountOwed
            ];
            return view("admin.installment.show", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('installment.index')->with('error', __('sys.store_item_error'));
        }
    }
    public function edit($id)
    {
        try {
            $item = Contract::with('customer')->findOrFail($id);

            $assets = Asset::all();
            $funds = Fund::all();

            $params = [
                'funds' => $funds,
                'assets' => $assets,
                'item' => $item
            ];
            return view("admin.installment.edit", $params);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('installment.index')->with('error', __('sys.item_not_found'));
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $contract = Contract::with(['customer', 'payments'])->findOrFail($id);

            $contract->customer->name = $request->name;
            $contract->customer->phone = $request->phone;
            $contract->customer->address = $request->address;
            $contract->customer->birthday = $request->birthday;
            $contract->customer->cmnd = $request->cmnd;

            if ($request->hasFile('identification')) {
                $contract->customer->identification = $this->uploadFile($request->file('identification'), 'uploads');
            }
            if ($request->hasFile('id_image_front')) {
                $contract->customer->id_image_front = $this->uploadFile($request->file('id_image_front'), 'uploads');
            }
            if ($request->hasFile('id_image_back')) {
                $contract->customer->id_image_back = $this->uploadFile($request->file('id_image_back'), 'uploads');
            }
            if ($request->hasFile('image_user')) {
                $contract->customer->image_user = $this->uploadFile($request->file('image_user'), 'uploads');
            }

            $contract->asset_id = $request->asset_id;
            $contract->fund_id = $request->fund_id;
            $contract->total_loan = $request->total_loan;
            $contract->interest_payment_period = $request->interest_payment_period;
            $contract->interest_rate = $request->interest_rate;
            $contract->date_paid = Carbon::now();
            $contract->note = $request->note;
            $contract->user_id = Auth::id();
            $contract->type = LoanType::INSTALLMENT;
            $contract->monthly_revenue = $request->monthly_revenue;
            $contract->time_loan = $request->time_loan;

                if ($contract->push()) {
                    $loanStartDate = now(); // Ngày hôm nay
                    $paymentInterval = $contract->interest_payment_period; // Kỳ góp (số ngày giữa mỗi lần trả)
                    $numberOfPayments = (int) $contract->time_loan / (int) $paymentInterval; // Số lần trả

                    $paymentDate = $loanStartDate->copy();
                    $contract->payments()->delete();
                    for ($i = 0; $i < $numberOfPayments; $i++) {
                        $payment = new Payments();
                        $payment->amount = $contract->monthly_revenue;
                        $payment->contract_id = $contract->id;
                        $payment->date_paid = $paymentDate;
                        $payment->status = PaymentType::UNPAID;
                        $payment->save();

                        $paymentDate->addDays($paymentInterval); // Tăng ngày thanh toán lên theo kỳ góp
                    }

                }

            DB::commit();
            SystemLog::addLog('Contract', 'update', $contract->id);
            return redirect()->route('installment.index')->with('success', __('sys.update_item_success'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('installment.index')->with('error', __('sys.update_item_error'));
        }
    }
    public function delete($id)
    {
        try {
            $item = Contract::findOrFail($id);
            $item->delete();
            SystemLog::addLog('Contract', 'destroy', $item->id);
            return redirect()->route('installment.index')->with('success', __('sys.destroy_item_success'));
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            return redirect()->route('installment.index')->with('error', __('sys.item_not_found'));
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->route('installment.index')->with('error', __('sys.destroy_item_error'));
        }
    }
    public function overdue(Request $request)
    {
        $query = Contract::select('*')->where('status', 'Đã quá hạn');
        $query->orderBy('id', 'DESC');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->name_phone) {
            $query->where('customer_name', 'LIKE', "%$request->name_phone%");
        }
        if ($request->time && in_array($request->time, ['tat_ca', 'tuan_nay', 'thang_nay', 'nam_nay'])) {
            $dateRanges = [
                'tat_ca' => [null, null],
                'tuan_nay' => [date("Y-m-d", strtotime("this week")), date("Y-m-d", strtotime("this week +6 days"))],
                'thang_nay' => [date("Y-m-01"), date("Y-m-t")],
                'nam_nay' => [date("Y-01-01"), date("Y-12-31")]
            ];
            [$startDate, $endDate] = $dateRanges[$request->time];
            $query = Contract::query();
            if ($startDate && $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        }
        if ( $request->status_name) {
            $query->where('status', 'LIKE', "%$request->status_name%");
        }
        $items = $query->paginate($limit);
        $params = [
            'items' => $items
        ];
        return view("admin.installment.overdue", $params);
    }

    public function approved($id)
    {
        $contract = Contract::findOrFail($id);

        // Kiểm tra xem hợp đồng đã được tìm thấy hay chưa
        if (!empty($contract)) {
            if ($contract->status == StatusLoan::PENDING) {
                $contract->update([
                    'status' => StatusLoan::APPROVED
                ]);
            } elseif ($contract->status == StatusLoan::APPROVED) {
                $contract->update([
                    'status' => StatusLoan::PENDING
                ]);
            }
            return redirect()->back()->with('success', 'Duyệt thành công');
        } else {
            return redirect()->back()->with('error', 'Hợp đồng không tồn tại');
        }
    }


}
