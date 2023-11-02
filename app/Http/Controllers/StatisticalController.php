<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class StatisticalController extends Controller
{
    private $pathView;
    public function __construct()
    {
        $this->pathView = 'admin.statistical';

    }
    // Thống kê thu
    public function collect(Request $request){
        $query = Expense::select('*');
        if( !$request->month && !$request->year ){
            $query->whereBetween(
                'created_at', 
                [Carbon::now()->subYear(), Carbon::now()]
            );
        }
        if( $request->month ){
            $query->whereMonth('created_at',$request->month);
        }
        if( $request->year ){
            $query->whereYear('created_at',$request->month);
        }
        $thu_lai = $query->where('type_id',Expense::KY_LAI)->sum('amount');
        $thu_goc = $query->where('type_id',Expense::TRA_BOT_GOC)->sum('amount');
        $chartCollect = $this->_chartCollect();

        $params = [
            'thu_lai' => $thu_lai,
            'thu_goc' => $thu_goc,
            'chart' => [
                'months' => json_encode($chartCollect['months']),
                'values' => json_encode($chartCollect['values']),
            ]
        ];
        return view("{$this->pathView}.collect", $params);
    }

    // Thống kê chi
    public function spend(Request $request){
        $query = Expense::select('*');
        if( !$request->month && !$request->year ){
            $query->whereBetween(
                'created_at', 
                [Carbon::now()->subYear(), Carbon::now()]
            );
        }
        if( $request->month ){
            $query->whereMonth('created_at',$request->month);
        }
        if( $request->year ){
            $query->whereYear('created_at',$request->month);
        }
        $chi_cho_vay = $query->where('type_id',Expense::CHI_CHO_VAY)->sum('amount');
        $chartSpend = $this->_chartSpend();

        $params = [
            'chi_cho_vay' => $chi_cho_vay,
            'chart' => [
                'months' => json_encode($chartSpend['months']),
                'values' => json_encode($chartSpend['values']),
            ]
        ];
        return view("{$this->pathView}.spend", $params);
    }

    private function _chartSpend(){
        $currentYear = date('Y');
        $data = Expense::select(DB::raw("MONTH(created_at) as month"), DB::raw("COALESCE(SUM(amount), 0) as total_amount"))
            ->where('type','chi')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->get();

        $months = range(1, 12);
        $values = [];

        foreach ($months as $month) {
            $value = $data->firstWhere('month', $month);
            $values[] = $value ? $value->total_amount : 0;
        }

        $result = [
            'months' => $months,
            'values' => $values,
        ];

        return $result;
    }
    private function _chartCollect(){
        $currentYear = date('Y');
        $data = Expense::select(DB::raw("MONTH(created_at) as month"), DB::raw("COALESCE(SUM(amount), 0) as total_amount"))
            ->where('type','thu')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->get();

        $months = range(1, 12);
        $values = [];

        foreach ($months as $month) {
            $value = $data->firstWhere('month', $month);
            $values[] = $value ? $value->total_amount : 0;
        }

        $result = [
            'months' => $months,
            'values' => $values,
        ];

        return $result;
    }
}
