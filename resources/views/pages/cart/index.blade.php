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
                                        <li class="swiper-slide @if ($step == 1) active @endif" role="presentation">
                                            <a href="#step1" aria-controls="home" role="tab">
                                                <div class="o-text">Giỏ hàng</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide @if ($step == 2) active @endif" role="presentation">
                                            <a href="#step2" aria-controls="home" role="tab">
                                                <div class="o-text">Giao hàng & thanh toán</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide @if ($step == 3) active @endif" role="presentation">
                                            <a href="#step3" aria-controls="home" role="tab">
                                                <div class="o-text">Xác nhận đơn hàng</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide @if ($step == 4) active @endif" role="presentation">
                                            <a href="#step4" aria-controls="home" role="tab">
                                                <div class="o-text">Hoàn tất</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane @if ($step == 1) active @endif" id="step1">
                                    @include('pages.cart.step1', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price
                                    ])
                                </div>
                                <div role="tabpanel" class="tab-pane @if ($step == 2) active @endif" id="step2">
                                    @include('pages.cart.step2', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price,
                                        'provinces' => $provinces ?? []
                                    ])
                                </div>
                                <div role="tabpanel" class="tab-pane @if ($step == 3) active @endif" id="step3">
                                    @include('pages.cart.step3', [
                                        'carts'=>$carts ?? [],
                                        'sub_total_price' => $sub_total_price
                                    ])
                                </div>
                                <div role="tabpanel" class="tab-pane @if ($step == 4) active @endif" id="step4">
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
    </div>
@endsection
@section('script')
<script src="{{ asset('js/web/cart.js') }}"></script>
{{-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script> --}}
<script>
    var apiCreateOrder = "{{ route('web.order.create') }}";
    var apiUpdateCart = "{{ route('web.cart.update') }}";
    var apiRemoveCart = "{{ route('web.cart.remove') }}";
    var apiGetDistricts = "{{ route('web.address.get-districts',['provinceCode'=>'#code#']) }}";
    var apiGetWards = "{{ route('web.address.get-wards',['districtCode'=>'#code#']) }}";
</script>
@endsection
