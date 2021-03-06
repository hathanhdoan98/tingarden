<?php

use App\Http\Controllers\Api\Address\AddressController;
use App\Http\Controllers\Api\Order\OrderController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\ListingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Web'], function () {
    Route::get('/mail', function(){
        return view('mail.new-order');
    });
    Route::get('/cart', 'WebController@getCart')->name('cart');
    Route::get('/tat-ca', 'WebController@getAllProducts')->name('all_products');
    Route::get('/{alias?}', 'WebController@index')->name('home');
});



Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/post-detail', function () {
    return view('pages.post-detail');
});
Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/product-list', function () {
    return view('pages.product-list');
});

Route::group(['prefix'=>'cart'], function (){
    Route::get('get', [CartController::class,'getCarts'])->name('web.cart.get');
    Route::post('add', [CartController::class,'addToCart'])->name('web.cart.add');
    Route::put('update', [CartController::class,'updateCart'])->name('web.cart.update');
    Route::delete('remove', [CartController::class,'removeCart'])->name('web.cart.remove');
});

Route::group(['prefix'=>'listing'], function (){
    Route::get('/get-products', [ListingController::class,'getProducts'])->name('listing.get-products');
});

Route::group(['prefix'=>'address'], function (){
    Route::get('/get-districts/{provinceCode}', [AddressController::class,'getDistricts'])->name('web.address.get-districts');
    Route::get('/get-wards/{districtCode}', [AddressController::class,'getWards'])->name('web.address.get-wards');
});

Route::group(['prefix'=>'order'], function (){
    Route::post('/create', [OrderController::class,'createOrder'])->name('web.order.create');
});