<?php

namespace App\Models;

use App\Http\Controllers\Traits\FormatDateTrait;
use App\Http\Controllers\Traits\SlugNameTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use SlugNameTrait;
    use FormatDateTrait;

    protected $fillable = [
        'category_id',
        'name',
        'code',
        'index',
        'short_description',
        'description',
        'search',
        'price',
        'sale_off_price',
        'rate',
        'total_rate',
        'status',
    ];
    public $timestamps = true;

    public function alias(){
        return $this->morphOne(Alias::class,'model');
    }

    public function metaseo(){
        return $this->morphOne(MetaSeo::class,'model');
    }

    public function images(){
        return $this->morphMany(Image::class,'model');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getImagesByIndex(array $indexs){
        return $this->images()->whereIn('index', $indexs)->get();
    }

    public function scopeWithImages($query){
        return $query->with([
            'images' => function ($q) {
                $q->orderBy('index', 'ASC');
            }
        ]);
    }
}
