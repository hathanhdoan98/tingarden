<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaSeo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'keyword',
        'create_at',
        'update_at',
    ];
}
