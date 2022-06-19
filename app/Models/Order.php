<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'promotion_id',
        'user_id',
        'code',
        'note',
        'total_price',
        'sub_total_price',
        'discount_price',
        'shipping_fee',   
        'payment_total_price',
        'status',
    ];
    public $timestamps = true;
}
