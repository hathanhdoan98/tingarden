<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@index');
    Route::get('/report', 'DashboardController@report')->name('admin.report');
    Route::get('/logout', 'DashboardController@logout')->name('admin.logout');
    Route::get('/change-password', 'DashboardController@logout')->name('admin.user.change_password');

    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('admin.category.index');
        Route::get('/get-list', 'CategoryController@getList')->name('admin.category.get_list');
        Route::get('/get-category', 'CategoryController@getById')->name('admin.category.get_category');
        Route::post('/create', 'CategoryController@create')->name('admin.category.create');
        Route::post('/update', 'CategoryController@update')->name('admin.category.update');
    });

    Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('admin.product.index');
        Route::get('/get-list', 'ProductController@getList')->name('admin.product.get_list');
        Route::get('/get-product', 'ProductController@getById')->name('admin.product.get_product');
        Route::post('/create', 'ProductController@create')->name('admin.product.create');
        Route::post('/update', 'ProductController@update')->name('admin.product.update');
    });

    Route::group(['namespace' => 'Page', 'prefix' => 'page'], function () {
        Route::get('/', 'PageController@index')->name('admin.page.index');
        Route::get('/get-list', 'PageController@getList')->name('admin.page.get_list');
        Route::get('/get-page', 'PageController@getById')->name('admin.page.get_page');
        Route::post('/create', 'PageController@create')->name('admin.page.create');
        Route::post('/update', 'PageController@update')->name('admin.page.update');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/', 'PostController@index')->name('admin.post.index');
        Route::get('/get-list', 'PostController@getList')->name('admin.post.get_list');
        Route::get('/get-post', 'PostController@getById')->name('admin.post.get_post');
        Route::post('/create', 'PostController@create')->name('admin.post.create');
        Route::post('/update', 'PostController@update')->name('admin.post.update');
    });

    Route::group(['namespace' => 'PaymentMethod', 'prefix' => 'payment-method'], function () {
        Route::get('/', 'PaymentMethodController@index')->name('admin.payment_method.index');
        Route::get('/get-list', 'PaymentMethodController@getList')->name('admin.payment_method.get_list');
        Route::get('/get-item', 'PaymentMethodController@getById')->name('admin.payment_method.get_item');
        Route::post('/create', 'PaymentMethodController@create')->name('admin.payment_method.create');
        Route::post('/update', 'PaymentMethodController@update')->name('admin.payment_method.update');
    });

    Route::group(['namespace' => 'Customer', 'prefix' => 'customer'], function () {
        Route::get('/', 'CustomerController@index')->name('admin.customer.index');
        Route::get('/get-list', 'CustomerController@getList')->name('admin.customer.get_list');
        Route::get('/get-item', 'CustomerController@getById')->name('admin.customer.get_item');
        Route::post('/create', 'CustomerController@create')->name('admin.customer.create');
        Route::post('/update', 'CustomerController@update')->name('admin.customer.update');
    });

    Route::group(['namespace' => 'Promotion', 'prefix' => 'promotion'], function () {
        Route::get('/', 'PromotionController@index')->name('admin.promotion.index');
        Route::get('/get-list', 'PromotionController@getList')->name('admin.promotion.get_list');
        Route::get('/get-item', 'PromotionController@getById')->name('admin.promotion.get_item');
        Route::post('/create', 'PromotionController@create')->name('admin.promotion.create');
        Route::post('/update', 'PromotionController@update')->name('admin.promotion.update');
    });
});
