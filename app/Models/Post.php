<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use MetaSeoAliasRelation;

    protected $fillable = [
        'alias_id',
        'meta_seo_id',
        'name',
        'image',
        'short_content',
        'content',
        'search',
        'status',
        'create_at',
        'update_at',
    ];

}
