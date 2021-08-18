<?php

namespace App\Models;

use App\Http\Controllers\Traits\MetaSeoAliasRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'name',
        'search',
        'alias',
        'ward_id',//publish,trash
        'ward_code',
        'code',
        'status',
        'create_at',
        'update_at',
    ];

    public $timestamps = true;

    public function district(){
        return $this->belongsTo('App\Model\District','district_id','id');
    }

}
