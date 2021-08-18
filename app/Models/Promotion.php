<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'type',
        'begin',
        'end',
        'value',
        'search',
        'status',  // active, inactive, used
        'create_at',
        'update_at',
    ];
}
