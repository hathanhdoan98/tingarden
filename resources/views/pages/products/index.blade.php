@php
$fromQuantity = $pagination['current_page'] * $pagination['per_page'] - $pagination['per_page'] + 1;
$toQuantity = ($pagination['current_page'] * $pagination['per_page']) >= $pagination['total'] ? 
                    $pagination['total'] : $pagination['current_page'] * $pagination['per_page'];
@endphp
@extends('layout.app')
@section('content')
    <div class="body-page bg-white">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="breadcumb">
                    {{ Breadcrumbs::render('category', $category ?? null) }}
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 fix-col-0">
                        <div class="Page">
                            <div class='row fix-row-0'>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="title-default p-relative mb-10 t-center">
                                        <h1><a class="p-relative" href="javascript:"
                                                title="Hoa bó">{{ $category['name'] ?? 'Tất cả sản phẩm' }}</a></h1>
                                        <div class="bx-title"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="shop-top-bar ds-mobile mt-30">
                                        <div class="shop-bar-inner">
                                            <div class="product-view-mode">
                                                <ul class="nav shop-item-filter-list" role="tablist">
                                                    <li class="active" role="presentation"><a aria-selected="true"
                                                            class="active show" data-toggle="tab" role="tab"
                                                            aria-controls="grid-view" href="#grid-view"><i
                                                                class="fa fa-th"></i></a></li>
                                                    <!-- <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                href="#list-view"><i class="fa fa-th-list"></i></a></li> -->
                                                </ul>
                                            </div>
                                            <div class="toolbar-amount mt-0i ml-0i">
                                                <span>Hiển thị {{ $fromQuantity }} đến <span id="show">{{ $toQuantity }}</span> của {{ $pagination['total'] }} sản
                                                    phẩm</span>
                                            </div>
                                        </div>
                                        <div class="product-select-box ds-flex flex-align-item ds-mobile">
                                            <div class="product-short mr-20 mg-0i">
                                                <p>Sắp xếp:</p>
                                                <select name="js-sort-by" data-href="bo-sinh-nhat" data-show=""
                                                    data-page="1" class="nice-select">
                                                    <option value="created_at-0">Mặc định
                                                    </option>
                                                    <option value="name-asc">A → Z</option>
                                                    <option value="name-desc">Z → A</option>
                                                    <option value="sale_off_price-asc">Giá tăng
                                                        dần</option>
                                                    <option value="sale_off_price-desc">Giá giảm
                                                        dần</option>
                                                    <option value="created_at-desc">Hàng mới
                                                        nhất</option>
                                                    <option value="created_at-asc">Hàng
                                                        cũ nhất</option>
                                                </select>
                                            </div>
                                            <div class="product-short mt-10i">
                                                <p>Hiển thị:</p>
                                                <select name="js-limit-by" data-href="bo-sinh-nhat" data-sort=""
                                                    data-page="1" class="nice-select select-limit">
                                                    <option value="1">1</option>
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list col-md-12 col-sm-12 col-xs-12">
                                    @include('pages.products.product-list',[
                                        'productList' => $productList ?? [],
                                        'pagination' => $pagination ?? [],
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('script')
<script src="{{ asset('/js/web/listing.js') }}"></script>
<script>
    var apiGetProducts = "{{ route('listing.get-products') }}";
    var categoryId = "{{ $category['id'] ?? '' }}";
    var dataList = ".product-list";
</script>
@endsection