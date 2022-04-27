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
        'discount_price',
        'sub_charge',          // phụ phí
        'payment_total_price', // Tổng tiền phải thanh toán
        'status',
    ];
    public $timestamps = true;
}
