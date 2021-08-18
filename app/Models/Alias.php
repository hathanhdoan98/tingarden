<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    use HasFactory;
    protected $table = 'alias';
    protected $fillable = [
        'alias', // post_type,post,page,category,product
        'type',
        'status',//publish,trash
        'create_at',
        'update_at',
    ];

    public $timestamps = true;
}
