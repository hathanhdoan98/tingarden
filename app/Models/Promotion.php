<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'begin' => 'datetime',
        'end' => 'datetime',
    ];

    protected $fillable = [
        'name',
        'code',
        'description',
        'type',
        'begin',
        'end',
        'value',
        'search',
        'status',
    ];
    public $timestamps = true;
}
