<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contract extends Model
{
    use HasFactory;
    const CAMDO = 0;
    const TRAGOP = 1;

    protected $fillable = [
        'customer_id',
        'asset_id',
        'total_loan',
        'interest_payment_period',
        'interest_rate',
        'date_paid',
        'note',
        'image',
        'user_id',
        'total_interest',
        'monthly_revenue',
        'time_loan',
    ];

    public $timestamps = true;
    public function isOverdue()
    {
        $currentDate = Carbon::now();
        $dueDate = Carbon::parse($this->date_paid)->startOfDay();
        return $currentDate->isAfter($dueDate);
    }

    public function asset() {
        return $this->hasOne(Asset::class,'contract_id','id');
    }
}
