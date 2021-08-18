<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'name',
        'search',
        'alias',
        'district_id',//publish,trash
        'district_code',
        'code',
        'status',
        'create_at',
        'update_at',
    ];

    public $timestamps = true;

    public function province(){
        return $this->belongsTo('App\Model\Province','province_id','id');
    }

}
