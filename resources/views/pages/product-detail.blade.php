@extends('layout.app')
@section('content')
    <div class="body-page bg-white">
        <div class="container">
            <div class="breadcumb">
                {{ Breadcrumbs::render('product', $product) }}
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 fix-col-0">
                    <div class="info mt-20">
                        <div id="sanpham">
                            <div class="khung">
                                <div class="row fix-row-0">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="col-pro-right">
                                                    <div id="box-detail-plus">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 t-center">
                                                                <div class="product-detail-gallery">
                                                                    <div class="gallery-top">
                                                                        @foreach ($product->images as $image)
                                                                            <a href="{{ $image['path'] }}" class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: on; hint: always;">
                                                                                <img src="{{ $image['path'] }}"
                                                                                    alt="{{ $product->name }}">
                                                                            </a>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="gallery-bottom cs-pointer mt-5">
                                                                        @foreach ($product->images as $image)
                                                                        <div class="mr-5 tf-hover o-hidden">
                                                                            <img src="{{$image['path']}}" class="bottom-product" alt="{{ $product['name'] }}">
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <h1 class="title-product-detail">{{ $product['name'] }}</h1>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <ul class="box-product-detail mt-10 mb-0">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-mn-6 col-xs-12">
                                                                                <div class="product-detail-price">
                                                                                    <b><span
                                                                                            class="js-price-new">{{ number_format($product['sale_off_price']) }} ??</span></b>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @if ($product['price'] > $product['sale_off_price'])
                                                                    <li>
                                                                        <div class="row">

                                                                            <div class="col-md-6 col-sm-6 col-mn-6 col-xs-12">
                                                                                <div class="product-detail-price-old">
                                                                                    <b><span
                                                                                            class="js-price-old">{{ number_format($product['price']) }} ??</span></b>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    <li class="desc-detail">
                                                                       {!! $product['description'] !!}
                                                                    </li>

                                                                    <li class="ds-flex flex-align-center flex-start" style="border:none">
                                                                        <span class="mr-10 w-label">S??? l?????ng:</span>
                                                                        <span>
                                        <div class="wrap_qty mt-5">
                                            <span class="down">-</span>
                                                                                <input type="text" class="input-text qty" name="qty" id="qty" value="1" title="S??? l?????ng" maxlength="6" min="1" data-action="" max="21" data-max="21">
                                                                                <span class="up" data-max="21" max="21">+</span>
                                                                    </div>
                                                                    </span>
                                                                    </li>
                                                                    <li style="border:none">
                                                                        <div class="actions mt-15">
                                                                            <a class="btn btn_site_3 btnAddToCart" data-cart-advance="no" data-price="1599000" data-id="{{ $product['id'] }}"><span>Th??m v??o
                                                gi???</span></a>
                                                                            <a class="btn buyCart btn_site_2 ml-15 mg-0i" data-cart-advance="no" data-price="1599000" data-id="{{ $product['id'] }}">Mua
                                                                                ngay</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div style="display:flex;width: 100%;margin-bottom: 10px;margin-top:10px;">
                                                                    <div class="product-social-sharing pt-15">
                                                                        <ul>
                                                                            <li class="facebook"><a href="http://www.facebook.com/sharer.php?u={{ getCurrentUrl() }}"><i class="fa fa-facebook"></i>Facebook</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row fix-row-0 mt-20">
                                            <div class="col-md-12 col-xs-12 fix-col-0">
                                                <div class="box-page">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item active">
                                                            <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail-tabs" role="tab" aria-controls="detail" aria-selected="true">
                                                                N???i dung chi ti???t                        </a>
                                                        </li>
                                                    </ul>
                                                    {{-- <div class="tab-content pd-20" id="myTabContent">
                                                        <div class="tab-pane fade active" id="detail-tabs" role="tabpanel" aria-labelledby="detail-tab">
                                                            <div class="wrapper-toc">
                                                                <div class="content">
                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">B?? HOA TULIP HBO - 082 TULIP TR???NG H?? LAN</span></span></span></strong></p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Chi ti???t thi???t k???:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ 20 c??nh <strong>HOA TULIP TR???NG</strong> H?? Lan<br />
+ Hoa l?? ph??? li???u nh???p kh???u kh??c.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hoa tulip tr???ng ?????i di???n cho t??nh y??u v?? ni???m ??am m?? v?? g???n v???i ?? ngh??a v??? s??? b??nh y??n. Ch??nh v?? v???y, nh???ng ng?????i nh???n ???????c b?? hoa n??y th?????ng c?? t??m h???n th???t ?????p, t???m l??ng cao th?????ng v?? v??? tha.<br />
Khi t???ng hoa ch??c m???ng, hoa sinh nh???t th?? ng?????i t???ng s??? ngh?? ngay ?????n hoa b??. B???i v?? hoa b?? d??? mang ??i, v?? h??n n???a hoa b?? t??? x??a ?????n nay lu??n mang ?? ngh??a ch??c m???ng, m???ng b??nh an, m???ng t??i l???c.<br />
Hasu nghi??n c???u v?? s??ng t???o ra nh???ng m???u hoa b?? ngh??? thu???t, thay ?????i theo xu h?????ng m???i ????? kh??ch h??ng c?? nhi???u l???a ch???n h??n.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Hoa t????i m???i ng??y:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">M???i ng??y, Hasu nh???p kh???u v??? nhi???u lo???i<strong> HOA T????I</strong> kh??c nhau. T??y theo m??a hoa m?? lo???i hoa c?? th??? thay ?????i.??<br />
V???y n??n kh??ch h??ng<strong> MUA HOA</strong> h??y y??n t??m r???ng m??nh s??? lu??n <strong>MUA HOA ?????P</strong> nh???t nh??.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Quan ??i???m kh??c bi???t:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ Kh??ng ch??? ????n gi???n l?? m???t b?? hoa, Hasu lu??n g???i c??? t???m l??ng ch??n th??nh ph???c v???, nh???ng th??ng ??i???p y??u th????ng v??o t???ng n??? hoa.<br />
+ M???i b?? hoa, m???i s???n ph???m ???????c t???o ra b???i t???m l??ng florist nh?? Hasu, mang trong m??nh s??? m???nh gi??p kh??ch h??ng trao nh???ng y??u th????ng t???i t???n tay ng?????i nh???n.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- S??ng t???o:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C??c m???u hoa t???i Hasu lu??n ???????c c??c florist s??ng t???o kh??ng ng???ng, kh??c bi???t, ?????c ????o kh??ng ti???m hoa n??o c??, c???p nh???t xu h?????ng th?????ng xuy??n, gi??p kh??ch h??ng kh??ng b??? nh??m ch??n.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- D???ch v??? chu ????o v?? nhi???t t??nh:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hasu lu??n t?? v???n t???n t??nh, th???u hi???u t??m t?? nhu c???u c???a kh??ch h??ng n??n lu??n trao ????ng m???u hoa kh??ch h??ng mong mu???n.<br />
Hasu Flora lu??n t??? tin l?? SHOP HOA t???n t??m nh???t Vi???t nam, ??? ????y ch??ng t??i B??N HOA b???ng c??? t???m l??ng d?? kh??ch h??ng mua HOA B??, HOA L???NG, HOA B??NH, HOA KHAI TR????NG, ...hay HOA KH?? c??ng ?????u v?? c??ng h??i l??ng.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- H??nh ???nh thi???t k??? hoa ch??? mang t??nh ch???t tham kh???o. T??y v??o m??a hoa m?? m???t s??? lo???i hoa l?? trong thi???t k??? s??? kh??ng c?? ho???c ch???t l?????ng kh??ng ?????m b???o ????? th???c hi???n ????n h??ng. Ch??ng t??i s??? d??ng c??c lo???i hoa l?? kh??c thay th???. H??nh d??ng v?? m??u s???c c???a hoa thay th??? s??? kh??ng l??m thay ?????i thi???t k??? hoa, hay t??nh th???m m?? c???a s???n ph???m. Qu?? kh??ch vui l??ng li??n h??? v???i ch??ng t??i qua s??? hotline tr?????c khi ?????t h??ng online ????? ???????c t?? v???n k?? h??n v??? c??c lo???i hoa hi???n c?? trong m??a.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Cam k???t c???a Hasu:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ Ch??ng t??i lu??n ?????m b???o 100% c??c hoa lu??n t????i v?? m???i.<br />
+ L??m ????ng m???u, giao ????ng h???n, thu ????ng gi?? ship, kh??ng ph??t sinh th??m chi ph?? b???t th?????ng.<br />
+ Lu??n c?? m???c chi???t kh???u h???p d???n cho qu?? kh??ch h??ng, ?????i t??c l?? c??ng ty ?????t ????n v???i s??? l?????ng l???n ho???c ?????t h??ng th?????ng xuy??n h??ng ng??y.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">V???y n??n, khi c??c b???n C???N HOA T????I h??y nh??? ngay ?????n Hasu ????? ?????T HOA nh?? ^^</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- H??nh th???c thanh to??n:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ Qu?? Kh??ch c?? th??? thanh to??n online b???ng h??nh th???c chuy???n kho???n qua Internetbanking v??o t??i kho???n c???a Hasu theo c?? ph??p: T??n kh??ch h??ng + S??T ?????t h??ng + M?? s??? s???n ph???m<br />
+ N???u Qu?? kh??ch v???a l?? ng?????i ?????t c??ng l?? ng?????i nh???n hoa, Qu?? kh??ch c?? th??? l???a ch???n h??nh th???c th??nh to??n ???Thu ti???n khi giao h??ng???, Qu?? kh??ch s??? thanh to??n ti???n ????n h??ng khi nh???n ???????c s???n ph???m (??p d???ng ?????i v???i ????n h??ng c?? gi?? tr??? t???ng h??a ????n d?????i 1.000.000??).</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- N???u Qu?? kh??ch c???n ?????t c??c m???u hoa ?????c bi???t kh??c, xin vui l??ng li??n h??? tr???c ti???p qua hotline 07989 12 383 ho???c inbox tr???c ti???p t???i Fanpage: Hasu Flora ????? nh??n vi??n shop t?? v???n cho Qu?? kh??ch ???????c t???t h??n.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hasu xin ch??n th??nh c???m ??n s??? ???ng h??? c???a Qu?? Kh??ch.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <h3><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#FF0000;"><span style="font-size:18px;">HASU FLORA</span></span><br />
Address: 67 Thu Khoa Huan, Ben Thanh Ward, District 1, Ho Chi Minh City<br />
Phone/zalo/viber : 07989 12 383<br />
Email: hasufloral@gmail.com<br />
Website: hasuflora.com</span></span></span></strong></h3>

                                                                    <p><a href="https://hasuflora.com/"><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tag : hoa t????i gi?? r???, hoa t????i qu???n 1, hoa t????i hcm, hoa t????i hasu, shop hoa gi?? r???, shop hoa ?????p, shop hoa qu???n 1, Flower shop, Hoa t????i nh???p kh???u, Hoa s??? ki???n</span></span></span></a></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">#Hasu #floral #hoa #flower #bloom #dep #hoadep #hoathietke #hoatuoi #hoanhapkhau #hoatinhyeu #hoakhaitruong #hoachucmung #hoasinhnhat #dienhoa #hoasaigon #sai #gon #hoacuoi #flowerwedding #hoaquan1 #hoaquan3 #tiemhoaganday #tiemhoatuoidep??</span></span>
                                                                            </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment-tab">
                                                            <div class="fb-comments" data-href="https://hasuflora.com:443/bo-hoa-tulip-hbo-082-tulip-trang-ha-lan" data-width="100%" data-numposts="5">
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $(function() {
                                            $('.checked-option').on('change', function() {
                                                var j = $(this).val();
                                                $.ajax({
                                                    url: 'ajax/ajaxPrice.php',
                                                    type: 'POST',
                                                    data: {
                                                        j: j
                                                    },
                                                    dataType: 'JSON',
                                                    success: function(res) {
                                                        $('#price').html(res.priceText);
                                                        $('.js-price-new').html(res.priceText);
                                                        $('.js-price-old').html(res.priceOldText);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section-list mt-30 clearfix">
                        <div class="row fix-row-0">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title-page ds-flex flex-align-center flex-space">
                                    <div class="title p-relative"><a href="tat-ca" title="S???n ph???m li??n quan" class="p-relative">
                                            S???n ph???m li??n quan                    </a></div>
                                </div>
                                <div class="box-hotdeal mt-20">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active" id="grid-view" role="tabpanel" aria-labelledby="grid-view">
                                            @foreach (array_chunk($relatedProducts, 5) as $products)
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
                                                                <div class="price-new">{{ $product['discount'] ? number_format($product['sale_off_price']) :  number_format($product['price'])}} ??</div>
                                
                                                                @if($product['discount'])
                                                                    <div class="price-old">{{ number_format($product['price'])}} ??</div>
                                                                @endif
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer"
                                                                    data-id="{{ $product['id'] }}" data-price="1599000" data-qty="1" data-size="" data-color=""
                                                                    data-material="" title="Th??m v??o gi???">Th??m v??o gi???</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="js/web/product-detail.js"></script>
@endsection