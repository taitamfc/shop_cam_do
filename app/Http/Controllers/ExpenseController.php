<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Contract;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $query = Expense::select('*');
        $limit = $request->limit ? $request->limit : 10;
        if ($request->id_customer_name) {
            $query->where('id','LIKE',"%$request->id_customer_name%");
            $query->whereHas('user', function ($subQuery) {
                $customer_name = request('id_customer_name');
                $subQuery->orWhere('name','LIKE',"%$customer_name%");
            });
        }
        if ($request->type_id) {
            $query->where('type_id',$request->type_id);
        }
        if ($request->contract_id) {
            $query->where('contract_id',$request->contract_id);
        }
        if ($request->customer_id) {
            $query->where('customer_id',$request->customer_id);
        }
        $query->orderBy('id', 'DESC');
        $items = $query->paginate($limit);

        $params = [
            'items' => $items
        ];
        return view("admin.expenses.index", $params);
    }
}
