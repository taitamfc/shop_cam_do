<?php

namespace App\Http\Controllers;

use App\Enums\ArrangeType;
use App\Enums\LoanType;
use App\Enums\PaymentType;
use App\Enums\StatusDebt;
use App\Enums\TimeEnum;
use App\Models\Contract;
use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReceivableDebtController extends Controller
{
    private $pathView;

    public function __construct()
    {
        $this->pathView = 'admin.receivable-debt';

    }

    public function index(Request $request)
    {
        $arrangeType = ArrangeType::asSelectArray();
        $loanType = LoanType::asSelectArray();
        $times = TimeEnum::asSelectArray();
        $status = StatusDebt::asSelectArray();
        $today = Carbon::now();

        $geReceivables = Payments::with(['contact'])
                        ->whereIn('status', [PaymentType::UNPAID, PaymentType::OVERDUE])
                        ->where('date_paid', '<=', $today)
                        ->get();

        $pram = [
            'arrangeType' => $arrangeType,
            'loanType' => $loanType,
            'times' => $times,
            'status' => $status,
            'geReceivables' => $geReceivables,
        ];


        return view("{$this->pathView}.index", $pram);
    }
}
