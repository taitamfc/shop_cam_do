<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Contract;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $query = Expense::select('*');
        // Lấy theo tháng
        $query->whereBetween(
            'created_at', 
            [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]
        );
        $thu = $query->where('type',Expense::THU)->sum('amount');
        $chi = $query->where('type',Expense::CHI)->sum('amount');

        $pawns = Contract::where('type',Contract::CAMDO)->limit(5)->latest()->get();
        $installments = Contract::where('type',Contract::TRAGOP)->limit(5)->latest()->get();
        
        $total_cam_do = Contract::where('type',Contract::CAMDO)->count();
        $total_tra_gop = Contract::where('type',Contract::TRAGOP)->count();

        $params = [
            'total_cam_do' => $total_cam_do,
            'total_tra_gop' => $total_tra_gop,
            // Cầm đồ
            'pawns' => $pawns,
            // Trả góp
            'installments' => $installments,
            // Doanh thu
            'revenue' => [
                'collect'   => number_format($thu),
                'spend'     => number_format($chi),
                'revenue'     => $thu - $chi,
            ]
        ];
        return view('admin.dashboard.dashboard',$params);
    }
}
