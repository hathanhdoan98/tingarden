<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use MetaSeoAliasRelation;

    protected $fillable = [
        'alias_id',
        'meta_seo_id',
        'category_id',
        'name',
        'code',
        'image',
        'image1',
        'image2',
        'image3',
        'index',
        'short_description',
        'description',
        'search',
        'price',
        'sale_off_price',
        'rate',
        'total_rate',
        'status',
        'create_at',
        'update_at',
    ];

}
