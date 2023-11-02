<?php

namespace App\Http\Controllers;

use App\Enums\ArrangeType;
use App\Enums\LoanType;
use App\Enums\StatusDebt;
use App\Enums\TimeEnum;
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

        $pram = [
            'arrangeType' => $arrangeType,
            'loanType' => $loanType,
            'times' => $times,
            'status' => $status,
        ];


        return view("{$this->pathView}.index", $pram);
    }
}
