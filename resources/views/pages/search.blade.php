@extends('layout.app')
@section('content')
    <div class="body-page bg-white">
        <div class="container">
            <div class="breadcumb">
                <ol id="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://hasuflora.com/"><span itemprop="name"><i class="fa fa-home" aria-hidden="true"></i></span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://hasuflora.com/tim-kiem&keywords=hoa hong"><span itemprop="name">kết quả tìm kiếm</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 fix-col-0">
                    <div class="Page">
                        <div class='row fix-row-0'>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title-default p-relative mb-10 t-center">
                                    <h1><a class="p-relative" href="javascript:" title="Kết quả Có 15 sản phẩm được tìm thấy!">Kết quả Có 15 sản phẩm được tìm thấy!</a></h1>
                                    <div class="bx-title"></div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="shop-top-bar ds-mobile mt-30">
                                    <div class="shop-bar-inner">
                                        <div class="product-view-mode">
                                            <ul class="nav shop-item-filter-list" role="tablist">
                                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i
                                                            class="fa fa-th"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toolbar-amount mt-0i ml-0i">
                                                    <span>Hiển thị 1 đến <span
                                                            id="show">10</span> của 15 sản phẩm</span>
                                        </div>
                                    </div>
                                    <div class="product-select-box ds-flex flex-align-item ds-mobile">
                                        <div class="product-short mr-20 mg-0i">
                                            <p>Sắp xếp:</p>
                                            <select name="js-sort-by" data-href="tim-kiem" data-show="" data-page="1" class="nice-select">
                                                <option value="id-desc" >Mặc định
                                                </option>
                                                <option value="ten_vi-asc"
                                                >A → Z</option>
                                                <option value="ten_vi-desc"
                                                >Z → A</option>
                                                <option value="giaban-asc" >Giá tăng
                                                    dần</option>
                                                <option value="giaban-desc" >Giá giảm
                                                    dần</option>
                                                <option value="ngaytao-asc" >Hàng mới
                                                    nhất</option>
                                                <option value="ngaytao-desc" >Hàng
                                                    cũ nhất</option>
                                            </select>
                                        </div>
                                        <div class="product-short mt-10i">
                                            <p>Hiển thị:</p>
                                            <select name="js-limit-by" data-href="tim-kiem" data-sort="" data-page="1" class="nice-select select-limit">
                                                <option value="10" >10</option>
                                                <option value="25" >25</option>
                                                <option value="50" >50</option>
                                                <option value="100" >100</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="box-inPage mt-20">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active" id="grid-view" role="tabpanel" aria-labelledby="grid-view">
                                            <div class="row fix-row-5">
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-do-hbo-083" title="BÓ HOA HỒNG ĐỎ HBO - 083"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/bohoahongdo083-3099.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/bohoahongdo083-3099.png"src="images/rolling.svg"alt="BÓ HOA HỒNG ĐỎ HBO - 083" onerror='this.src="images/no-image.jpg"'/></a></div>
                                                        <div
                                                            class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-do-hbo-083" title="BÓ HOA HỒNG ĐỎ HBO - 083">BÓ HOA HỒNG ĐỎ HBO - 083</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">850.000 đ</div>
                                                                <div class="price-old"></div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4114" data-price="850000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-tone-cam-hbo-081" title="BÓ HOA HỒNG TONE CAM HBO - 081"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoitonemaurucro081-6003.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoitonemaurucro081-6003.png"src="images/rolling.svg"alt="BÓ HOA HỒNG TONE CAM HBO - 081" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-11%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-tone-cam-hbo-081" title="BÓ HOA HỒNG TONE CAM HBO - 081">BÓ HOA HỒNG TONE CAM HBO - 081</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">850.000 đ</div>
                                                                <div class="price-old">960.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4112" data-price="850000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="lang-hoa-hong-hlg-037" title="LẴNG HOA HỒNG HLG - 037"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/langhoahongtone-hong037-9108.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/langhoahongtone-hong037-9108.png"src="images/rolling.svg"alt="LẴNG HOA HỒNG HLG - 037" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-8%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="lang-hoa-hong-hlg-037" title="LẴNG HOA HỒNG HLG - 037">LẴNG HOA HỒNG HLG - 037</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">690.000 đ</div>
                                                                <div class="price-old">750.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4107" data-price="690000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="lang-hoa-hong-hlg-036-hoa-nhap-khau" title="LẴNG HOA HỒNG HLG - 036 HOA NHẬP KHẨU"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/langhoahongjuliet036-3387.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/langhoahongjuliet036-3387.png"src="images/rolling.svg"alt="LẴNG HOA HỒNG HLG - 036 HOA NHẬP KHẨU" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-10%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="lang-hoa-hong-hlg-036-hoa-nhap-khau" title="LẴNG HOA HỒNG HLG - 036 HOA NHẬP KHẨU">LẴNG HOA HỒNG HLG - 036 HOA NHẬP KHẨU</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">890.000 đ</div>
                                                                <div class="price-old">990.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4106" data-price="890000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-079" title="BÓ HOA HỒNG HBO - 079"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi079-9422.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi079-9422.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 079" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-13%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-079" title="BÓ HOA HỒNG HBO - 079">BÓ HOA HỒNG HBO - 079</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">690.000 đ</div>
                                                                <div class="price-old">790.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4102" data-price="690000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-do-hbo-078" title="BÓ HOA HỒNG ĐỎ HBO - 078"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi78-4152.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi78-4152.png"src="images/rolling.svg"alt="BÓ HOA HỒNG ĐỎ HBO - 078" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-14%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-do-hbo-078" title="BÓ HOA HỒNG ĐỎ HBO - 078">BÓ HOA HỒNG ĐỎ HBO - 078</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">850.000 đ</div>
                                                                <div class="price-old">990.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4099" data-price="850000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-071-bo-hoa-khong-lo" title="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi71-3263.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi71-3263.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-7%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-071-bo-hoa-khong-lo" title="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ">BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">1.390.000 đ</div>
                                                                <div class="price-old">1.500.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4090" data-price="1390000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-070" title="BÓ HOA HỒNG HBO - 070"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi70-1460.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi70-1460.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 070" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-13%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-070" title="BÓ HOA HỒNG HBO - 070">BÓ HOA HỒNG HBO - 070</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">690.000 đ</div>
                                                                <div class="price-old">790.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4088" data-price="690000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-077" title="BÓ HOA HỒNG HBO - 077"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi77-4429.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi77-4429.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 077" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-14%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-077" title="BÓ HOA HỒNG HBO - 077">BÓ HOA HỒNG HBO - 077</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">590.000 đ</div>
                                                                <div class="price-old">690.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4096" data-price="590000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-076" title="BÓ HOA HỒNG HBO - 076"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi76-6483.png')" onmouseout="hideTip()" class="col-100" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi76-6483.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 076" onerror='this.src="images/no-image.jpg"'/></a></div>
                                                        <div
                                                            class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-076" title="BÓ HOA HỒNG HBO - 076">BÓ HOA HỒNG HBO - 076</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">590.000 đ</div>
                                                                <div class="price-old"></div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4095" data-price="590000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="pagingPage">
                                            <ul class='pagination'>
                                                <li><a class='current'>1</a></li>
                                                <li><a href='https://hasuflora.com:443/tim-kiem&keywords=hoa%20hong&page=2'>2</a></li>
                                                <li><a href='https://hasuflora.com:443/tim-kiem&keywords=hoa%20hong&page=2'> &rsaquo;</a></li>
                                                <li><a href='https://hasuflora.com:443/tim-kiem&keywords=hoa%20hong&page=2'> &rsaquo;&rsaquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <input type="hidden" name="href" value="aHR0cHM6Ly9oYXN1ZmxvcmEuY29tL3RpbS1raWVt">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
