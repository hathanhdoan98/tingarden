<?php

namespace App\Models;

use App\Http\Controllers\Traits\AddressRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, AddressRelation;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'province_code',
        'district_code',
        'ward_code',
        'status',
    ];

    public $timestamps = true;
}
