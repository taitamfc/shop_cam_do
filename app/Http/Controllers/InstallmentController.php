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
            do {
                $contractCode = Str::random(12);
            } while (Contract::where('code', $contractCode)->exists());
            if ($isExitsCustomer) {
                return redirect()->back()->with('error', 'Tên khách hàng đã tồn tại');
            }

            $customer = new Customer();
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->identification = $request->identification;
            $customer->address = $request->address;
            $customer->birthday = $request->birthday;
            $customer->cmnd = $request->cmnd;

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
                $item->customer_id = $customer->id;
                $item->code = $contractCode;
                $item->asset_id = $request->asset_id;
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

                if ($request->hasFile('image')) {
                    $item->image = $this->uploadFile($request->file('image'), 'uploads');
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
            return redirect()->back()->with('success', __('sys.store_item_success'));
        } catch (QueryException $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', __('sys.store_item_error'));
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
            $payment = Payments::all();
            $params = [
                'item' => $item,
                'success' => __('sys.store_item_success'),
                'payment' => $payment
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
            $item = Contract::findOrFail($id);
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
    public function update(UpdateContractRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $isExitsCustomer = Customer::where('cmnd', $request->cmnd)->exists();
            do {
                $contractCode = Str::random(12);
            } while (Contract::where('code', $contractCode)->exists());
            if ($isExitsCustomer) {
                return redirect()->back()->with('error', 'Tên khách hàng đã tồn tại');
            }

            $customer = new Customer();
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->identification = $request->identification;
            $customer->address = $request->address;
            $customer->birthday = $request->birthday;
            $customer->cmnd = $request->cmnd;

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
                $item->customer_id = $customer->id;
                $item->code = $contractCode;
                $item->asset_id = $request->asset_id;
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

                if ($request->hasFile('image')) {
                    $item->image = $this->uploadFile($request->file('image'), 'uploads');
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
