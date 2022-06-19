<div class="box-inPage mt-20">
    <div class="tab-content">
        <div class="tab-pane fade active" id="grid-view" role="tabpanel" aria-labelledby="grid-view">
            @foreach (array_chunk($productList, 5) as $products)
            <div class="row fix-row-5">
                @foreach ($products as $product)
                <div class="column-5 col-xs-12">
                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a
                                href="{{ $product['alias']['alias'] ?? '' }}"
                                title="{{ $product['name'] }}"><img
                                    onmouseover="doTooltip(event,'{{ $product['images'][0]['path'] ?? config('image.default_image') }}')"
                                    onmouseout="hideTip()" class="col-100 product-img"
                                    data-lazyload="{{ $product['images'][0]['path'] ?? config('image.default_image') }}"
                                    src="images/rolling.svg" alt="{{ $product['name'] }}"
                                    onerror='this.src="images/no-image.jpg"' /></a>
                            @if ($product['discount'])
                            <div class="product-pos product-percent"><span>-{{ $product['discount'] }}%</span></div>
                            @endif        
                        </div>
                        <div class="desc-product-hot p-relative t-center">
                            <h3 class="line-clamp line-clamp0"><a href="{{ $product['alias']['alias'] ?? '' }}"
                                    title="{{ $product['name'] }}">{{ $product['name'] }}</a></h3>
                            <div class="price-all">
                                <div class="price-new">{{ $product['discount'] ? number_format($product['sale_off_price']) :  number_format($product['price'])}} đ</div>

                                @if($product['discount'])
                                    <div class="price-old">{{ number_format($product['price'])}} đ</div>
                                @endif
                            </div>
                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer"
                                    data-id="{{ $product['id'] }}" data-price="1599000" data-qty="1" data-size="" data-color=""
                                    data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div id="pagingPage">
            @include('layout.pagination')
        </div>
    </div>

    <input type="hidden" name="href" value="aHR0cHM6Ly9oYXN1ZmxvcmEuY29tL2JvLXNpbmgtbmhhdA==">

</div>
