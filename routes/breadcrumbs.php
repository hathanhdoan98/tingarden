<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('<i class="fa fa-home" aria-hidden="true"></i>', route('home',''));
});

// Home > Category
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('home');
    $trail->push($category->name, route('home',$category->alias->alias ?? ''));
});

// Home > Category > Product
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('category', $product->category);
    $trail->push($product->name, route('home',$product->alias->alias ?? ''));
});
