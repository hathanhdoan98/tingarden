@extends('layout.app')
@section('content')
    <div class="body-page bg-white">
        <div class="container">
            <div class="breadcumb">
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 fix-col-0">
                    <style>
                        .title-cart-default h2 {
                            position: relative;
                            padding-left: 60px;
                            font-size: 18px;
                            text-transform: uppercase;
                            font-weight: bold;
                        }

                        .title-cart-default h2.pd-default {
                            padding-left: 20px !important
                        }

                        .title-cart-default h2.pd-thongtin {
                            padding-left: 25px !important
                        }

                        .title-cart-default h2:before {
                            content: '';
                            position: absolute;
                            top: -15px;
                            left: 0;
                            height: 53px;
                            width: 53px;
                        }

                        .title-giohang h2 {
                            color: #f6c244;
                        }

                        .title-giohang h2:before {
                            background: url('images/cart_detail.png')no-repeat;
                        }

                        .title-giaohang h2:before {
                            top: 0;
                            height: 20px;
                            width: 15px;
                            background: url('images/ic-giaohang.png')no-repeat;
                        }

                        .title-thongtin h2:before {
                            top: 0px;
                            height: 15px;
                            width: 23px;
                            background: url('images/ic-thongtin.png')no-repeat;
                        }

                        .nav-tabs {
                            border: none;
                        }

                        .cart-step-tabs .head-tabs .nav-tabs>li {
                            background: #ccc;
                            margin: 20px 0px;
                        }

                        .cart-step-tabs .head-tabs .nav-tabs>li a {
                            background: 0;
                            display: block;
                            border: 0;
                            border-radius: 0;
                            padding: 0;
                            margin: 0;
                            cursor: pointer;
                            padding: 10px;
                        }

                        .cart-step-tabs .head-tabs .nav-tabs>li.active a {
                            color: #fff
                        }

                        .cart-step-tabs .head-tabs .nav-tabs>li.active {
                            position: relative;
                            background: var(--html-bg-website);
                        }

                        .cart-step-tabs .head-tabs .nav-tabs>li.active:before {
                            content: '';
                            display: inline-block;
                            border-left: 10px solid transparent;
                            border-right: 10px solid transparent;
                            border-bottom: 15px solid var(--html-bg-website);
                            border-top: 0;
                            border-bottom-color: var(--html-bg-website);
                            position: absolute;
                            top: -15px;
                        }

                        .nav-tabs>li {
                            text-align: center;
                        }

                        .nav-tabs>li>a {
                            text-transform: uppercase;
                            font-size: 16px;
                        }

                        .p-img {
                            border: 1px solid #ccc;
                            padding: 5px;
                        }

                        .radio-item {
                            position: relative;
                            cursor: pointer;
                            font-size: 14px;
                            margin-top: 5px;
                        }

                        .radio-item input {
                            position: absolute;
                            left: -9999px;
                        }

                        .radio-item .rd-text {
                            padding-left: 18px;
                            display: inline-block;
                            position: relative;
                            font-weight: 400;
                        }

                        .radio-item .rd-text::before {
                            content: '';
                            display: block;
                            width: 15px;
                            height: 15px;
                            border: 1px solid #ccc;
                            position: absolute;
                            left: 0;
                            top: 3px;
                            border-radius: 50%;
                        }

                        .radio-item input:checked+.rd-text::before {
                            /*border: 7px solid #00a4f5; */
                            /* border-top: 7px solid #00a4f5; */
                            /* border-bottom: 7px solid #00a4f5; */
                            border: 4px solid #00a4f5;
                        }

                        .title-xacnhan {
                            background: #e1e1e1;
                        }

                        .title-xacnhan h2 {
                            font-size: 16px;
                            color: #f00;
                            font-weight: bold;
                            padding: 10px;
                        }

                        .border-col {
                            border-bottom: 1px solid #ccc;
                        }

                        .pd-col {
                            padding: 10px 20px;
                            font-size: 14px;
                        }

                        .box-xacnhan {
                            box-shadow: 0px 0px 2px 2px #ccc;
                        }

                        .box-bg {
                            background: #f0f0f0;
                            margin-top: 20px;
                            padding: 10px 30px;
                            box-sizing: border-box;
                        }

                        .title-success h3 {
                            display: inline-block;
                            border: 2px solid #bb2025;
                            padding: 10px 70px;
                            color: #bb2025;
                            font-weight: 600;
                            position: relative;
                            font-size: 18px;
                        }

                        .title-success h3:before {
                            content: '';
                            position: absolute;
                            top: 8px;
                            left: 30px;
                            background: url(images/check-success.png)no-repeat;
                            height: 24px;
                            width: 24px;
                        }

                        .step-footer-previous-link button {
                            color: #fff;
                            text-transform: uppercase;
                            font-size: 14px;
                            padding: 10px;
                        }

                        .button-block {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding: 10px 20px;
                            border: 1px solid #ccc;
                        }

                        .title-success-giaohang h2 {
                            font-size: 16px;
                            color: #000;
                            position: relative;
                            font-weight: bold;
                            padding-left: 45px;
                        }

                        .title-success-giaohang h2:before {
                            content: '';
                            position: absolute;
                            top: -5px;
                            left: 0;
                            background: url('images/icon-phuongthuc.png')no-repeat;
                            padding: 15px 17px;
                        }

                        .box-ajax-giaohang {
                            margin-top: 15px;
                            box-shadow: 0px 0px 2px 2px #ccc;
                            padding: 20px 30px;
                        }

                        button.btn-default {
                            height: 35px;
                            width: 30px;
                            background: #fff;
                            border: 1px solid #ccc;
                            font-size: 16px;
                        }

                        button.btn-minus {
                            border-radius: 30px 0px 0px 30px;
                            border-right: none;
                        }

                        button.btn-plus {
                            border-radius: 0px 30px 30px 0px;
                            border-left: none;
                        }

                        button.btn-plus {
                            border-radius: 0px 30px 30px 0px;
                            border-left: none;
                        }
                        span.remove-cart{
                            font-size: 30px;
                            cursor: pointer;
                        }
                        span.remove-cart:hover{
                            color: blue
                        }
                        @media (min-width: 320px) and (max-width: 767px) {
                            .step-footer-previous-link button {
                                margin-bottom: 10px;
                            }

                            .nav-tabs>li>a {
                                font-size: 14px
                            }

                            #ajaxLoadCart,
                            .fix-col-w8 {
                                display: block;
                                width: 100%;
                                overflow-x: auto;
                                -webkit-overflow-scrolling: touch;
                            }

                            .fix-col-w8 {
                                margin-top: 10px;
                            }

                            .fix-col-10 {
                                padding: 0 !important;
                            }

                            .box-bg {
                                padding: 10px !important;
                            }

                            .title-success h3 {
                                font-size: 13px;
                            }
                        }

                    </style>
                    <div class="box-success-order mb-30">
                        <div class="title-giohang title-cart-default pt-20 pb-20">
                            <h2 class="mg-0">Giao hàng & thanh toán</h2>
                        </div>
                        <!-- <form method="post" name="frm_order" action="" enctype="multipart/form-data"  id="frm_order"> -->
                        <div class="cart-step-tabs mb-30">
                            <div class="head-tabs">
                                <div class="swiper-container">
                                    <ul class="nav nav-tabs swiper-wrapper" role="tablist">
                                        <li class="swiper-slide active" role="presentation">
                                            <a href="#step1" aria-controls="home" role="tab">
                                                <div class="o-text">Giỏ hàng</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide" role="presentation">
                                            <a href="#step2" aria-controls="home" role="tab">
                                                <div class="o-text">Giao hàng & thanh toán</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide" role="presentation">
                                            <a href="#step3" aria-controls="home" role="tab">
                                                <div class="o-text">Xác nhận đơn hàng</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide" role="presentation">
                                            <a href="#step4" aria-controls="home" role="tab">
                                                <div class="o-text">Hoàn tất</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="step1">
                                    @include('pages.cart.step1', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price
                                    ])
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step2">
                                    @include('pages.cart.step2', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price
                                    ])
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step3">
                                    @include('pages.cart.step3', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price
                                    ])
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step4">
                                    @include('pages.cart.step4', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price
                                    ])
                                </div>
                            </div>
                        </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-news pt-20 mb-30 clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="title-news p-relative">

                            <span>Tin tức nổi bật</span>

                        </div>

                        <div class="box-news mt-25">

                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                <a href="cach-lua-chon-hoa-tuoi-doanh-nghiep-thong-minh"
                                                    title="Cách lựa chọn hoa tươi doanh nghiệp thông minh">
                                                    <img class="w-100"
                                                        src="resize/600x400/1/upload/baiviet/hoatuoihoalang015b9189-8797.png"
                                                        alt="Cách lựa chọn hoa tươi doanh nghiệp thông minh"
                                                        onerror='this.src="images/no-image.jpg"' />
                                                </a>
                                            </div>
                                            <div class="desc-news-i mt-10">
                                                <div class="mt-5 mb-5">
                                                    <a href="cach-lua-chon-hoa-tuoi-doanh-nghiep-thong-minh"
                                                        title="Cách lựa chọn hoa tươi doanh nghiệp thông minh">
                                                        Cách lựa chọn hoa tươi doanh nghiệp thông minh </a>
                                                </div>
                                                <div><i class="fa fa-calendar"
                                                        aria-hidden="true"></i>&nbsp;&nbsp;22/04/2021 </div>
                                                <div class="mt-10">Tặng hoa cho doanh nghiệp hay đối tác khách
                                                    hàng không chỉ là tặng 1 món giá trị mà còn thể hiện sự tinh tế, chỉn
                                                    chu của người tặng. Thay vì một món quà mang ý nghĩa vật chất như rượu,
                                                    trà, tranh...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="slide-news mt-10i">
                                                    <div class="mb-20">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                                    <div
                                                                        class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="ve-dep-va-y-nghia-theo-mau-sac-cua-hoa-tulip"
                                                                            title="Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/vedepvaynghiatheomausaccuahoatulip-7597.jpg"
                                                                                alt="Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip"
                                                                                onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i>&nbsp;&nbsp;23/01/2021
                                                                        </div>
                                                                        <div class="name-news">
                                                                            <a href="ve-dep-va-y-nghia-theo-mau-sac-cua-hoa-tulip"
                                                                                title="Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip">
                                                                                Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-20">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                                    <div
                                                                        class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="y-nghia-cua-hoa-hong-trong-nhung-dip-le-dac-biet"
                                                                            title="Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/ynghiacuahoahongtrongnhungdipledacbiet-4017.jpg"
                                                                                alt="Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt"
                                                                                onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i>&nbsp;&nbsp;23/01/2021
                                                                        </div>
                                                                        <div class="name-news">
                                                                            <a href="y-nghia-cua-hoa-hong-trong-nhung-dip-le-dac-biet"
                                                                                title="Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt">
                                                                                Ý nghĩa của hoa hồng trong những dịp lễ đặc
                                                                                biệt </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-20">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                                    <div
                                                                        class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="y-nghia-dac-biet-cua-hoa-dong-tien-ngay-tet-ma-it-ai-biet"
                                                                            title="Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai biết">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/ynghiadacbietcuahoadongtienngaytetmaitaibiet-14.jpg"
                                                                                alt="Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai biết"
                                                                                onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021
                                                                        </div>
                                                                        <div class="name-news">
                                                                            <a href="y-nghia-dac-biet-cua-hoa-dong-tien-ngay-tet-ma-it-ai-biet"
                                                                                title="Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai biết">
                                                                                Ý nghĩa đặc biệt của hoa đồng tiền ngày tết
                                                                                mà ít ai... </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-20">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                                    <div
                                                                        class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="cac-cach-cham-lan-ho-diep-ra-hoa-ruc-ro"
                                                                            title="Các cách chăm lan hồ điệp ra hoa rực rỡ">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/caccachchamlanhodieprahoarucro-957.jpg"
                                                                                alt="Các cách chăm lan hồ điệp ra hoa rực rỡ"
                                                                                onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021
                                                                        </div>
                                                                        <div class="name-news">
                                                                            <a href="cac-cach-cham-lan-ho-diep-ra-hoa-ruc-ro"
                                                                                title="Các cách chăm lan hồ điệp ra hoa rực rỡ">
                                                                                Các cách chăm lan hồ điệp ra hoa rực rỡ </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-20">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                                    <div
                                                                        class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="nhung-dieu-thu-vi-ve-hoa-ly-co-the-ban-chua-biet"
                                                                            title="NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/ynghiacuahoaly-277.png"
                                                                                alt="NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT"
                                                                                onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021
                                                                        </div>
                                                                        <div class="name-news">
                                                                            <a href="nhung-dieu-thu-vi-ve-hoa-ly-co-the-ban-chua-biet"
                                                                                title="NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT">
                                                                                NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA
                                                                                BIẾT </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-20">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                                    <div
                                                                        class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="cach-trong-va-cham-soc-hoa-lan-ho-diep"
                                                                            title="Cách trồng và chăm sóc hoa lan hồ điệp">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/cachtrongvachamsochoalanhodiep-9712.png"
                                                                                alt="Cách trồng và chăm sóc hoa lan hồ điệp"
                                                                                onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar"
                                                                                aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021
                                                                        </div>
                                                                        <div class="name-news">
                                                                            <a href="cach-trong-va-cham-soc-hoa-lan-ho-diep"
                                                                                title="Cách trồng và chăm sóc hoa lan hồ điệp">
                                                                                Cách trồng và chăm sóc hoa lan hồ điệp </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12">

                        <div class="title-news mt-10i p-relative">

                            <span>video nổi bật</span>

                        </div>
                        <div class="video-main">

                            <div class="player mt-25">

                                <iframe class="w-100i ds-block" width="100%" height="242"
                                    src="https://www.youtube.com/embed/EvARkqtDmYw?rel=0&autoplay=0" frameborder="0"
                                    allowfullscreen></iframe>

                            </div>


                        </div>

                        <div class="video-child w-100 mt-5">

                            <div class="slide-video">


                                <div>

                                    <div class="item-video pd-5 p-relative">

                                        <a href="https://www.youtube.com/watch?v=EvARkqtDmYw" data-fancybox="galleryVideo"
                                            title="MẸO CẮM HOA 10 NGÀY VẪN TƯƠI VÀ NƯỚC TRONG BÌNH KHÔNG THỐI"
                                            class="popup-video">

                                            <img class="w-100"
                                                src="https://img.youtube.com/vi/EvARkqtDmYw/mqdefault.jpg"
                                                style="height: 100px">

                                            <span id="play"></span>

                                        </a>

                                    </div>

                                </div>


                                <div>

                                    <div class="item-video pd-5 p-relative">

                                        <a href="https://www.youtube.com/watch?v=b9MWpjy0Jc8" data-fancybox="galleryVideo"
                                            title="Hướng dẫn cắm hoa cho người mới bắt đầu #1 Hoa ly"
                                            class="popup-video">

                                            <img class="w-100"
                                                src="https://img.youtube.com/vi/b9MWpjy0Jc8/mqdefault.jpg"
                                                style="height: 100px">

                                            <span id="play"></span>

                                        </a>

                                    </div>

                                </div>


                                <div>

                                    <div class="item-video pd-5 p-relative">

                                        <a href="https://www.youtube.com/watch?v=mnoKpGTfPEM" data-fancybox="galleryVideo"
                                            title="Những mẫu hoa best sellers" class="popup-video">

                                            <img class="w-100"
                                                src="https://img.youtube.com/vi/mnoKpGTfPEM/mqdefault.jpg"
                                                style="height: 100px">

                                            <span id="play"></span>

                                        </a>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <footer class="footer pt-20 pb-20">
            <div class="box-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-30 col-xs-12">

                            <div class="box-mg">

                                <div class="title-logo mt-20">

                                    <a href="" title="home">

                                        <img src="resize/155x105/1/upload/hinhanh/logo-hasu-501.png" alt=""
                                            onerror='this.src="images/no-image.jpg"' />
                                    </a>

                                </div>
                                <div class="desc-footer mt-20 pd-100">

                                    <h1><span style="font-size:22px;">Hasu thay bạn trao lời yêu thương !</span></h1>

                                    <p><span style="line-height:1.5;"><span
                                                style="font-family:arial,helvetica,sans-serif;"><span
                                                    style="font-size:16px;"><strong>Hoa tươi Hasu</strong> được...
                                </div>

                            </div>

                        </div>
                        <div class="col-md-3 col-sm-3 col-25 col-xs-12 ">

                            <div class="box-mg">

                                <div class="title-footer mt-20">

                                    <span>thông tin liên hệ</span>

                                </div>
                                <div class="desc-footer pd-100 mt-20">

                                    <h1><span style="font-size:22px;"><span style="color:#000000;"><strong>HASU
                                                    FLORA</strong></span></span>
                                    </h1>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span
                                                    style="color:#000000;"><strong><span
                                                            style="font-family:arial,helvetica,sans-serif;">Địa
                                                            chỉ:  </span><span
                                                            style="font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; white-space: pre-wrap;">67
                                                            Thủ Khoa Huân, P. Bến Thành, Q1, TP Hồ Chí
                                                            Minh</span></strong>
                                                </span>
                                            </span>
                                        </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span
                                                    style="color:#000000;"><strong><span
                                                            style="font-family:arial,helvetica,sans-serif;">Phone: </span></strong>
                                                </span><strong><span style="font-family:arial,helvetica,sans-serif;">07989
                                                        12 383</span></strong></span>
                                        </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span
                                                    style="color:#000000;"><strong><span
                                                            style="font-family:arial,helvetica,sans-serif;">Email:
                                                            hasuflora@gmail.com</span></strong>
                                                </span>
                                            </span>
                                        </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span
                                                    style="color:#000000;"><strong><span
                                                            style="font-family:arial,helvetica,sans-serif;">Website: hasuflora.com</span></strong>
                                                </span>
                                            </span>
                                        </span>
                                    </p>

                                    <div id="gtx-trans" style="position: absolute; left: 92px; top: 135.875px;">
                                        <div class="gtx-trans-icon"> </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3 col-20 col-xs-12">

                            <div class="box-mg">

                                <div class="title-footer mt-20">

                                    <span>Dịch vụ</span>

                                </div>

                                <div class="desc-footer mt-20">

                                    <ul>


                                        <li>

                                            <a href="chinh-sach-doi-tra-hoan-tien"
                                                title="Chính sách Đổi trả &amp; Hoàn tiền">

                                                Chính sách Đổi trả &amp; Hoàn tiền
                                            </a>

                                        </li>


                                        <li>

                                            <a href="chinh-sach-giao-hang" title="Chính sách giao hàng">

                                                Chính sách giao hàng
                                            </a>

                                        </li>


                                        <li>

                                            <a href="hinh-thuc-thanh-toan" title="Hình thức thanh toán">

                                                Hình thức thanh toán
                                            </a>

                                        </li>


                                        <li>

                                            <a href="dien-hoa-sai-gon" title="Điện hoa Sài Gòn">

                                                Điện hoa Sài Gòn
                                            </a>

                                        </li>


                                        <li>

                                            <a href="thiet-ke-va-trang-tri-su-kien"
                                                title="Thiết kế và trang trí hoa sự kiện">

                                                Thiết kế và trang trí hoa sự kiện
                                            </a>

                                        </li>


                                    </ul>

                                    <div class="mt-10">
                                        <ul class="socical ds-flex flex-align-center mg-0">
                                            <li class="pd-5"><a href="" rel="nofollow" title=""><img
                                                        src="upload/hinhanh/y-9650.png" alt="" "/></a></li>
                                                <li class=" pd-5"><a href="" rel="nofollow" title=""><img
                                                            src="upload/hinhanh/f-5931.png" alt="" "/></a></li>
                                                <li class=" pd-5"><a href="" rel="nofollow" title=""><img
                                                                src="upload/hinhanh/in-744.png" alt="" "/></a></li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class=" col-md-3 col-sm-3 col-xs-12">

                                                            <div class="box-mg">

                                                                <div class="title-footer mt-20">

                                                                    <span>Kết nối với chúng tôi</span>

                                                                </div>

                                                                <div class="desc-footer mt-20">
                                                                    <div class="fb-page"
                                                                        data-href="https://www.facebook.com/HasuFlora"
                                                                        data-width="500" data-height="200"
                                                                        data-small-header="false"
                                                                        data-adapt-container-width="true"
                                                                        data-hide-cover="false" data-show-facepile="true"
                                                                        data-show-posts="true">
                                                                        <div class="fb-xfbml-parse-ignore">
                                                                            <blockquote
                                                                                cite="https://www.facebook.com/HasuFlora"><a
                                                                                    href="https://www.facebook.com/HasuFlora">HASU
                                                                                    FLORA</a>
                                                                            </blockquote>
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                            </div>

                                    </div>

                                </div>


                            </div>

                        </div>

        </footer>
        <section class="section-copy border-top clearfix">

            <div class="container">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="content-copy pt-10 ds-flex flex-space ds-mobile">

                        <p class="copy-text cl-white">Copyright &copy; 2020 - <span
                                style="text-transform:uppercase;color:#fff">HASU FLORA</span> - <a style="color:#fff"
                                href="https://i-web.vn/" target="_blank" title="">Design by i-web.vn</a></p>

                        <p class="copy-text cl-white">Đang online: | Tổng truy cập:
                        </p>

                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection
@section('script')
<script src="{{ asset('js/web/cart.js') }}"></script>
<script>
    var apiUpdateCart = "{{ route('web.cart.update') }}"
    var apiRemoveCart = "{{ route('web.cart.remove') }}"
</script>
@endsection
