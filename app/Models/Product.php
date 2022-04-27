<?php

namespace App\Models;

use App\Http\Controllers\Traits\MorphRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use MorphRelation;

    protected $fillable = [
        'category_id',
        'name',
        'code',
        'index',
        'short_description',
        'description',
        'search',
        'price',
        'sale_off_price',
        'rate',
        'total_rate',
        'status',
    ];
    public $timestamps = true;

}
