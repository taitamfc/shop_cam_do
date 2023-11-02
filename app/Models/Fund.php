<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'amount',
    ];

    const ACTION = 0;
    const PENDING = 1;
    const DEFAULT_FUND = 500000000;
}
