<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Lib;
use App\Models\Alias;
use App\Models\Category;
use App\Models\MetaSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

class WebController extends Controller
{
    use Lib;
    public function __construct()
    {
        $categories = Category::where('status','active')->get()->toArray();
        $categories1 = array_slice($categories,0,6);
        $categories2 = array_slice($categories,6);
        View::share('categories', $categories);
        View::share('categories1', $categories1);
        View::share('categories2', $categories2);
    }

    public function index($alias = ''){
        $image = Image::make(asset('doan.jpg'));
        $image->fit(600, 600)->save(public_path('resize/doan.jpg'));
        if(empty($alias)){
            return $this->getHomePage();
        }
        $check_alias = Alias::where('alias', $alias)->first();
        if($check_alias){
            switch ($check_alias['type']){
                case 'product':
                    return $this->getProductDetail($check_alias);
                case 'category':
                    return $this->getCategory($check_alias);
                case 'post':
                    return $this->getPostDetail($check_alias);
            }
        }
        abort(404);
    }

    public function getHomePage(){
        return \view('index');
    }

    public function getCategory($check_alias){
        return view('pages.product-list');
    }

    public function search(){
        return 123;
    }

    public function getProductDetail($check_alias){
        return view('pages.product-detail');
    }

    public function getPosts(){
        return view('pages.post');
    }

    public function getPostDetail($check_alias){
        return view('pages.post');
    }
}
