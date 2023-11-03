<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory, SoftDeletes;
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
        'monthly_revenue',
        'time_loan',
        'fund_id',
        'type',
        'status',
        'time_loan',
        'code',

    ];

    public $timestamps = true;
    public function isOverdue()
    {
        $currentDate = Carbon::now();
        $dueDate = Carbon::parse($this->date_paid)->startOfDay();
        return $currentDate->isAfter($dueDate);
    }

    public function asset() {
        return $this->belongsTo(Asset::class,'asset_id','id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function fund()
    {
        return $this->belongsTo(Fund::class, 'fund_id', 'id');
    }
    public function payments()
    {
        return $this->hasMany(Payments::class, 'contract_id', 'id');
    }


}
