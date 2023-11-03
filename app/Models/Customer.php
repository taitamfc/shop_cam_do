<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date',
        'link_fb',
        'id_image_front',
        'id_image_back',
        'image_user',
        'cmnd',
        'status',
    ];
    public $timestamps = true;
}
