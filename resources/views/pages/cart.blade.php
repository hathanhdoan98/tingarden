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
                                    <div class="step-content-item step-item-1">
                                        <div class="content-cart mt-20">
                                            <div id="ajaxLoadCart">
                                                <table class="table-customize" border="0" cellpadding="0" cellspacing="0" style="background:#fff" width="100%">
                                                    <thead style="border: 1px solid #ccc;">
                                                    <tr>
                                                        <th bgcolor="#000" width="30%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                            TÊN SẢN PHẨM</th>
                                                        <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                            HÌNH ẢNH</th>
                                                        <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                            ĐƠN GIÁ</th>
                                                        <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                            SỐ LƯỢNG</th>
                                                        <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                            THÀNH TIỀN</th>
                                                        <!-- <th align="right" bgcolor="#c33444" style="width:100px;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm</th> -->
                                                        <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                            XÓA ĐƠN</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody bgcolor="#fff" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;border: 1px solid #ccc;">
                                                    <tr>
                                                        <td data-title="" align="left" width="30%" style="padding:3px 30px;font-size:14px;border: 1px solid #ccc;" valign="center">
                                                            <span>BÌNH HOA CARAMEL HBI - 024</span>

                                                        </td>
                                                        <td align="center" width="15%" style="padding:20px 9px; width:100px;border: 1px solid #ccc;" valign="center"><span class="v-img">
                                                <img src="upload/baiviet/binhhoatuoitonemaucaramel024-2266.png" alt="" height="100"
                                                     width="100" />
                                            </span><br>
                                                        </td>
                                                        <td align="center" width="15%" style="padding:20px 9px;font-size:16px;color:#000;border: 1px solid #ccc;" valign="center"><span>1.290.000 đ</span>
                                                        </td>
                                                        <td align="center" width="15%" style="padding:20px 9px;border: 1px solid #ccc;" valign="center">
                                                            <div class="ds-flex flex-align-center flex-center">
                                                                <button class="btn-minus btn-default">-</button>
                                                                <input style="height: 35px;text-align: center;width: 30px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;border-left:none;border-right:none" current-id="4109" data-price="1290000" type="number" name="quantity" min="1" max="999" class="update-sl txt-input-number"
                                                                       value="2" />
                                                                <button class="btn-plus btn-default">+</button>
                                                            </div>
                                                        </td>
                                                        <td align="center" width="15%" style="padding:20px 9px;color:#f00;border: 1px solid #ccc;font-size:16px;color:#000;" valign="center">
                                                            <span>2.580.000 đ</span>
                                                        </td>
                                                        <!-- <td align="right" style="padding:20px 9px;color:#f00" valign="center"><span class="price-temp">2.580.000 đ</span></td> -->
                                                        <td align="center" width="15%" style="width:100px;padding:20px 9px;font-size:1.5em;color:#f00;border: 1px solid #ccc;" valign="center"><span><img class="delcart cs-pointer" data-id="4109"
                                                                                                                                                                                                          data-qty="2" data-price="1290000" data-color=""
                                                                                                                                                                                                          data-size="" data-material=""
                                                                                                                                                                                                          src="images/del_cart.png" alt="" /></span></td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px">
                                                    <tr>
                                                        <td align="left" colspan="4" style="padding:7px 9px"><strong><big></big>
                                                            </strong></td>
                                                        <td align="left" style="padding:0px 9px;font-size:14px;">Trị giá hàng hóa</td>
                                                        <td align="right" style="padding:5px 9px;font-size:14px;color:#000"><span class="price-temp">2.580.000 đ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" colspan="4" style="padding:7px 9px"><strong><big></big>
                                                            </strong></td>
                                                        <td align="left" style="padding:0px 9px;font-size:14px;">Phí vận chuyển</td>
                                                        <td align="right" style="padding:5px 9px;color:#000;font-size:14px;">
                                                            <span></span>
                                                        </td>
                                                    </tr>
                                                    <tr bgcolor="#fff">
                                                        <td align="left" colspan="4" style="padding:7px 9px"><strong><big></big>
                                                            </strong></td>
                                                        <td align="left" style="padding:7px 9px;font-size:14px;"><strong><big>Thành
                                                                    tiền</big> </strong></td>
                                                        <td align="right" style="padding:7px 9px;font-size:14px;color:#ea3223">
                                                            <strong><big><span
                                                                        id="total-cart">2.580.000 đ</span>
                                                                </big> </strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="button-block ds-mobile mt-10">
                                                <a class="step-footer-previous-link" href="san-pham" style="color: #338dbc;">
                                                    <button type="submit" class="btn btn--buy-now btn--buy-now-x2 w-100i">Tiếp tục mua
                                                        hàng&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                                </a>
                                                <button class="w-100i" style="background: var(--html-bg-website)!important;text-transform:uppercase;font-weight:bold;border:none;font-size:16px;text-transform:uppercase;display:inline-block;color:#fff;padding:10px;" id="giohang" title="thanh toán">Giao hàng & thanh toán</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step2">
                                    <div class="step-content-item step-item-2">
                                        <div id="info">
                                            <div id="sanpham">
                                                <div class='row'>
                                                    <div class='col-md-4 col-xs-12 fix-col-10 pull-right'>
                                                        <div class="title-thongtin title-cart-default pt-20 pb-20">
                                                            <h2 class="pd-thongtin mg-0">THÔNG TIN ĐƠN HÀNG</h2>
                                                        </div>
                                                        <div class='box-thanhtoan' id="ajaxLoad1">
                                                            <table border="0" cellpadding="5px" cellspacing="1px" class='table-order table-order-thanhtoan' width="100%">
                                                                <tbody>
                                                                <tr bgcolor="#FFFFFF">
                                                                    <td width="100%" style="border-bottom:1px solid #ccc">
                                                                        <div class='row'>
                                                                            <div class='col-xs-3'>
                                                                                <div class="p-img">
                                                                                    <a class="v-img" href="san-pham/binh-hoa-caramel-hbi-024">
                                                                                        <img src="upload/baiviet/binhhoatuoitonemaucaramel024-2266.png"
                                                                                             alt="" height="70" width="100" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class='col-xs-9'>
                                                                                <p style="color:#000;font-size:14px;;margin-bottom:5px">
                                                                                    <a style="font-size:13px;" href="san-pham/binh-hoa-caramel-hbi-024">
                                                                                        <span>BÌNH HOA CARAMEL HBI - 024</span>
                                                                                    </a>
                                                                                </p>
                                                                                <p style="color:#000;font-size:14px;;margin-bottom:5px">
                                                                                    Số lượng: 2</p>
                                                                                <p style="color:#000;font-size:14px;;margin-bottom:5px">
                                                                                    Giá: 1.290.000 đ </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                <tr class="tonggia-order">
                                                                    <td colspan="5">
                                                                        Trị giá hàng hóa : 2.580.000 đ </td>
                                                                </tr>
                                                                <tr class="tonggia-order">
                                                                    <td colspan="5">
                                                                        Phí vận chuyển : � </td>
                                                                </tr>
                                                                <tr class="tonggia-order">
                                                                    <td colspan="5">
                                                                                    <span style="font-weight: bold;font-size:14px;">Thành
                                                            tiền:</span>
                                                                        <span style="color:#f00;font-weight:bold;font-size:15px">2.580.000 đ</span>
                                                                    </td>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                        <!-- <div class="box-paypal">
                                <b style="font-size:16px;font-weight:bold">Điểm thưởng</b><br>
                                <div class="rd-giaohang">
                                    <label class="radio-item">
                                        <input type="radio" name="point" value="1" />
                                        <span class="rd-text" style="color:#f00">Sử dụng thẻ thành viên để thanh
                                            toán</span>
                                    </label>
                                </div>
                            </div> -->
                                                        <div class="box-paypal mt-10">
                                                            <b style="font-size:16px;font-weight:bold">Phương thức giao hàng</b><br>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="giaohang" checked                                                    value="1" />
                                                                    <span class="rd-text">Giao hàng tiêu chuẩn</span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="giaohang"                                                     value="2" />
                                                                    <span class="rd-text">Giao hàng nhanh</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="box-paypal mt-5">
                                                            <b style="font-size:16px;font-weight:bold">Phương thức thanh toán</b><br>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt" checked                                                    value="1" />
                                                                    <span class="rd-text">
                                                    <span style="width:65px;display: inline-block;"><img height="25px"
                                                                                                         src="images/paypal1.png" alt="paypal" /></span>
                                                    &nbsp;&nbsp;Ship COD                                                </span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt"                                                     value="2" />
                                                                    <span class="rd-text">
                                                    <span style="width:65px;display: inline-block;"><img height="25px"
                                                                                                         src="images/paypal2.png" alt="paypal" /></span>
                                                    &nbsp;&nbsp;Thẻ ATM nội địa (Internet Banking)                                                </span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt"                                                     value="3" />
                                                                    <span class="rd-text">
                                                    <span style="width:65px;display: inline-block;"><img height="25px"
                                                                                                         src="images/paypal3.png" alt="paypal" /></span>
                                                    &nbsp;&nbsp;Chuyển khoản (ATM, tại ngân hàng)                                                </span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt"                                                     value="4" />
                                                                    <span class="rd-text">
                                                    <span style="width:65px;display: inline-block;"><img height="25px"
                                                                                                         src="images/paypal4.png" alt="paypal" /></span>
                                                    &nbsp;&nbsp;Thẻ tín dụng ghi nợ                                                </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-8 col-xs-12 fix-col-10'>
                                                        <div class="title-giaohang title-cart-default pt-20 pb-20">
                                                            <h2 class="pd-default mg-0">ĐỊA CHỈ GIAO HÀNG</h2>
                                                        </div>
                                                        <div class='box-thanhtoan'>
                                                            <div class="login_cart">
                                                                <div class="box-left-cart01">
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Họ và tên
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-name">
                                                                                <input type="hidden" name="id_user" value="" />
                                                                                <input type="text" required="required" id="ten" name="fullname" value="" class="textbox-cart input-cart form-control" placeholder="Họ và tên">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Điện thoại
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-tele ds-mobile" style="display:flex;align-items:center;justify-content:space-between">
                                                                                <input type="text" id="dienthoai" name="phone" value="" class="textbox-cart input-cart form-control w-40 w-100i" placeholder="Số điện thoại">
                                                                                <!-- <p class='title-giaohang'>(Nhân viên giao nhận sẽ liên hệ SĐT này)</p> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Email
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-email">
                                                                                <input type="email" id="email" name="email" value="" class="textbox-cart input-cart form-control" placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Địa chỉ giao hàng
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-add">
                                                                                <input name="address" required="required" id="address" type="text" value="" class="textbox-cart input-cart form-control" placeholder="Số nhà, Phường, Quận, Thành Phố...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Tỉnh thành
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="id_city" id="id_city" class="form-control selectpicker order-select">
                                                                                    <option value="">Chọn tỉnh thành</option><option value="63" >Yên Bái</option><option value="62" >Vĩnh Phúc</option><option value="61" >Vĩnh Long</option><option value="60" >Tuyên Quang</option><option value="59" >Trà Vinh</option><option value="58" >Tiền Giang</option><option value="57" >Thừa Thiên Huế</option><option value="56" >Thanh Hóa</option><option value="55" >Thái Nguyên</option><option value="54" >Thái Bình</option><option value="53" >Tây Ninh</option><option value="52" >Sơn La</option><option value="51" >Sóc Trăng</option><option value="50" >Quảng Trị</option><option value="49" >Quảng Ninh</option><option value="48" >Quảng Ngãi</option><option value="47" >Quảng Nam</option><option value="46" >Quảng Bình</option><option value="45" >Phú Yên</option><option value="44" >Phú Thọ</option><option value="43" >Ninh Thuận</option><option value="42" >Ninh Bình</option><option value="41" >Nghệ An</option><option value="40" >Nam Định</option><option value="39" >Lào Cai</option><option value="38" >Lạng Sơn</option><option value="37" >Lâm Đồng</option><option value="36" >Lai Châu</option><option value="35" >Kon Tum</option><option value="34" >Kiên Giang</option><option value="33" >Khánh Hòa</option><option value="32" >Hưng Yên</option><option value="31" >Hòa Bình</option><option value="30" >Hậu Giang</option><option value="29" >Hải Dương</option><option value="28" >Hà Tĩnh</option><option value="27" >Hà Nam</option><option value="26" >Hà Giang</option><option value="25" >Gia Lai</option><option value="24" >Đồng Tháp</option><option value="23" >Đồng Nai</option><option value="22" >Điện Biên</option><option value="21" >Đắk Nông</option><option value="20" >Đắk Lắk</option><option value="19" >Cao Bằng</option><option value="18" >Cần Thơ</option><option value="17" >Cà Mau</option><option value="16" >Bình Thuận  </option><option value="15" >Bình Phước</option><option value="14" >Bình Định</option><option value="13" >Bến Tre</option><option value="12" >Bắc Ninh</option><option value="11" >Bạc Liêu</option><option value="10" >Bắc Kạn</option><option value="9" >Bắc Giang</option><option value="8" >An Giang</option><option value="7" >Bà Rịa Vũng Tàu</option><option value="6" >Long An</option><option value="5" >Hải Phòng</option><option value="4" >Đà Nẵng</option><option value="3" >Bình Dương</option><option value="2" >Hà Nội</option><option value="1" >Hồ Chí Minh</option></select>                                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Quận huyện
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="id_dist" id="id_dist" class="form-control selectpicker order-select">
                                                                                    <option value="">Chọn quận huyện</option><option value="704" >Yên Bình</option><option value="703" >Yên Bái</option><option value="702" >Văn Yên</option><option value="701" >Trạm Tấu</option><option value="700" >Trấn Yên</option><option value="699" >Nghĩa Lộ</option><option value="698" >Văn Chấn</option><option value="697" >Mù Cang Chải</option><option value="696" >Lục Yên</option><option value="695" >Yên Lạc</option><option value="694" >Vĩnh Yên</option><option value="693" >Vĩnh Tường</option><option value="692" >Tam Đảo</option><option value="691" >Tam Dương</option><option value="690" >Sông Lô</option><option value="689" >Phúc Yên</option><option value="688" >Lập Thạch</option><option value="687" >Bình Xuyên</option><option value="686" >Vũng Liêm</option><option value="685" >Vĩnh Long</option><option value="684" >Trà Ôn</option><option value="683" >Tam Bình</option><option value="682" >Mang Thít</option><option value="681" >Long Hồ</option><option value="680" >Bình Minh</option><option value="679" >Bình Tân</option><option value="678" >Yên Sơn</option><option value="677" >Lâm Bình</option><option value="676" >Hàm Yên</option><option value="675" >Tuyên Quang</option><option value="674" >Na Hang</option><option value="673" >Sơn Dương</option><option value="672" >Chiêm Hóa</option><option value="671" >Trà Vinh</option><option value="670" >Trà Cú</option><option value="669" >Châu Thành</option><option value="668" >Tiểu Cần</option><option value="667" >Duyên Hải</option><option value="666" >Cầu Kè</option><option value="665" >Cầu Ngang</option><option value="664" >Càng Long</option><option value="663" >Thị Xã Cai Lậy</option><option value="662" >Tân Phước</option><option value="661" >Tân Phú Đông</option><option value="660" >Mỹ Tho</option><option value="659" >Huyện Cai Lậy</option><option value="658" >Gò Công Tây</option><option value="657" >Châu Thành</option><option value="656" >Gò Công</option><option value="655" >Chợ Gạo</option><option value="654" >Gò Công Đông</option><option value="653" >Cái Bè</option><option value="652" >Quảng Điền</option><option value="651" >Phú Vang</option><option value="650" >Phú Lộc</option><option value="649" >Nam Đông</option><option value="648" >Huế</option><option value="647" >Hương Trà</option><option value="646" >Phong Điền</option><option value="645" >Hương Thủy</option><option value="644" >A Lưới</option><option value="643" >Yên Định</option><option value="642" >Vĩnh Lộc</option><option value="641" >Triệu Sơn</option><option value="640" >Tĩnh Gia</option><option value="639" >Thường Xuân</option><option value="638" >Thọ Xuân</option><option value="637" >Thiệu Hóa</option><option value="636" >Thanh Hóa</option><option value="635" >Thạch Thành</option><option value="634" >Sầm Sơn</option><option value="633" >Quảng Xương</option><option value="632" >Quan Sơn</option><option value="631" >Quan Hóa</option><option value="630" >Nông Cống</option><option value="629" >Như Xuân</option><option value="628" >Như Thanh</option><option value="627" >Ngọc Lặc</option><option value="626" >Nga Sơn</option><option value="625" >Mường Lát</option><option value="624" >Lang Chánh</option><option value="623" >Hoằng Hóa</option><option value="622" >Hậu Lộc</option><option value="621" >Hà Trung</option><option value="620" >Đông Sơn</option><option value="619" >Cẩm Thủy</option><option value="618" >Bỉm Sơn</option><option value="617" >Bá Thước</option><option value="616" >Võ Nhai</option><option value="615" >Thái Nguyên</option><option value="614" >Sông Công</option><option value="613" >Phú Bình</option><option value="612" >Phú Lương</option><option value="611" >Phổ Yên</option><option value="610" >Đồng Hỷ</option><option value="609" >Đại Từ</option><option value="608" >Định Hóa</option><option value="607" >Vũ Thư</option><option value="606" >Tiền Hải</option><option value="605" >Thái Thuỵ</option><option value="604" >Quỳnh Phụ</option><option value="603" >Kiến Xương</option><option value="602" >Hưng Hà</option><option value="601" >Thái Bình</option><option value="600" >Đông Hưng</option><option value="599" >Trảng Bàng</option><option value="598" >Tây Ninh</option><option value="597" >Tân Châu</option><option value="596" >Hòa Thành</option><option value="595" >Tân Biên</option><option value="594" >Dương Minh Châu</option><option value="593" >Gò Dầu</option><option value="592" >Châu Thành</option><option value="591" >Bến Cầu</option><option value="590" >Yên Châu</option><option value="589" >Vân Hồ</option><option value="588" >Thuận Châu</option><option value="587" >Sốp Cộp</option><option value="586" >Sông Mã</option><option value="585" >Sơn La</option><option value="584" >Phù Yên</option><option value="583" >Quỳnh Nhai</option><option value="582" >Mường La</option><option value="581" >Mộc Châu</option><option value="580" >Bắc Yên</option><option value="579" >Mai Sơn</option><option value="578" >Vĩnh Châu</option><option value="577" >Trần Đề</option><option value="576" >Thạnh Trị</option><option value="575" >Sóc Trăng</option><option value="574" >Ngã Năm</option><option value="573" >Kế Sách</option><option value="572" >Long Phú</option><option value="571" >Mỹ Tú</option><option value="570" >Mỹ Xuyên</option><option value="569" >Cù Lao Dung</option><option value="568" >Châu Thành</option><option value="567" >Vĩnh Linh</option><option value="566" >Triệu Phong</option><option value="565" >Quảng Trị</option><option value="564" >Hướng Hóa</option><option value="563" >Hải Lăng</option><option value="562" >Gio Linh</option><option value="561" >Đông Hà</option><option value="560" >Đăk Rông</option><option value="559" >Đảo Cồn cỏ</option><option value="558" >Cam Lộ</option><option value="557" >Vân Đồn</option><option value="556" >Uông Bí</option><option value="555" >Tiên Yên</option><option value="554" >Quảng Yên</option><option value="553" >Móng Cái</option><option value="552" >Hoành Bồ</option><option value="551" >Hải Hà</option><option value="550" >Hạ Long</option><option value="549" >Đông Triều</option><option value="548" >Đầm Hà</option><option value="547" >Cô Tô</option><option value="546" >Bình Liêu</option><option value="545" >Cẩm Phả</option><option value="544" >Ba Chẽ</option><option value="543" >Tư Nghĩa</option><option value="542" >Trà Bồng</option><option value="541" >Tây Trà</option><option value="540" >Sơn Tịnh</option><option value="539" >Sơn Tây</option><option value="538" >Sơn Hà</option><option value="537" >Quảng Ngãi</option><option value="536" >Nghĩa Hành</option><option value="535" >Mộ Đức</option><option value="534" >Minh Long</option><option value="533" >Lý Sơn</option><option value="532" >Đức Phổ</option><option value="531" >Bình Sơn</option><option value="530" >Ba Tơ</option><option value="529" >Tiên Phước</option><option value="528" >Thăng Bình</option><option value="527" >Tây Giang</option><option value="526" >Tam Kỳ</option><option value="525" >Quế Sơn</option><option value="524" >Phước Sơn</option><option value="523" >Phú Ninh</option><option value="522" >Núi Thành</option><option value="521" >Nông Sơn</option><option value="520" >Nam Trà My</option><option value="519" >Nam Giang</option><option value="518" >Hội An</option><option value="517" >Duy Xuyên</option><option value="516" >Hiệp Đức</option><option value="515" >Đông Giang</option><option value="514" >Điện Bàn</option><option value="513" >Đại Lộc</option><option value="512" >Bắc Trà My</option><option value="511" >Tuyên Hóa</option><option value="510" >Quảng Trạch</option><option value="509" >Quảng Ninh</option><option value="508" >Minh Hóa</option><option value="507" >Lệ Thủy</option><option value="506" >Đồng Hới</option><option value="505" >Bố Trạch</option><option value="504" >Ba Đồn</option><option value="503" >Tuy Hòa</option><option value="502" >Tuy An</option><option value="501" >Tây Hòa</option><option value="500" >Phú Hòa</option><option value="499" >Sông Hinh</option><option value="498" >Sông Cầu</option><option value="497" >Sơn Hòa</option><option value="496" >Đồng Xuân</option><option value="495" >Đông Hòa</option><option value="494" >Yên Lập</option><option value="493" >Việt Trì</option><option value="492" >Thanh Thủy</option><option value="491" >Thanh Sơn</option><option value="490" >Thanh Ba</option><option value="489" >Tân Sơn</option><option value="488" >Tam Nông</option><option value="487" >Phú Thọ</option><option value="486" >Phù Ninh</option><option value="485" >Lâm Thao</option><option value="484" >Hạ Hòa</option><option value="483" >Đoan Hùng</option><option value="482" >Cẩm Khê</option><option value="481" >Thuận Nam</option><option value="480" >Thuận Bắc</option><option value="479" >Phan Rang - Tháp Chàm</option><option value="478" >Ninh Sơn</option><option value="477" >Ninh Phước</option><option value="476" >Ninh Hải</option><option value="475" >Bác Ái</option><option value="474" >Yên Mô</option><option value="473" >Yên Khánh</option><option value="472" >Tam Điệp</option><option value="471" >Ninh Bình</option><option value="470" >Nho Quan</option><option value="469" >Kim Sơn</option><option value="468" >Hoa Lư</option><option value="467" >Gia Viễn</option><option value="466" >Yên Thành</option><option value="465" >Vinh</option><option value="464" >Tương Dương</option><option value="463" >Thanh Chương</option><option value="462" >Thái Hòa</option><option value="461" >Tân Kỳ</option><option value="460" >Quỳnh Lưu</option><option value="459" >Quỳ Hợp</option><option value="458" >Quỳ Châu</option><option value="457" >Quế Phong</option><option value="456" >Nghĩa Đàn</option><option value="455" >Nghi Lộc</option><option value="454" >Nam Đàn</option><option value="453" >Kỳ Sơn</option><option value="452" >Hưng Nguyên</option><option value="451" >Hoàng Mai</option><option value="450" >Đô Lương</option><option value="449" >Diễn Châu</option><option value="448" >Cửa Lò</option><option value="447" >Con Cuông</option><option value="446" >Anh Sơn</option><option value="445" >Ý Yên</option><option value="444" >Xuân Trường</option><option value="443" >Vụ Bản</option><option value="442" >Nam Định</option><option value="441" >Nam Trực</option><option value="440" >Nghĩa Hưng</option><option value="439" >Trực Ninh</option><option value="438" >Mỹ Lộc</option><option value="437" >Hải Hậu</option><option value="436" >Giao Thủy</option><option value="435" >Xi Ma Cai</option><option value="434" >Văn Bàn</option><option value="433" >Sa Pa</option><option value="432" >Mường Khương</option><option value="431" >Bảo Yên</option><option value="430" >Bát Xát</option><option value="429" >Lào Cai</option><option value="428" >Bảo Thắng</option><option value="427" >Bắc Hà</option><option value="426" >Văn Quan</option><option value="425" >Văn Lãng</option><option value="424" >Tràng Định</option><option value="423" >Lộc Bình</option><option value="422" >Hữu Lũng</option><option value="421" >Lạng Sơn</option><option value="420" >Đình Lập</option><option value="419" >Chi Lăng</option><option value="418" >Cao Lộc</option><option value="417" >Bình Gia</option><option value="416" >Bắc Sơn</option><option value="415" >Lâm Hà</option><option value="414" >Lạc Dương</option><option value="413" >Đức Trọng</option><option value="412" >Đơn Dương</option><option value="411" >Đạ Huoai</option><option value="410" >Di Linh</option><option value="409" >Đà Lạt</option><option value="408" >Đạ Tẻh</option><option value="407" >Đam Rông</option><option value="406" >Cát Tiên</option><option value="405" >Bảo Lộc</option><option value="404" >Bảo Lâm</option><option value="403" >Than Uyên</option><option value="402" >Tân Uyên</option><option value="401" >Tam Đường</option><option value="400" >Sìn Hồ</option><option value="399" >Phong Thổ</option><option value="398" >Nậm Nhùn</option><option value="397" >Mường Tè</option><option value="396" >Lai Châu</option><option value="395" >Tu Mơ Rông</option><option value="394" >Sa Thầy</option><option value="393" >Ngọc Hồi</option><option value="392" >KonTum</option><option value="391" >Kon Plông</option><option value="390" >Đăk Tô</option><option value="389" >Kon Rẫy</option><option value="388" >Đăk Hà</option><option value="387" >Đăk Glei</option><option value="386" >Vĩnh Thuận</option><option value="385" >U minh Thượng</option><option value="384" >Tân Hiệp</option><option value="383" >Rạch Giá</option><option value="382" >Phú Quốc</option><option value="381" >Kiên Lương</option><option value="380" >Hòn Đất</option><option value="379" >Kiên Hải</option><option value="378" >Hà Tiên</option><option value="377" >Gò Quao</option><option value="376" >Giồng Riềng</option><option value="375" >Giang Thành</option><option value="374" >Châu Thành</option><option value="373" >An Minh</option><option value="372" >An Biên</option><option value="371" >Vạn Ninh</option><option value="370" >Trường Sa</option><option value="369" >Ninh Hòa</option><option value="368" >Nha Trang</option><option value="367" >Khánh Vĩnh</option><option value="366" >Khánh Sơn</option><option value="365" >Diên Khánh</option><option value="364" >Cam Ranh</option><option value="363" >Cam Lâm</option><option value="362" >Yên Mỹ</option><option value="361" >Văn Lâm</option><option value="360" >Văn Giang</option><option value="359" >Tiên Lữ</option><option value="358" >Phù Cừ</option><option value="357" >Kim Động</option><option value="356" >Mỹ Hào</option><option value="355" >Khoái Châu</option><option value="354" >Hưng Yên</option><option value="353" >Ân Thi</option><option value="352" >Yên Thủy</option><option value="351" >Tân Lạc</option><option value="350" >Mai Châu</option><option value="349" >Lương Sơn</option><option value="348" >Lạc Thủy</option><option value="347" >Lạc Sơn</option><option value="346" >Kỳ Sơn</option><option value="345" >Kim Bôi</option><option value="344" >Hòa Bình</option><option value="343" >Đà Bắc</option><option value="342" >Cao Phong</option><option value="341" >Vị Thủy</option><option value="340" >Vị Thanh</option><option value="339" >Phụng Hiệp</option><option value="338" >Ngã Bảy</option><option value="337" >Long Mỹ</option><option value="336" >Châu Thành A</option><option value="335" >Châu Thành</option><option value="334" >Tứ Kỳ</option><option value="333" >Thanh Miện</option><option value="332" >Thanh Hà</option><option value="331" >Ninh Giang</option><option value="330" >Nam Sách</option><option value="329" >Hải Dương</option><option value="328" >Kinh Môn</option><option value="327" >Kim Thành</option><option value="326" >Gia Lộc</option><option value="325" >Chí Linh</option><option value="324" >Cẩm Giàng</option><option value="323" >Bình Giang</option><option value="322" >Vũ Quang</option><option value="321" >Thạch Hà</option><option value="320" >Nghi Xuân</option><option value="319" >Lộc Hà</option><option value="318" >Kỳ Anh</option><option value="317" >Hương Sơn</option><option value="316" >Hương Khê</option><option value="315" >Hồng Lĩnh</option><option value="314" >Hà Tĩnh</option><option value="313" >Đức Thọ</option><option value="312" >Can Lộc</option><option value="311" >Cẩm Xuyên</option><option value="310" >Thanh Liêm</option><option value="309" >Phủ Lý</option><option value="308" >Lý Nhân</option><option value="307" >Kim Bảng</option><option value="306" >Duy Tiên</option><option value="305" >Bình Lục</option><option value="304" >Yên Minh</option><option value="303" >Xín Mần</option><option value="302" >Vị Xuyên</option><option value="301" >Quang Bình</option><option value="300" >Quản Bạ</option><option value="299" >Mèo Vạc</option><option value="298" >Hoàng Su Phì</option><option value="297" >Hà Giang</option><option value="296" >Đồng Văn</option><option value="295" >Bắc Quang</option><option value="294" >Bắc Mê</option><option value="293" >Plei Ku</option><option value="292" >Phú Thiện</option><option value="291" >Mang Yang</option><option value="290" >Krông Pa</option><option value="289" >Kông Chro</option><option value="288" >KBang</option><option value="287" >Ia Pa</option><option value="286" >Ia Grai</option><option value="285" >Đức Cơ</option><option value="284" >Đăk Pơ</option><option value="283" >Đăk Đoa</option><option value="282" >ChưPRông</option><option value="281" >Chư Sê</option><option value="280" >Chư Pưh</option><option value="279" >Chư Păh</option><option value="278" >AYun Pa</option><option value="277" >An Khê</option><option value="276" >Tp. Cao Lãnh</option><option value="275" >Thị xã Hồng Ngự</option><option value="274" >Tháp Mười</option><option value="273" >Thanh Bình</option><option value="272" >Tân Hồng</option><option value="271" >Tam Nông</option><option value="270" >Sa Đéc</option><option value="269" >Lấp Vò</option><option value="268" >Lai Vung</option><option value="267" >Huyện Hồng Ngự</option><option value="266" >Huyện Cao Lãnh</option><option value="265" >Châu Thành</option><option value="264" >Xuân Lộc</option><option value="263" >Vĩnh Cửu</option><option value="262" >Trảng Bom</option><option value="261" >Thống Nhất</option><option value="260" >Tân Phú</option><option value="259" >Long Khánh</option><option value="258" >Nhơn Trạch</option><option value="257" >Long Thành</option><option value="256" >Định Quán</option><option value="255" >Cẩm Mỹ</option><option value="254" >Biên Hòa</option><option value="253" >Tuần Giáo</option><option value="252" >Tủa Chùa</option><option value="251" >Nậm Pồ</option><option value="250" >Mường Nhé</option><option value="249" >Điện Biên Phủ</option><option value="248" >Mường Lay</option><option value="247" >Mường Chà</option><option value="246" >Mường Ảng</option><option value="245" >Điện Biên Đông</option><option value="244" >Điện Biên</option><option value="243" >Tuy Đức</option><option value="242" >Krông Nô</option><option value="241" >Gia Nghĩa</option><option value="240" >Dăk Song</option><option value="239" >Dăk Mil</option><option value="238" >Dăk GLong</option><option value="237" >Cư Jút</option><option value="236" >Lăk</option><option value="235" >Krông Pắc</option><option value="234" >Krông Năng</option><option value="233" >Krông Buk</option><option value="232" >Krông Bông</option><option value="231" >Krông Ana</option><option value="230" >Ea Súp</option><option value="229" >Ea Kar</option><option value="228" >Cư Kuin</option><option value="227" >Buôn Ma Thuột</option><option value="226" >Buôn Hồ</option><option value="225" >Buôn Đôn</option><option value="224" >Trùng Khánh</option><option value="223" >Trà Lĩnh</option><option value="222" >Thông Nông</option><option value="221" >Thạch An</option><option value="220" >Quảng Uyên</option><option value="219" >Phục Hòa</option><option value="218" >Nguyên Bình</option><option value="217" >Hòa An</option><option value="216" >Hà Quảng</option><option value="215" >Hạ Lang</option><option value="214" >Cao Bằng</option><option value="213" >Bảo Lâm</option><option value="212" >Bảo Lạc</option><option value="211" >Vĩnh Thạnh</option><option value="210" >Thốt Nốt</option><option value="209" >Ninh Kiều</option><option value="208" >Phong Điền</option><option value="207" >Cờ Đỏ</option><option value="206" >Ô Môn</option><option value="205" >Cái Răng</option><option value="204" >Bình Thủy</option><option value="203" > Thới Lai</option><option value="202" >U Minh</option><option value="201" >Trần Văn Thời</option><option value="200" >Thới Bình</option><option value="199" >Phú Tân</option><option value="198" >Ngọc Hiển</option><option value="197" >Năm Căn</option><option value="196" >Đầm Dơi</option><option value="195" >Cái Nước</option><option value="194" >Cà Mau</option><option value="193" >Tuy Phong</option><option value="192" >Tánh Linh</option><option value="191" >Phan Thiết</option><option value="190" >La Gi</option><option value="189" >Hàm Tân</option><option value="188" >Hàm Thuận Nam</option><option value="187" >Hàm Thuận Bắc</option><option value="186" >Đức Linh</option><option value="185" >Đảo Phú Quý</option><option value="184" >Bắc Bình</option><option value="183" >Phước Long</option><option value="182" >Phú Riềng</option><option value="181" >Lộc Ninh</option><option value="180" >Hớn Quản</option><option value="179" >Đồng Xoài</option><option value="178" >Đồng Phú</option><option value="177" >Chơn Thành</option><option value="176" >Bù Gia Mập</option><option value="175" >Bù Đốp</option><option value="174" >Bù Đăng</option><option value="173" >Bình Long</option><option value="172" >Vĩnh Thạnh</option><option value="171" >Vân Canh</option><option value="170" >Tuy Phước</option><option value="169" >Tây Sơn</option><option value="168" >Quy Nhơn</option><option value="167" >Hoài Nhơn</option><option value="166" >Phù Cát</option><option value="165" >Phù Mỹ</option><option value="164" >Hoài Ân</option><option value="163" >An Nhơn</option><option value="162" >An Lão</option><option value="161" >Thạnh Phú</option><option value="160" >Mỏ Cày Nam</option><option value="159" >Mỏ Cày Bắc</option><option value="158" >Giồng Trôm</option><option value="157" >Chợ Lách</option><option value="156" >Châu Thành</option><option value="155" >Bình Đại</option><option value="154" >Bến Tre</option><option value="153" >Ba Tri</option><option value="152" >Yên Phong</option><option value="151" >Từ Sơn</option><option value="150" >Tiên Du</option><option value="149" >Lương Tài</option><option value="148" >Thuận Thành</option><option value="147" >Quế Võ</option><option value="146" >Gia Bình</option><option value="145" >Bắc Ninh</option><option value="144" >Vĩnh Lợi</option><option value="143" >Phước Long</option><option value="142" >Hồng Dân</option><option value="141" >Hòa Bình</option><option value="140" >Giá Rai</option><option value="139" >Đông Hải</option><option value="138" >Bạc Liêu</option><option value="137" >Pác Nặm</option><option value="136" >Ngân Sơn</option><option value="135" >Na Rì</option><option value="134" >Chợ Mới</option><option value="133" >Chợ Đồn</option><option value="132" >Bạch Thông</option><option value="131" >Bắc Kạn</option><option value="130" >Ba Bể</option><option value="129" >Yên Thế</option><option value="128" >Yên Dũng</option><option value="127" >Việt Yên</option><option value="126" >Tân Yên</option><option value="125" >Sơn Động</option><option value="124" >Lục Ngạn</option><option value="123" >Lục Nam</option><option value="122" >Lạng Giang</option><option value="121" >Hiệp Hòa</option><option value="120" >Bắc Giang</option><option value="119" >Tri Tôn</option><option value="118" >Tịnh Biên</option><option value="117" >Thoại Sơn</option><option value="116" >Tân Châu</option><option value="115" >Phú Tân</option><option value="114" >Long Xuyên</option><option value="113" >Chợ Mới</option><option value="112" >Châu Thành</option><option value="111" >Châu Phú</option><option value="110" >Châu Đốc</option><option value="109" >An Phú</option><option value="108" >Xuyên Mộc</option><option value="107" >Vũng Tàu</option><option value="106" >Tân Thành</option><option value="105" >Long Điền</option><option value="104" >Đất Đỏ</option><option value="103" >Côn Đảo</option><option value="102" >Châu Đức</option><option value="101" >Bà Rịa</option><option value="100" >Vĩnh Hưng</option><option value="99" >Thủ Thừa</option><option value="98" >Thạnh Hóa</option><option value="97" >Tân Trụ</option><option value="96" >Tân Thạnh</option><option value="95" >Tân Hưng</option><option value="94" >Tân An</option><option value="93" >Mộc Hóa</option><option value="92" >Kiến Tường</option><option value="91" >Đức Huệ</option><option value="90" >Đức Hòa</option><option value="89" >Châu Thành</option><option value="88" >Cần Giuộc</option><option value="87" >Cần Đước</option><option value="86" >Bến Lức</option><option value="85" >Vĩnh Bảo</option><option value="84" >Tiên Lãng</option><option value="83" >Thủy Nguyên</option><option value="82" >Ngô Quyền</option><option value="81" >Lê Chân</option><option value="80" >Kiến Thụy</option><option value="79" >Kiến An</option><option value="78" >Hồng Bàng</option><option value="77" >Hải An</option><option value="76" >Dương Kinh</option><option value="75" >Đồ Sơn</option><option value="74" >Cát Hải</option><option value="73" >Bạch Long Vĩ</option><option value="72" >An Lão</option><option value="71" >An Dương</option><option value="70" >Thanh Khê</option><option value="69" >Sơn Trà</option><option value="68" >Ngũ Hành Sơn</option><option value="67" >Liên Chiểu</option><option value="66" >Hoàng Sa</option><option value="65" >Hòa Vang</option><option value="64" >Hải Châu</option><option value="63" >Cẩm Lệ</option><option value="62" >Thuận An</option><option value="61" >Thủ Dầu Một</option><option value="60" >Phú Giáo</option><option value="59" >Dĩ An</option><option value="58" >Tân Uyên</option><option value="57" >Dầu Tiếng</option><option value="56" >Bến Cát</option><option value="55" >Bàu Bàng</option><option value="54" >Ứng Hòa</option><option value="53" >Thường Tín</option><option value="52" >Thanh Xuân</option><option value="51" >Thanh Trì</option><option value="50" >Thanh Oai</option><option value="49" >Thạch Thất</option><option value="48" >Tây Hồ</option><option value="47" >Sơn Tây</option><option value="46" >Sóc Sơn</option><option value="45" >Quốc Oai</option><option value="44" >Phúc Thọ</option><option value="43" >Phú Xuyên</option><option value="42" >Nam Từ Liêm</option><option value="41" >Mỹ Đức</option><option value="40" >Mê Linh</option><option value="39" >Long Biên</option><option value="38" >Hoàng Mai</option><option value="37" >Hoàn Kiếm</option><option value="36" >Hoài Đức</option><option value="35" >Hai Bà Trưng</option><option value="34" >Hà Đông</option><option value="33" >Gia Lâm</option><option value="32" >Đống Đa</option><option value="31" >Đông Anh</option><option value="30" >Đan Phượng</option><option value="29" >Chương Mỹ</option><option value="28" >Cầu Giấy</option><option value="27" >Bắc Từ Liêm</option><option value="26" >Ba Vì</option><option value="25" >Ba Đình</option><option value="24" >Tân Phú</option><option value="23" >Tân Bình</option><option value="22" >Thủ Đức</option><option value="21" >Quận 9</option><option value="20" >Quận 8</option><option value="19" >Quận 7</option><option value="18" >Quận 6</option><option value="17" >Quận 5</option><option value="16" >Quận 4</option><option value="15" >Quận 3</option><option value="14" >Quận 2</option><option value="13" >Quận 12</option><option value="12" >Quận 11</option><option value="11" >Quận 10</option><option value="10" >Quận 1</option><option value="9" >Phú Nhuận</option><option value="8" >Nhà Bè</option><option value="7" >Hóc Môn</option><option value="6" >Gò Vấp</option><option value="5" >Củ Chi</option><option value="4" >Cần Giờ</option><option value="3" >Bình Thạnh</option><option value="2" >Bình Tân</option><option value="1" >Bình Chánh</option></select>                                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row row-user-order hidden'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Phường xã
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="id_ward" id="id_ward" class="form-control selectpicker order-select">
                                                                                    <option value="">Chọn phường xã</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order hidden'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Ngày nhận
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-date">
                                                                                <input type="text" name="ngaynhan" class="form-control order-calendar datepicker" id="ngaynhan" readonly="readonly" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order hidden'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Giờ nhận
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="hour" class="form-control selectpicker order-select">
                                                                                    <option value="">Giờ nhận</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Ghi chú đơn
                                                                                hàng</label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-desc">
                                                                                <textarea name='description' placeholder="Nhập nội dung" class='form-control'></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart t-right">
                                                                                <!-- <button type="submit" id="payOnline"
                                                        class="btn btn--buy-now btn--buy-now-x2">Thanh toán trực tiếp&nbsp;&nbsp;<i class="fa fa-caret-right"
                                                            aria-hidden="true"></i></button> -->
                                                                                <button type="submit" id="xacnhan1" class="btn btn--buy-now btn--buy-now-x2">Xác
                                                                                    nhận&nbsp;&nbsp;<i class="fa fa-caret-right"
                                                                                                       aria-hidden="true"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                </div>
                                                            </div>
                                                            <!--login_cart-->
                                                            <!-- </form> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step3">
                                    <div class="step-content-item step-item-3">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12 fix-col-10 pull-right">
                                                <div class="box-xacnhan o-hidden">
                                                    <div class="title-xacnhan t-center">
                                                        <h2 class="mg-0">THÔNG TIN GIAO HÀNG</h2>
                                                    </div>
                                                    <div id="ajaxJson">
                                                    </div>
                                                </div>
                                                <div class="box-httt">
                                                    <div class="box-giaohang mt-20">
                                                        <div class="title-success-giaohang">
                                                            <h2 class="mg-0">Phương thức giao hàng</h2>
                                                        </div>
                                                        <div class="box-ajax-giaohang">
                                                                    <span id="ajax-giaohang">

                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="box-giaohang mt-20">
                                                        <div class="title-success-giaohang">
                                                            <h2 class="mg-0">Phương thức thanh toán</h2>
                                                        </div>
                                                        <div class="box-ajax-giaohang">
                                                            <span id="ajax-thanhtoan"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ajaxLoad2">
                                                <div class="col-md-8 col-xs-12 fix-col-10 fix-col-w8">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="background:#fff" width="100%">
                                                        <thead style="border: 1px solid #ccc;">
                                                        <tr>
                                                            <th bgcolor="#000" width="30%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                TÊN SẢN PHẨM</th>
                                                            <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                HÌNH ẢNH</th>
                                                            <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                ĐƠN GIÁ</th>
                                                            <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                SỐ LƯỢNG</th>
                                                            <th bgcolor="#000" width="15%" style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                THÀNH TIỀN</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody bgcolor="#fff" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;border: 1px solid #ccc;">
                                                        <tr>
                                                            <td align="left" width="30%" style="padding:3px 30px;font-size:13px;border: 1px solid #ccc;" valign="center"><span>BÌNH HOA CARAMEL HBI - 024</span> </td>
                                                            <td align="center" width="15%" style="padding:20px 9px; width:100px;border: 1px solid #ccc;" valign="center"><span class="v-img">
                                                    <a class="v-img"
                                                       href="san-pham/binh-hoa-caramel-hbi-024">
                                                        <img src="upload/baiviet/binhhoatuoitonemaucaramel024-2266.png" alt=""
                                                             height="100" width="100" />
                                                    </a>
                                                </span><br>
                                                            </td>
                                                            <td align="center" width="15%" style="padding:20px 9px;font-size:16px;color:#000;border: 1px solid #ccc;" valign="center"><span>1.290.000 đ</span>
                                                            </td>
                                                            <td align="center" width="15%" style="padding:20px 9px;border: 1px solid #ccc;" valign="center">
                                                                2 </td>
                                                            <td align="center" width="15%" style="padding:20px 9px;color:#f00;border: 1px solid #ccc;font-size:16px;color:#000;" valign="center">
                                                                <span>2.580.000 đ</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="box-bg">
                                                        <div class="row row-col">
                                                            <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                                                                Trị giá hàng hóa
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                                                                2.580.000 đ </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                                                                Phí vận chuyển
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                                                                � </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                                                                <b style="font-size:14px;">Thành tiền</b>
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                                                                <span style="color:#f00;font-weight:bold">2.580.000 đ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="mt-20 t-right">
                                                    <button type="submit" id="xacnhan2" class="btn btn--buy-now btn--buy-now-x2">Hoàn
                                                        tất&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step4">
                                    <div class="step-content-item step-item-4">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="image-success t-center">
                                                <img src="images/success.png" alt="Hoàn tất" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="title-success">
                                                <h3>ĐẶT HÀNG THÀNH CÔNG</h3>
                                            </div>
                                            <div class="info-order mt-30">
                                                <p>Mã đơn hàng của bạn là: <b><span style="color:#737d83;font-size:20px"
                                                                                    id="order-code"></span></b></p>
                                                <p>Hiện tại đơn hàng của bạn đang được xử lý.</p>
                                                <p>Thông tin chi tiết đơn hàng sẽ được gửi đến hộp thư của bạn:<b id="order-email"></b></p>
                                            </div>

                                            <div class="info-order mt-30">
                                                <p>Mọi thắc mắc xin vui lòng liên hệ</p>
                                                <p>Hotline:<b>07989 12 383</b></p>
                                                <p>Email:<b style="color:#ff6600">hasuflora@gmail.com</b></p>
                                            </div>

                                            <div class="info-order mt-30">
                                                <p>Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn sẽ được xử lý trong thời gian sớm nhất</p>
                                                <p>Chúng tôi sẽ liên hệ lại với bạn để xác nhận yêu cầu và giao hàng.</p>
                                            </div>
                                            <div class="row-cart t-right mt-10">
                                                <a href="san-pham" title="sản phẩm"><button type="submit"
                                                                                            class="btn btn--buy-now btn--buy-now-x2">Tiếp tục mua hàng&nbsp;&nbsp;<i
                                                            class="fa fa-caret-right" aria-hidden="true"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
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
                                                <a href="cach-lua-chon-hoa-tuoi-doanh-nghiep-thong-minh" title="Cách lựa chọn hoa tươi doanh nghiệp thông minh">
                                                    <img class="w-100"
                                                         src="resize/600x400/1/upload/baiviet/hoatuoihoalang015b9189-8797.png"
                                                         alt="Cách lựa chọn hoa tươi doanh nghiệp thông minh" onerror='this.src="images/no-image.jpg"' />
                                                </a>
                                            </div>
                                            <div class="desc-news-i mt-10">
                                                <div class="mt-5 mb-5">
                                                    <a href="cach-lua-chon-hoa-tuoi-doanh-nghiep-thong-minh" title="Cách lựa chọn hoa tươi doanh nghiệp thông minh">
                                                        Cách lựa chọn hoa tươi doanh nghiệp thông minh                                            </a>
                                                </div>
                                                <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;22/04/2021 </div>
                                                <div class="mt-10">Tặng hoa cho doanh nghiệp hay đối tác khách hàng không chỉ là tặng 1 món giá trị mà còn thể hiện sự tinh tế, chỉn chu của người tặng. Thay vì một món quà mang ý nghĩa vật chất như rượu, trà, tranh...
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
                                                                    <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="ve-dep-va-y-nghia-theo-mau-sac-cua-hoa-tulip" title="Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip">
                                                                            <img class="col-100 w-100i"
                                                                                 src="resize/250x180/1/upload/baiviet/vedepvaynghiatheomausaccuahoatulip-7597.jpg"
                                                                                 alt="Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip"
                                                                                 onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;23/01/2021 </div>
                                                                        <div class="name-news">
                                                                            <a href="ve-dep-va-y-nghia-theo-mau-sac-cua-hoa-tulip" title="Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip">
                                                                                Vẻ đẹp và ý nghĩa theo mầu sắc của hoa tulip                                                                    </a>
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
                                                                    <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="y-nghia-cua-hoa-hong-trong-nhung-dip-le-dac-biet" title="Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt">
                                                                            <img class="col-100 w-100i"
                                                                                 src="resize/250x180/1/upload/baiviet/ynghiacuahoahongtrongnhungdipledacbiet-4017.jpg"
                                                                                 alt="Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt"
                                                                                 onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;23/01/2021 </div>
                                                                        <div class="name-news">
                                                                            <a href="y-nghia-cua-hoa-hong-trong-nhung-dip-le-dac-biet" title="Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt">
                                                                                Ý nghĩa của hoa hồng trong những dịp lễ đặc biệt                                                                    </a>
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
                                                                    <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="y-nghia-dac-biet-cua-hoa-dong-tien-ngay-tet-ma-it-ai-biet" title="Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai biết">
                                                                            <img class="col-100 w-100i"
                                                                                 src="resize/250x180/1/upload/baiviet/ynghiadacbietcuahoadongtienngaytetmaitaibiet-14.jpg"
                                                                                 alt="Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai biết"
                                                                                 onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021 </div>
                                                                        <div class="name-news">
                                                                            <a href="y-nghia-dac-biet-cua-hoa-dong-tien-ngay-tet-ma-it-ai-biet" title="Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai biết">
                                                                                Ý nghĩa đặc biệt của hoa đồng tiền ngày tết mà ít ai...                                                                    </a>
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
                                                                    <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="cac-cach-cham-lan-ho-diep-ra-hoa-ruc-ro" title="Các cách chăm lan hồ điệp ra hoa rực rỡ">
                                                                            <img class="col-100 w-100i"
                                                                                 src="resize/250x180/1/upload/baiviet/caccachchamlanhodieprahoarucro-957.jpg"
                                                                                 alt="Các cách chăm lan hồ điệp ra hoa rực rỡ"
                                                                                 onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021 </div>
                                                                        <div class="name-news">
                                                                            <a href="cac-cach-cham-lan-ho-diep-ra-hoa-ruc-ro" title="Các cách chăm lan hồ điệp ra hoa rực rỡ">
                                                                                Các cách chăm lan hồ điệp ra hoa rực rỡ                                                                    </a>
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
                                                                    <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="nhung-dieu-thu-vi-ve-hoa-ly-co-the-ban-chua-biet" title="NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT">
                                                                            <img class="col-100 w-100i"
                                                                                 src="resize/250x180/1/upload/baiviet/ynghiacuahoaly-277.png"
                                                                                 alt="NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT"
                                                                                 onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021 </div>
                                                                        <div class="name-news">
                                                                            <a href="nhung-dieu-thu-vi-ve-hoa-ly-co-the-ban-chua-biet" title="NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT">
                                                                                NHỮNG ĐIỀU THÚ VỊ VỀ HOA LY CÓ THỂ BẠN CHƯA BIẾT                                                                    </a>
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
                                                                    <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                                        <a href="cach-trong-va-cham-soc-hoa-lan-ho-diep" title="Cách trồng và chăm sóc hoa lan hồ điệp">
                                                                            <img class="col-100 w-100i"
                                                                                 src="resize/250x180/1/upload/baiviet/cachtrongvachamsochoalanhodiep-9712.png"
                                                                                 alt="Cách trồng và chăm sóc hoa lan hồ điệp"
                                                                                 onerror='this.src="images/no-image.jpg"' />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="desc-news-i mt-10i">
                                                                        <div><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;22/01/2021 </div>
                                                                        <div class="name-news">
                                                                            <a href="cach-trong-va-cham-soc-hoa-lan-ho-diep" title="Cách trồng và chăm sóc hoa lan hồ điệp">
                                                                                Cách trồng và chăm sóc hoa lan hồ điệp                                                                    </a>
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

                                <iframe class="w-100i ds-block" width="100%" height="242" src="https://www.youtube.com/embed/EvARkqtDmYw?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>

                            </div>


                        </div>

                        <div class="video-child w-100 mt-5">

                            <div class="slide-video">


                                <div>

                                    <div class="item-video pd-5 p-relative">

                                        <a href="https://www.youtube.com/watch?v=EvARkqtDmYw" data-fancybox="galleryVideo" title="MẸO CẮM HOA 10 NGÀY VẪN TƯƠI VÀ NƯỚC TRONG BÌNH KHÔNG THỐI" class="popup-video">

                                            <img class="w-100"
                                                 src="https://img.youtube.com/vi/EvARkqtDmYw/mqdefault.jpg"
                                                 style="height: 100px">

                                            <span id="play"></span>

                                        </a>

                                    </div>

                                </div>


                                <div>

                                    <div class="item-video pd-5 p-relative">

                                        <a href="https://www.youtube.com/watch?v=b9MWpjy0Jc8" data-fancybox="galleryVideo" title="Hướng dẫn cắm hoa cho người mới bắt đầu #1 Hoa ly" class="popup-video">

                                            <img class="w-100"
                                                 src="https://img.youtube.com/vi/b9MWpjy0Jc8/mqdefault.jpg"
                                                 style="height: 100px">

                                            <span id="play"></span>

                                        </a>

                                    </div>

                                </div>


                                <div>

                                    <div class="item-video pd-5 p-relative">

                                        <a href="https://www.youtube.com/watch?v=mnoKpGTfPEM" data-fancybox="galleryVideo" title="Những mẫu hoa best sellers" class="popup-video">

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

                                        <img src="resize/155x105/1/upload/hinhanh/logo-hasu-501.png"
                                             alt="" onerror='this.src="images/no-image.jpg"' />
                                    </a>

                                </div>
                                <div class="desc-footer mt-20 pd-100">

                                    <h1><span style="font-size:22px;">Hasu thay bạn trao lời yêu thương !</span></h1>

                                    <p><span style="line-height:1.5;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>Hoa tươi Hasu</strong> được...
                                </div>

                            </div>

                        </div>
                        <div class="col-md-3 col-sm-3 col-25 col-xs-12 ">

                            <div class="box-mg">

                                <div class="title-footer mt-20">

                                    <span>thông tin liên hệ</span>

                                </div>
                                <div class="desc-footer pd-100 mt-20">

                                    <h1><span style="font-size:22px;"><span style="color:#000000;"><strong>HASU FLORA</strong></span></span>
                                    </h1>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span style="color:#000000;"><strong><span style="font-family:arial,helvetica,sans-serif;">Địa chỉ:  </span><span style="font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; white-space: pre-wrap;">67 Thủ Khoa Huân, P. Bến Thành, Q1, TP Hồ Chí Minh</span></strong>
                                                </span>
                                                </span>
                                                </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span style="color:#000000;"><strong><span style="font-family:arial,helvetica,sans-serif;">Phone: </span></strong>
                                                </span><strong><span style="font-family:arial,helvetica,sans-serif;">07989 12 383</span></strong></span>
                                                </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span style="color:#000000;"><strong><span style="font-family:arial,helvetica,sans-serif;">Email: hasuflora@gmail.com</span></strong>
                                                </span>
                                                </span>
                                                </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span style="color:#000000;"><strong><span style="font-family:arial,helvetica,sans-serif;">Website: hasuflora.com</span></strong>
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

                                            <a href="chinh-sach-doi-tra-hoan-tien" title="Chính sách Đổi trả &amp; Hoàn tiền">

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

                                            <a href="thiet-ke-va-trang-tri-su-kien" title="Thiết kế và trang trí hoa sự kiện">

                                                Thiết kế và trang trí hoa sự kiện
                                            </a>

                                        </li>


                                    </ul>

                                    <div class="mt-10">
                                        <ul class="socical ds-flex flex-align-center mg-0">
                                            <li class="pd-5"><a href="" rel="nofollow" title=""><img src="upload/hinhanh/y-9650.png" alt="" "/></a></li>
                                            <li class="pd-5"><a href="" rel="nofollow" title=""><img src="upload/hinhanh/f-5931.png" alt="" "/></a></li>
                                            <li class="pd-5"><a href="" rel="nofollow" title=""><img src="upload/hinhanh/in-744.png" alt="" "/></a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-3 col-sm-3 col-xs-12">

                            <div class="box-mg">

                                <div class="title-footer mt-20">

                                    <span>Kết nối với chúng tôi</span>

                                </div>

                                <div class="desc-footer mt-20">
                                    <div class="fb-page" data-href="https://www.facebook.com/HasuFlora" data-width="500" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/HasuFlora"><a href="https://www.facebook.com/HasuFlora">HASU FLORA</a>
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

                        <p class="copy-text cl-white">Copyright &copy; 2020 - <span style="text-transform:uppercase;color:#fff">HASU FLORA</span> - <a style="color:#fff" href="https://i-web.vn/" target="_blank" title="">Design by i-web.vn</a></p>

                        <p class="copy-text cl-white">Đang online: | Tổng truy cập:
                        </p>

                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection
