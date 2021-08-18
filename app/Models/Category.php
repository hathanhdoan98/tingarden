<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use MetaSeoAliasRelation;

    protected $fillable = [
        'alias_id',
        'meta_seo_id',
        'name',
        'status',//publish,trash
        'image',
        'index',
        'description',
        'search',
        'create_at',
        'update_at',
    ];

    public $timestamps = true;

}
