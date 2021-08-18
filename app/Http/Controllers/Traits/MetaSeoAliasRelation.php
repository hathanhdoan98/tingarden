<?php
namespace App\Http\Controllers\Traits;
trait MetaSeoAliasRelation {
    public function alias(){
        return $this->belongsTo('App\Models\Alias','alias_id','id');
    }

    public function meta_seo(){
        return $this->belongsTo('App\Models\MetaSeo','meta_seo_id','id');
    }
}
