<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'Payments';
    protected $fillable = [
        'date_paid',
        'amount',
        'other_fee',
        'customer_name',
        'contract_id',
        'user_id',
        'status',
        'paid',
        'payment_day'
    ];
    public $timestamps = true;

    public function contact() {
        return $this->belongsTo(Asset::class,'contact_id','id');
    }

}
