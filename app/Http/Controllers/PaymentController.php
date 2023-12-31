<?php

namespace App\Http\Controllers;

use App\Enums\PaymentType;
use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function store($id, Request $request)
    {
        $payment = Payments::findOrFail($id);

        try {
            $checkPayment = $payment->where('status', PaymentType::UNPAID)->first();
            if ($checkPayment) {
                $payment->update([
                    'paid' => $request->paid,
                    'payment_day' => now(),
                    'status' => PaymentType::PAID
                ]);
            }

            return response()->json(['success' => true, 'id' => $id, 'payment' => $payment]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Thanh toán thất bại']);
        }
    }
}
