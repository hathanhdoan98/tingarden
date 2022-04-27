<?php

namespace App\Models;

use App\Http\Controllers\Traits\MorphRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use MorphRelation;

    protected $fillable = [
        'name',
        'short_content',
        'content',
        'search',
        'status',
    ];
    public $timestamps = true;

}
