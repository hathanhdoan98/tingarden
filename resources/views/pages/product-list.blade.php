@extends('layout.app')
@section('content')
    <div class="body-page bg-white">
        <div class="container">
            <div class="breadcumb">
                {{ Breadcrumbs::render('category', $category) }}
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 fix-col-0">
                    <div class="Page">
                        <div class='row fix-row-0'>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title-default p-relative mb-10 t-center">
                                    <h1><a class="p-relative" href="javascript:" title="Hoa bó">Hoa bó</a></h1>
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
                                                <!-- <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                            href="#list-view"><i class="fa fa-th-list"></i></a></li> -->
                                            </ul>
                                        </div>
                                        <div class="toolbar-amount mt-0i ml-0i">
                                                    <span>Hiển thị 1 đến <span
                                                            id="show">10</span> của 83 sản phẩm</span>
                                        </div>
                                    </div>
                                    <div class="product-select-box ds-flex flex-align-item ds-mobile">
                                        <div class="product-short mr-20 mg-0i">
                                            <p>Sắp xếp:</p>
                                            <select name="js-sort-by" data-href="bo-sinh-nhat" data-show="" data-page="1" class="nice-select">
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
                                            <select name="js-limit-by" data-href="bo-sinh-nhat" data-sort="" data-page="1" class="nice-select select-limit">
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-do-hbo-083" title="BÓ HOA HỒNG ĐỎ HBO - 083"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/bohoahongdo083-3099.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/bohoahongdo083-3099.png"src="images/rolling.svg"alt="BÓ HOA HỒNG ĐỎ HBO - 083" onerror='this.src="images/no-image.jpg"'/></a></div>
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-tulip-hbo-082-tulip-trang-ha-lan" title="BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/bohoatuliptrang082b-4538.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/bohoatuliptrang082b-4538.png"src="images/rolling.svg"alt="BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-5%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-tulip-hbo-082-tulip-trang-ha-lan" title="BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN">BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">1.599.000 đ</div>
                                                                <div class="price-old">1.690.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4113" data-price="1599000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-tone-cam-hbo-081" title="BÓ HOA HỒNG TONE CAM HBO - 081"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoitonemaurucro081-6003.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoitonemaurucro081-6003.png"src="images/rolling.svg"alt="BÓ HOA HỒNG TONE CAM HBO - 081" onerror='this.src="images/no-image.jpg"'/></a>
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-079" title="BÓ HOA HỒNG HBO - 079"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi079-9422.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi079-9422.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 079" onerror='this.src="images/no-image.jpg"'/></a>
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-do-hbo-078" title="BÓ HOA HỒNG ĐỎ HBO - 078"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi78-4152.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi78-4152.png"src="images/rolling.svg"alt="BÓ HOA HỒNG ĐỎ HBO - 078" onerror='this.src="images/no-image.jpg"'/></a>
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-071-bo-hoa-khong-lo" title="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi71-3263.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi71-3263.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ" onerror='this.src="images/no-image.jpg"'/></a>
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-070" title="BÓ HOA HỒNG HBO - 070"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi70-1460.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi70-1460.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 070" onerror='this.src="images/no-image.jpg"'/></a>
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
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-huong-duong-hbo-069" title="BÓ HOA HƯỚNG DƯƠNG HBO - 069"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi069-7448.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi069-7448.png"src="images/rolling.svg"alt="BÓ HOA HƯỚNG DƯƠNG HBO - 069" onerror='this.src="images/no-image.jpg"'/></a>
                                                            <div
                                                                class="product-pos product-percent"><span>-11%</span></div>
                                                        </div>
                                                        <div class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-huong-duong-hbo-069" title="BÓ HOA HƯỚNG DƯƠNG HBO - 069">BÓ HOA HƯỚNG DƯƠNG HBO - 069</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">490.000 đ</div>
                                                                <div class="price-old">550.000 đ</div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4087" data-price="490000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-thuy-tien-hbo-067" title="BÓ HOA THỦY TIÊN HBO - 067"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi067-3839.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi067-3839.png"src="images/rolling.svg"alt="BÓ HOA THỦY TIÊN HBO - 067" onerror='this.src="images/no-image.jpg"'/></a></div>
                                                        <div
                                                            class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-thuy-tien-hbo-067" title="BÓ HOA THỦY TIÊN HBO - 067">BÓ HOA THỦY TIÊN HBO - 067</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">490.000 đ</div>
                                                                <div class="price-old"></div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4085" data-price="490000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-5 col-xs-12">
                                                    <div class="item-product-hot mb-20 cs-pointer o-hidden p-relative">
                                                        <div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-dep-hbo-063" title="BÓ HOA ĐẸP HBO - 063"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi063-6084.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi063-6084.png"src="images/rolling.svg"alt="BÓ HOA ĐẸP HBO - 063" onerror='this.src="images/no-image.jpg"'/></a></div>
                                                        <div
                                                            class="desc-product-hot p-relative t-center">
                                                            <h3 class="line-clamp line-clamp0"><a href="bo-hoa-dep-hbo-063" title="BÓ HOA ĐẸP HBO - 063">BÓ HOA ĐẸP HBO - 063</a></h3>
                                                            <div class="price-all">
                                                                <div class="price-new">390.000 đ</div>
                                                                <div class="price-old"></div>
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4081" data-price="390000" data-qty="1" data-size="" data-color="" data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view">
                                                                                    <div class="row fix-row-5"><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-do-hbo-083" title="BÓ HOA HỒNG ĐỎ HBO - 083"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/bohoahongdo083-3099.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/bohoahongdo083-3099.png"src="images/rolling.svg"alt="BÓ HOA HỒNG ĐỎ HBO - 083" onerror='this.src="images/no-image.jpg"'/></a></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-do-hbo-083" title="BÓ HOA HỒNG ĐỎ HBO - 083">BÓ HOA HỒNG ĐỎ HBO - 083</a></h3><div class="price-all"><div class="price-new">850.000 đ</div><div class="price-old"></div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4114"data-price="850000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-tulip-hbo-082-tulip-trang-ha-lan" title="BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/bohoatuliptrang082b-4538.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/bohoatuliptrang082b-4538.png"src="images/rolling.svg"alt="BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-5%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-tulip-hbo-082-tulip-trang-ha-lan" title="BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN">BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN</a></h3><div class="price-all"><div class="price-new">1.599.000 đ</div><div class="price-old">1.690.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4113"data-price="1599000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-tone-cam-hbo-081" title="BÓ HOA HỒNG TONE CAM HBO - 081"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoitonemaurucro081-6003.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoitonemaurucro081-6003.png"src="images/rolling.svg"alt="BÓ HOA HỒNG TONE CAM HBO - 081" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-11%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-tone-cam-hbo-081" title="BÓ HOA HỒNG TONE CAM HBO - 081">BÓ HOA HỒNG TONE CAM HBO - 081</a></h3><div class="price-all"><div class="price-new">850.000 đ</div><div class="price-old">960.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4112"data-price="850000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-079" title="BÓ HOA HỒNG HBO - 079"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi079-9422.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi079-9422.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 079" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-13%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-079" title="BÓ HOA HỒNG HBO - 079">BÓ HOA HỒNG HBO - 079</a></h3><div class="price-all"><div class="price-new">690.000 đ</div><div class="price-old">790.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4102"data-price="690000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-do-hbo-078" title="BÓ HOA HỒNG ĐỎ HBO - 078"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi78-4152.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi78-4152.png"src="images/rolling.svg"alt="BÓ HOA HỒNG ĐỎ HBO - 078" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-14%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-do-hbo-078" title="BÓ HOA HỒNG ĐỎ HBO - 078">BÓ HOA HỒNG ĐỎ HBO - 078</a></h3><div class="price-all"><div class="price-new">850.000 đ</div><div class="price-old">990.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4099"data-price="850000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-071-bo-hoa-khong-lo" title="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi71-3263.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi71-3263.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-7%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-071-bo-hoa-khong-lo" title="BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ">BÓ HOA HỒNG HBO - 071 BÓ HOA KHỔNG LỒ</a></h3><div class="price-all"><div class="price-new">1.390.000 đ</div><div class="price-old">1.500.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4090"data-price="1390000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-hong-hbo-070" title="BÓ HOA HỒNG HBO - 070"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi70-1460.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi70-1460.png"src="images/rolling.svg"alt="BÓ HOA HỒNG HBO - 070" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-13%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-hong-hbo-070" title="BÓ HOA HỒNG HBO - 070">BÓ HOA HỒNG HBO - 070</a></h3><div class="price-all"><div class="price-new">690.000 đ</div><div class="price-old">790.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4088"data-price="690000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-huong-duong-hbo-069" title="BÓ HOA HƯỚNG DƯƠNG HBO - 069"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi069-7448.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi069-7448.png"src="images/rolling.svg"alt="BÓ HOA HƯỚNG DƯƠNG HBO - 069" onerror='this.src="images/no-image.jpg"'/></a><div class="product-pos product-percent"><span>-11%</span></div></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-huong-duong-hbo-069" title="BÓ HOA HƯỚNG DƯƠNG HBO - 069">BÓ HOA HƯỚNG DƯƠNG HBO - 069</a></h3><div class="price-all"><div class="price-new">490.000 đ</div><div class="price-old">550.000 đ</div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4087"data-price="490000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-thuy-tien-hbo-067" title="BÓ HOA THỦY TIÊN HBO - 067"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi067-3839.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi067-3839.png"src="images/rolling.svg"alt="BÓ HOA THỦY TIÊN HBO - 067" onerror='this.src="images/no-image.jpg"'/></a></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-thuy-tien-hbo-067" title="BÓ HOA THỦY TIÊN HBO - 067">BÓ HOA THỦY TIÊN HBO - 067</a></h3><div class="price-all"><div class="price-new">490.000 đ</div><div class="price-old"></div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4085"data-price="490000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div><div class="column-5 col-xs-12"><div class="item-product-hot mb-20 cs-pointer o-hidden p-relative"><div class="thumb-product-hot p-relative t-center tf-hover o-hidden"><a href="bo-hoa-dep-hbo-063" title="BÓ HOA ĐẸP HBO - 063"><img onmouseover="doTooltip(event,'resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi063-6084.png')" onmouseout="hideTip()" class="col-100 product-img" data-lazyload="resize/640x630/1/upload/baiviet/hoabohoasinhnhathoatuoi063-6084.png"src="images/rolling.svg"alt="BÓ HOA ĐẸP HBO - 063" onerror='this.src="images/no-image.jpg"'/></a></div><div class="desc-product-hot p-relative t-center"><h3 class="line-clamp line-clamp0"><a href="bo-hoa-dep-hbo-063" title="BÓ HOA ĐẸP HBO - 063">BÓ HOA ĐẸP HBO - 063</a></h3><div class="price-all"><div class="price-new">390.000 đ</div><div class="price-old"></div></div><div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer" data-id="4081"data-price="390000" data-qty="1"data-size=""data-color=""data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div></div></div></div></div>                                            </div> -->
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="pagingPage">
                                            <ul class='pagination'>
                                                <li><a class='current'>1</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=2'>2</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=3'>3</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=4'>4</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=5'>5</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=6'>6</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=7'>7</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=8'>8</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=9'>9</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=2'> &rsaquo;</a></li>
                                                <li><a href='https://hasuflora.com:443/bo-sinh-nhat&page=9'> &rsaquo;&rsaquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <input type="hidden" name="href" value="aHR0cHM6Ly9oYXN1ZmxvcmEuY29tL2JvLXNpbmgtbmhhdA==">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
