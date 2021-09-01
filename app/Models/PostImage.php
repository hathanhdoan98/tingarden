<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;
    use MetaSeoAliasRelation;

    protected $fillable = [
        'post_id',
        'width',
        'height',
        'path',
        'type',
    ];

}
