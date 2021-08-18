<?php

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
    Route::get('/posts', 'WebController@getPosts');
    Route::get('/{alias?}', 'WebController@index')->name('home');
});

Route::get('/detail', function () {
    return view('pages.product-detail');
});
Route::get('/cart', function () {
    return view('pages.cart');
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

