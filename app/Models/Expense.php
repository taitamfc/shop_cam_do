<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    const KY_LAI = 1;
    const TAT_TOAN = 11;
    const TRA_BOT_GOC = 17;
    const VAY_THEM = 21;
    const CHI_CHO_VAY = 2;
    const THU_NHAN_VAY = 4;
    const CHI_PHI_KHAC = 24;
    const THANH_LY_TAI_SAN = 16;
    const THU = 'thu';
    const CHI = 'chi';

    protected $fillable = [
        'type',
        'contract_id',
        'amount',
        'note',
    ];
    public $timestamps = true;


    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Attributes
    public function getUserNameAttribute(){
        return $this->user_id && !empty($this->user) ? $this->user->name : '';
    }
    public function getCustomerNameAttribute(){
        return $this->customer_id && !empty($this->customer) ? $this->customer->name : '';
    }
    public function getCreatedAtFmAttribute(){
        return $this->created_at ? date('d/m/Y H:i',strtotime($this->created_at)) : '';
    }
    public function getTypeNameAttribute(){
        switch ($this->type_id) {
            case self::KY_LAI:
                return 'Kỳ lãi';
                break;
            case self::TAT_TOAN:
                return 'Tất toán';
                break;
            case self::TRA_BOT_GOC:
                return 'Trả bớt gốc';
                break;
            case self::VAY_THEM:
                return 'Vay thêm';
                break;
            case self::CHI_CHO_VAY:
                return 'Chi cho vay';
                break;
            case self::THU_NHAN_VAY:
                return 'Thu nhận vay';
                break;
            case self::CHI_PHI_KHAC:
                return 'Chi phí khác';
                break;
            default:
                # code...
                break;
        }
    }
}
