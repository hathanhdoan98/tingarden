<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'search',
        'alias',
        'province_id',//publish,trash
        'province_code',
        'code',
        'status',
        'create_at',
        'update_at',
    ];

    public $timestamps = true;

}
