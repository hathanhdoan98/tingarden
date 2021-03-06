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
                            <h2 class="mg-0">Giao h??ng & thanh to??n</h2>
                        </div>
                        <!-- <form method="post" name="frm_order" action="" enctype="multipart/form-data"  id="frm_order"> -->
                        <div class="cart-step-tabs mb-30">
                            <div class="head-tabs">
                                <div class="swiper-container">
                                    <ul class="nav nav-tabs swiper-wrapper" role="tablist">
                                        <li class="swiper-slide active" role="presentation">
                                            <a href="#step1" aria-controls="home" role="tab">
                                                <div class="o-text">Gi??? h??ng</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide" role="presentation">
                                            <a href="#step2" aria-controls="home" role="tab">
                                                <div class="o-text">Giao h??ng & thanh to??n</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide" role="presentation">
                                            <a href="#step3" aria-controls="home" role="tab">
                                                <div class="o-text">X??c nh???n ????n h??ng</div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide" role="presentation">
                                            <a href="#step4" aria-controls="home" role="tab">
                                                <div class="o-text">Ho??n t???t</div>
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
                                                <table class="table-customize" border="0" cellpadding="0" cellspacing="0"
                                                    style="background:#fff" width="100%">
                                                    <thead style="border: 1px solid #ccc;">
                                                        <tr>
                                                            <th bgcolor="#000" width="30%"
                                                                style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                T??N S???N PH???M</th>
                                                            <th bgcolor="#000" width="15%"
                                                                style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                H??NH ???NH</th>
                                                            <th bgcolor="#000" width="15%"
                                                                style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                ????N GI??</th>
                                                            <th bgcolor="#000" width="15%"
                                                                style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                S??? L?????NG</th>
                                                            <th bgcolor="#000" width="15%"
                                                                style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                TH??NH TI???N</th>
                                                            <!-- <th align="right" bgcolor="#c33444" style="width:100px;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">T???ng t???m</th> -->
                                                            <th bgcolor="#000" width="15%"
                                                                style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                X??A ????N</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody bgcolor="#fff"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;border: 1px solid #ccc;">
                                                        <tr>
                                                            <td data-title="" align="left" width="30%"
                                                                style="padding:3px 30px;font-size:14px;border: 1px solid #ccc;"
                                                                valign="center">
                                                                <span>B??NH HOA CARAMEL HBI - 024</span>

                                                            </td>
                                                            <td align="center" width="15%"
                                                                style="padding:20px 9px; width:100px;border: 1px solid #ccc;"
                                                                valign="center"><span class="v-img">
                                                                    <img src="upload/baiviet/binhhoatuoitonemaucaramel024-2266.png"
                                                                        alt="" height="100" width="100" />
                                                                </span><br>
                                                            </td>
                                                            <td align="center" width="15%"
                                                                style="padding:20px 9px;font-size:16px;color:#000;border: 1px solid #ccc;"
                                                                valign="center"><span>1.290.000 ??</span>
                                                            </td>
                                                            <td align="center" width="15%"
                                                                style="padding:20px 9px;border: 1px solid #ccc;"
                                                                valign="center">
                                                                <div class="ds-flex flex-align-center flex-center">
                                                                    <button class="btn-minus btn-default">-</button>
                                                                    <input
                                                                        style="height: 35px;text-align: center;width: 30px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;border-left:none;border-right:none"
                                                                        current-id="4109" data-price="1290000" type="number"
                                                                        name="quantity" min="1" max="999"
                                                                        class="update-sl txt-input-number" value="2" />
                                                                    <button class="btn-plus btn-default">+</button>
                                                                </div>
                                                            </td>
                                                            <td align="center" width="15%"
                                                                style="padding:20px 9px;color:#f00;border: 1px solid #ccc;font-size:16px;color:#000;"
                                                                valign="center">
                                                                <span>2.580.000 ??</span>
                                                            </td>
                                                            <!-- <td align="right" style="padding:20px 9px;color:#f00" valign="center"><span class="price-temp">2.580.000 ??</span></td> -->
                                                            <td align="center" width="15%"
                                                                style="width:100px;padding:20px 9px;font-size:1.5em;color:#f00;border: 1px solid #ccc;"
                                                                valign="center"><span><img class="delcart cs-pointer"
                                                                        data-id="4109" data-qty="2" data-price="1290000"
                                                                        data-color="" data-size="" data-material=""
                                                                        src="images/del_cart.png" alt="" /></span></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px">
                                                        <tr>
                                                            <td align="left" colspan="4" style="padding:7px 9px">
                                                                <strong><big></big>
                                                                </strong></td>
                                                            <td align="left" style="padding:0px 9px;font-size:14px;">Tr??? gi??
                                                                h??ng h??a</td>
                                                            <td align="right"
                                                                style="padding:5px 9px;font-size:14px;color:#000"><span
                                                                    class="price-temp">2.580.000 ??</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" colspan="4" style="padding:7px 9px">
                                                                <strong><big></big>
                                                                </strong></td>
                                                            <td align="left" style="padding:0px 9px;font-size:14px;">Ph?? v???n
                                                                chuy???n</td>
                                                            <td align="right"
                                                                style="padding:5px 9px;color:#000;font-size:14px;">
                                                                <span></span>
                                                            </td>
                                                        </tr>
                                                        <tr bgcolor="#fff">
                                                            <td align="left" colspan="4" style="padding:7px 9px">
                                                                <strong><big></big>
                                                                </strong></td>
                                                            <td align="left" style="padding:7px 9px;font-size:14px;">
                                                                <strong><big>Th??nh
                                                                        ti???n</big> </strong></td>
                                                            <td align="right"
                                                                style="padding:7px 9px;font-size:14px;color:#ea3223">
                                                                <strong><big><span id="total-cart">2.580.000 ??</span>
                                                                    </big> </strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="button-block ds-mobile mt-10">
                                                <a class="step-footer-previous-link" href="san-pham"
                                                    style="color: #338dbc;">
                                                    <button type="submit"
                                                        class="btn btn--buy-now btn--buy-now-x2 w-100i">Ti???p t???c mua
                                                        h??ng&nbsp;&nbsp;<i class="fa fa-caret-right"
                                                            aria-hidden="true"></i></button>
                                                </a>
                                                <button class="w-100i"
                                                    style="background: var(--html-bg-website)!important;text-transform:uppercase;font-weight:bold;border:none;font-size:16px;text-transform:uppercase;display:inline-block;color:#fff;padding:10px;"
                                                    id="giohang" title="thanh to??n">Giao h??ng & thanh to??n</button>
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
                                                            <h2 class="pd-thongtin mg-0">TH??NG TIN ????N H??NG</h2>
                                                        </div>
                                                        <div class='box-thanhtoan' id="ajaxLoad1">
                                                            <table border="0" cellpadding="5px" cellspacing="1px"
                                                                class='table-order table-order-thanhtoan' width="100%">
                                                                <tbody>
                                                                    <tr bgcolor="#FFFFFF">
                                                                        <td width="100%"
                                                                            style="border-bottom:1px solid #ccc">
                                                                            <div class='row'>
                                                                                <div class='col-xs-3'>
                                                                                    <div class="p-img">
                                                                                        <a class="v-img"
                                                                                            href="san-pham/binh-hoa-caramel-hbi-024">
                                                                                            <img src="upload/baiviet/binhhoatuoitonemaucaramel024-2266.png"
                                                                                                alt="" height="70"
                                                                                                width="100" />
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class='col-xs-9'>
                                                                                    <p
                                                                                        style="color:#000;font-size:14px;;margin-bottom:5px">
                                                                                        <a style="font-size:13px;"
                                                                                            href="san-pham/binh-hoa-caramel-hbi-024">
                                                                                            <span>B??NH HOA CARAMEL HBI -
                                                                                                024</span>
                                                                                        </a>
                                                                                    </p>
                                                                                    <p
                                                                                        style="color:#000;font-size:14px;;margin-bottom:5px">
                                                                                        S??? l?????ng: 2</p>
                                                                                    <p
                                                                                        style="color:#000;font-size:14px;;margin-bottom:5px">
                                                                                        Gi??: 1.290.000 ?? </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr class="tonggia-order">
                                                                        <td colspan="5">
                                                                            Tr??? gi?? h??ng h??a : 2.580.000 ?? </td>
                                                                    </tr>
                                                                    <tr class="tonggia-order">
                                                                        <td colspan="5">
                                                                            Ph?? v???n chuy???n : ??? </td>
                                                                    </tr>
                                                                    <tr class="tonggia-order">
                                                                        <td colspan="5">
                                                                            <span
                                                                                style="font-weight: bold;font-size:14px;">Th??nh
                                                                                ti???n:</span>
                                                                            <span
                                                                                style="color:#f00;font-weight:bold;font-size:15px">2.580.000
                                                                                ??</span>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                        <!-- <div class="box-paypal">
                                    <b style="font-size:16px;font-weight:bold">??i???m th?????ng</b><br>
                                    <div class="rd-giaohang">
                                        <label class="radio-item">
                                            <input type="radio" name="point" value="1" />
                                            <span class="rd-text" style="color:#f00">S??? d???ng th??? th??nh vi??n ????? thanh
                                                to??n</span>
                                        </label>
                                    </div>
                                </div> -->
                                                        <div class="box-paypal mt-10">
                                                            <b style="font-size:16px;font-weight:bold">Ph????ng th???c giao
                                                                h??ng</b><br>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="giaohang" checked value="1" />
                                                                    <span class="rd-text">Giao h??ng ti??u chu???n</span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="giaohang" value="2" />
                                                                    <span class="rd-text">Giao h??ng nhanh</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="box-paypal mt-5">
                                                            <b style="font-size:16px;font-weight:bold">Ph????ng th???c thanh
                                                                to??n</b><br>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt" checked value="1" />
                                                                    <span class="rd-text">
                                                                        <span style="width:65px;display: inline-block;"><img
                                                                                height="25px" src="images/paypal1.png"
                                                                                alt="paypal" /></span>
                                                                        &nbsp;&nbsp;Ship COD </span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt" value="2" />
                                                                    <span class="rd-text">
                                                                        <span style="width:65px;display: inline-block;"><img
                                                                                height="25px" src="images/paypal2.png"
                                                                                alt="paypal" /></span>
                                                                        &nbsp;&nbsp;Th??? ATM n???i ?????a (Internet Banking)
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt" value="3" />
                                                                    <span class="rd-text">
                                                                        <span style="width:65px;display: inline-block;"><img
                                                                                height="25px" src="images/paypal3.png"
                                                                                alt="paypal" /></span>
                                                                        &nbsp;&nbsp;Chuy???n kho???n (ATM, t???i ng??n h??ng)
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="rd-giaohang">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="httt" value="4" />
                                                                    <span class="rd-text">
                                                                        <span style="width:65px;display: inline-block;"><img
                                                                                height="25px" src="images/paypal4.png"
                                                                                alt="paypal" /></span>
                                                                        &nbsp;&nbsp;Th??? t??n d???ng ghi n??? </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-8 col-xs-12 fix-col-10'>
                                                        <div class="title-giaohang title-cart-default pt-20 pb-20">
                                                            <h2 class="pd-default mg-0">?????A CH??? GIAO H??NG</h2>
                                                        </div>
                                                        <div class='box-thanhtoan'>
                                                            <div class="login_cart">
                                                                <div class="box-left-cart01">
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>H???
                                                                                v?? t??n
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-name">
                                                                                <input type="hidden" name="id_user"
                                                                                    value="" />
                                                                                <input type="text" required="required"
                                                                                    id="ten" name="fullname" value=""
                                                                                    class="textbox-cart input-cart form-control"
                                                                                    placeholder="H??? v?? t??n">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>??i???n
                                                                                tho???i
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-tele ds-mobile"
                                                                                style="display:flex;align-items:center;justify-content:space-between">
                                                                                <input type="text" id="dienthoai"
                                                                                    name="phone" value=""
                                                                                    class="textbox-cart input-cart form-control w-40 w-100i"
                                                                                    placeholder="S??? ??i???n tho???i">
                                                                                <!-- <p class='title-giaohang'>(Nh??n vi??n giao nh???n s??? li??n h??? S??T n??y)</p> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'>
                                                                            <label>Email
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-email">
                                                                                <input type="email" id="email" name="email"
                                                                                    value=""
                                                                                    class="textbox-cart input-cart form-control"
                                                                                    placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>?????a
                                                                                ch??? giao h??ng
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-add">
                                                                                <input name="address" required="required"
                                                                                    id="address" type="text" value=""
                                                                                    class="textbox-cart input-cart form-control"
                                                                                    placeholder="S??? nh??, Ph?????ng, Qu???n, Th??nh Ph???...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>T???nh
                                                                                th??nh
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="id_city" id="id_city"
                                                                                    class="form-control selectpicker order-select">
                                                                                    <option value="">Ch???n t???nh th??nh
                                                                                    </option>
                                                                                    <option value="63">Y??n B??i</option>
                                                                                    <option value="62">V??nh Ph??c</option>
                                                                                    <option value="61">V??nh Long</option>
                                                                                    <option value="60">Tuy??n Quang</option>
                                                                                    <option value="59">Tr?? Vinh</option>
                                                                                    <option value="58">Ti???n Giang</option>
                                                                                    <option value="57">Th???a Thi??n Hu???
                                                                                    </option>
                                                                                    <option value="56">Thanh H??a</option>
                                                                                    <option value="55">Th??i Nguy??n</option>
                                                                                    <option value="54">Th??i B??nh</option>
                                                                                    <option value="53">T??y Ninh</option>
                                                                                    <option value="52">S??n La</option>
                                                                                    <option value="51">S??c Tr??ng</option>
                                                                                    <option value="50">Qu???ng Tr???</option>
                                                                                    <option value="49">Qu???ng Ninh</option>
                                                                                    <option value="48">Qu???ng Ng??i</option>
                                                                                    <option value="47">Qu???ng Nam</option>
                                                                                    <option value="46">Qu???ng B??nh</option>
                                                                                    <option value="45">Ph?? Y??n</option>
                                                                                    <option value="44">Ph?? Th???</option>
                                                                                    <option value="43">Ninh Thu???n</option>
                                                                                    <option value="42">Ninh B??nh</option>
                                                                                    <option value="41">Ngh??? An</option>
                                                                                    <option value="40">Nam ?????nh</option>
                                                                                    <option value="39">L??o Cai</option>
                                                                                    <option value="38">L???ng S??n</option>
                                                                                    <option value="37">L??m ?????ng</option>
                                                                                    <option value="36">Lai Ch??u</option>
                                                                                    <option value="35">Kon Tum</option>
                                                                                    <option value="34">Ki??n Giang</option>
                                                                                    <option value="33">Kh??nh H??a</option>
                                                                                    <option value="32">H??ng Y??n</option>
                                                                                    <option value="31">H??a B??nh</option>
                                                                                    <option value="30">H???u Giang</option>
                                                                                    <option value="29">H???i D????ng</option>
                                                                                    <option value="28">H?? T??nh</option>
                                                                                    <option value="27">H?? Nam</option>
                                                                                    <option value="26">H?? Giang</option>
                                                                                    <option value="25">Gia Lai</option>
                                                                                    <option value="24">?????ng Th??p</option>
                                                                                    <option value="23">?????ng Nai</option>
                                                                                    <option value="22">??i???n Bi??n</option>
                                                                                    <option value="21">?????k N??ng</option>
                                                                                    <option value="20">?????k L???k</option>
                                                                                    <option value="19">Cao B???ng</option>
                                                                                    <option value="18">C???n Th??</option>
                                                                                    <option value="17">C?? Mau</option>
                                                                                    <option value="16">B??nh Thu???n </option>
                                                                                    <option value="15">B??nh Ph?????c</option>
                                                                                    <option value="14">B??nh ?????nh</option>
                                                                                    <option value="13">B???n Tre</option>
                                                                                    <option value="12">B???c Ninh</option>
                                                                                    <option value="11">B???c Li??u</option>
                                                                                    <option value="10">B???c K???n</option>
                                                                                    <option value="9">B???c Giang</option>
                                                                                    <option value="8">An Giang</option>
                                                                                    <option value="7">B?? R???a V??ng T??u
                                                                                    </option>
                                                                                    <option value="6">Long An</option>
                                                                                    <option value="5">H???i Ph??ng</option>
                                                                                    <option value="4">???? N???ng</option>
                                                                                    <option value="3">B??nh D????ng</option>
                                                                                    <option value="2">Ha?? N????i</option>
                                                                                    <option value="1">H??? Ch?? Minh</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Qu???n
                                                                                huy???n
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="id_dist" id="id_dist"
                                                                                    class="form-control selectpicker order-select">
                                                                                    <option value="">Ch???n qu???n huy???n
                                                                                    </option>
                                                                                    <option value="704">Y??n B??nh</option>
                                                                                    <option value="703">Y??n B??i</option>
                                                                                    <option value="702">V??n Y??n</option>
                                                                                    <option value="701">Tr???m T???u</option>
                                                                                    <option value="700">Tr???n Y??n</option>
                                                                                    <option value="699">Ngh??a L???</option>
                                                                                    <option value="698">V??n Ch???n</option>
                                                                                    <option value="697">M?? Cang Ch???i
                                                                                    </option>
                                                                                    <option value="696">L???c Y??n</option>
                                                                                    <option value="695">Y??n L???c</option>
                                                                                    <option value="694">V??nh Y??n</option>
                                                                                    <option value="693">V??nh T?????ng</option>
                                                                                    <option value="692">Tam ?????o</option>
                                                                                    <option value="691">Tam D????ng</option>
                                                                                    <option value="690">S??ng L??</option>
                                                                                    <option value="689">Ph??c Y??n</option>
                                                                                    <option value="688">L???p Th???ch</option>
                                                                                    <option value="687">B??nh Xuy??n</option>
                                                                                    <option value="686">V??ng Li??m</option>
                                                                                    <option value="685">V??nh Long</option>
                                                                                    <option value="684">Tr?? ??n</option>
                                                                                    <option value="683">Tam B??nh</option>
                                                                                    <option value="682">Mang Th??t</option>
                                                                                    <option value="681">Long H???</option>
                                                                                    <option value="680">B??nh Minh</option>
                                                                                    <option value="679">B??nh T??n</option>
                                                                                    <option value="678">Y??n S??n</option>
                                                                                    <option value="677">L??m B??nh</option>
                                                                                    <option value="676">H??m Y??n</option>
                                                                                    <option value="675">Tuy??n Quang</option>
                                                                                    <option value="674">Na Hang</option>
                                                                                    <option value="673">S??n D????ng</option>
                                                                                    <option value="672">Chi??m H??a</option>
                                                                                    <option value="671">Tr?? Vinh</option>
                                                                                    <option value="670">Tr?? C??</option>
                                                                                    <option value="669">Ch??u Th??nh</option>
                                                                                    <option value="668">Ti???u C???n</option>
                                                                                    <option value="667">Duy??n H???i</option>
                                                                                    <option value="666">C???u K??</option>
                                                                                    <option value="665">C???u Ngang</option>
                                                                                    <option value="664">C??ng Long</option>
                                                                                    <option value="663">Th??? X?? Cai L???y
                                                                                    </option>
                                                                                    <option value="662">T??n Ph?????c</option>
                                                                                    <option value="661">T??n Ph?? ????ng
                                                                                    </option>
                                                                                    <option value="660">M??? Tho</option>
                                                                                    <option value="659">Huy???n Cai L???y
                                                                                    </option>
                                                                                    <option value="658">G?? C??ng T??y</option>
                                                                                    <option value="657">Ch??u Th??nh</option>
                                                                                    <option value="656">G?? C??ng</option>
                                                                                    <option value="655">Ch??? G???o</option>
                                                                                    <option value="654">G?? C??ng ????ng
                                                                                    </option>
                                                                                    <option value="653">C??i B??</option>
                                                                                    <option value="652">Qu???ng ??i???n</option>
                                                                                    <option value="651">Ph?? Vang</option>
                                                                                    <option value="650">Ph?? L???c</option>
                                                                                    <option value="649">Nam ????ng</option>
                                                                                    <option value="648">Hu???</option>
                                                                                    <option value="647">H????ng Tr??</option>
                                                                                    <option value="646">Phong ??i???n</option>
                                                                                    <option value="645">H????ng Th???y</option>
                                                                                    <option value="644">A L?????i</option>
                                                                                    <option value="643">Y??n ?????nh</option>
                                                                                    <option value="642">V??nh L???c</option>
                                                                                    <option value="641">Tri???u S??n</option>
                                                                                    <option value="640">T??nh Gia</option>
                                                                                    <option value="639">Th?????ng Xu??n</option>
                                                                                    <option value="638">Th??? Xu??n</option>
                                                                                    <option value="637">Thi???u H??a</option>
                                                                                    <option value="636">Thanh H??a</option>
                                                                                    <option value="635">Th???ch Th??nh</option>
                                                                                    <option value="634">S???m S??n</option>
                                                                                    <option value="633">Qu???ng X????ng</option>
                                                                                    <option value="632">Quan S??n</option>
                                                                                    <option value="631">Quan H??a</option>
                                                                                    <option value="630">N??ng C???ng</option>
                                                                                    <option value="629">Nh?? Xu??n</option>
                                                                                    <option value="628">Nh?? Thanh</option>
                                                                                    <option value="627">Ng???c L???c</option>
                                                                                    <option value="626">Nga S??n</option>
                                                                                    <option value="625">M?????ng L??t</option>
                                                                                    <option value="624">Lang Ch??nh</option>
                                                                                    <option value="623">Ho???ng H??a</option>
                                                                                    <option value="622">H???u L???c</option>
                                                                                    <option value="621">H?? Trung</option>
                                                                                    <option value="620">????ng S??n</option>
                                                                                    <option value="619">C???m Th???y</option>
                                                                                    <option value="618">B???m S??n</option>
                                                                                    <option value="617">B?? Th?????c</option>
                                                                                    <option value="616">V?? Nhai</option>
                                                                                    <option value="615">Th??i Nguy??n</option>
                                                                                    <option value="614">S??ng C??ng</option>
                                                                                    <option value="613">Ph?? B??nh</option>
                                                                                    <option value="612">Ph?? L????ng</option>
                                                                                    <option value="611">Ph??? Y??n</option>
                                                                                    <option value="610">?????ng H???</option>
                                                                                    <option value="609">?????i T???</option>
                                                                                    <option value="608">?????nh H??a</option>
                                                                                    <option value="607">V?? Th??</option>
                                                                                    <option value="606">Ti???n H???i</option>
                                                                                    <option value="605">Th??i Thu???</option>
                                                                                    <option value="604">Qu???nh Ph???</option>
                                                                                    <option value="603">Ki???n X????ng</option>
                                                                                    <option value="602">H??ng H??</option>
                                                                                    <option value="601">Th??i B??nh</option>
                                                                                    <option value="600">????ng H??ng</option>
                                                                                    <option value="599">Tr???ng B??ng</option>
                                                                                    <option value="598">T??y Ninh</option>
                                                                                    <option value="597">T??n Ch??u</option>
                                                                                    <option value="596">H??a Th??nh</option>
                                                                                    <option value="595">T??n Bi??n</option>
                                                                                    <option value="594">D????ng Minh Ch??u
                                                                                    </option>
                                                                                    <option value="593">G?? D???u</option>
                                                                                    <option value="592">Ch??u Th??nh</option>
                                                                                    <option value="591">B???n C???u</option>
                                                                                    <option value="590">Y??n Ch??u</option>
                                                                                    <option value="589">V??n H???</option>
                                                                                    <option value="588">Thu???n Ch??u</option>
                                                                                    <option value="587">S???p C???p</option>
                                                                                    <option value="586">S??ng M??</option>
                                                                                    <option value="585">S??n La</option>
                                                                                    <option value="584">Ph?? Y??n</option>
                                                                                    <option value="583">Qu???nh Nhai</option>
                                                                                    <option value="582">M?????ng La</option>
                                                                                    <option value="581">M???c Ch??u</option>
                                                                                    <option value="580">B???c Y??n</option>
                                                                                    <option value="579">Mai S??n</option>
                                                                                    <option value="578">V??nh Ch??u</option>
                                                                                    <option value="577">Tr???n ?????</option>
                                                                                    <option value="576">Th???nh Tr???</option>
                                                                                    <option value="575">S??c Tr??ng</option>
                                                                                    <option value="574">Ng?? N??m</option>
                                                                                    <option value="573">K??? S??ch</option>
                                                                                    <option value="572">Long Ph??</option>
                                                                                    <option value="571">M??? T??</option>
                                                                                    <option value="570">M??? Xuy??n</option>
                                                                                    <option value="569">C?? Lao Dung</option>
                                                                                    <option value="568">Ch??u Th??nh</option>
                                                                                    <option value="567">V??nh Linh</option>
                                                                                    <option value="566">Tri???u Phong</option>
                                                                                    <option value="565">Qu???ng Tr???</option>
                                                                                    <option value="564">H?????ng H??a</option>
                                                                                    <option value="563">H???i L??ng</option>
                                                                                    <option value="562">Gio Linh</option>
                                                                                    <option value="561">????ng H??</option>
                                                                                    <option value="560">????k R??ng</option>
                                                                                    <option value="559">?????o C???n c???</option>
                                                                                    <option value="558">Cam L???</option>
                                                                                    <option value="557">V??n ?????n</option>
                                                                                    <option value="556">U??ng B??</option>
                                                                                    <option value="555">Ti??n Y??n</option>
                                                                                    <option value="554">Qu???ng Y??n</option>
                                                                                    <option value="553">M??ng C??i</option>
                                                                                    <option value="552">Ho??nh B???</option>
                                                                                    <option value="551">H???i H??</option>
                                                                                    <option value="550">H??? Long</option>
                                                                                    <option value="549">????ng Tri???u</option>
                                                                                    <option value="548">?????m H??</option>
                                                                                    <option value="547">C?? T??</option>
                                                                                    <option value="546">B??nh Li??u</option>
                                                                                    <option value="545">C???m Ph???</option>
                                                                                    <option value="544">Ba Ch???</option>
                                                                                    <option value="543">T?? Ngh??a</option>
                                                                                    <option value="542">Tr?? B???ng</option>
                                                                                    <option value="541">T??y Tr??</option>
                                                                                    <option value="540">S??n T???nh</option>
                                                                                    <option value="539">S??n T??y</option>
                                                                                    <option value="538">S??n H??</option>
                                                                                    <option value="537">Qu???ng Ng??i</option>
                                                                                    <option value="536">Ngh??a H??nh</option>
                                                                                    <option value="535">M??? ?????c</option>
                                                                                    <option value="534">Minh Long</option>
                                                                                    <option value="533">L?? S??n</option>
                                                                                    <option value="532">?????c Ph???</option>
                                                                                    <option value="531">B??nh S??n</option>
                                                                                    <option value="530">Ba T??</option>
                                                                                    <option value="529">Ti??n Ph?????c</option>
                                                                                    <option value="528">Th??ng B??nh</option>
                                                                                    <option value="527">T??y Giang</option>
                                                                                    <option value="526">Tam K???</option>
                                                                                    <option value="525">Qu??? S??n</option>
                                                                                    <option value="524">Ph?????c S??n</option>
                                                                                    <option value="523">Ph?? Ninh</option>
                                                                                    <option value="522">N??i Th??nh</option>
                                                                                    <option value="521">N??ng S??n</option>
                                                                                    <option value="520">Nam Tr?? My</option>
                                                                                    <option value="519">Nam Giang</option>
                                                                                    <option value="518">H???i An</option>
                                                                                    <option value="517">Duy Xuy??n</option>
                                                                                    <option value="516">Hi???p ?????c</option>
                                                                                    <option value="515">????ng Giang</option>
                                                                                    <option value="514">??i???n B??n</option>
                                                                                    <option value="513">?????i L???c</option>
                                                                                    <option value="512">B???c Tr?? My</option>
                                                                                    <option value="511">Tuy??n H??a</option>
                                                                                    <option value="510">Qu???ng Tr???ch</option>
                                                                                    <option value="509">Qu???ng Ninh</option>
                                                                                    <option value="508">Minh H??a</option>
                                                                                    <option value="507">L??? Th???y</option>
                                                                                    <option value="506">?????ng H???i</option>
                                                                                    <option value="505">B??? Tr???ch</option>
                                                                                    <option value="504">Ba ?????n</option>
                                                                                    <option value="503">Tuy H??a</option>
                                                                                    <option value="502">Tuy An</option>
                                                                                    <option value="501">T??y H??a</option>
                                                                                    <option value="500">Ph?? H??a</option>
                                                                                    <option value="499">S??ng Hinh</option>
                                                                                    <option value="498">S??ng C???u</option>
                                                                                    <option value="497">S??n H??a</option>
                                                                                    <option value="496">?????ng Xu??n</option>
                                                                                    <option value="495">????ng H??a</option>
                                                                                    <option value="494">Y??n L???p</option>
                                                                                    <option value="493">Vi???t Tr??</option>
                                                                                    <option value="492">Thanh Th???y</option>
                                                                                    <option value="491">Thanh S??n</option>
                                                                                    <option value="490">Thanh Ba</option>
                                                                                    <option value="489">T??n S??n</option>
                                                                                    <option value="488">Tam N??ng</option>
                                                                                    <option value="487">Ph?? Th???</option>
                                                                                    <option value="486">Ph?? Ninh</option>
                                                                                    <option value="485">L??m Thao</option>
                                                                                    <option value="484">H??? H??a</option>
                                                                                    <option value="483">??oan H??ng</option>
                                                                                    <option value="482">C???m Kh??</option>
                                                                                    <option value="481">Thu???n Nam</option>
                                                                                    <option value="480">Thu???n B???c</option>
                                                                                    <option value="479">Phan Rang - Th??p
                                                                                        Ch??m</option>
                                                                                    <option value="478">Ninh S??n</option>
                                                                                    <option value="477">Ninh Ph?????c</option>
                                                                                    <option value="476">Ninh H???i</option>
                                                                                    <option value="475">B??c ??i</option>
                                                                                    <option value="474">Y??n M??</option>
                                                                                    <option value="473">Y??n Kh??nh</option>
                                                                                    <option value="472">Tam ??i???p</option>
                                                                                    <option value="471">Ninh B??nh</option>
                                                                                    <option value="470">Nho Quan</option>
                                                                                    <option value="469">Kim S??n</option>
                                                                                    <option value="468">Hoa L??</option>
                                                                                    <option value="467">Gia Vi???n</option>
                                                                                    <option value="466">Y??n Th??nh</option>
                                                                                    <option value="465">Vinh</option>
                                                                                    <option value="464">T????ng D????ng</option>
                                                                                    <option value="463">Thanh Ch????ng
                                                                                    </option>
                                                                                    <option value="462">Th??i H??a</option>
                                                                                    <option value="461">T??n K???</option>
                                                                                    <option value="460">Qu???nh L??u</option>
                                                                                    <option value="459">Qu??? H???p</option>
                                                                                    <option value="458">Qu??? Ch??u</option>
                                                                                    <option value="457">Qu??? Phong</option>
                                                                                    <option value="456">Ngh??a ????n</option>
                                                                                    <option value="455">Nghi L???c</option>
                                                                                    <option value="454">Nam ????n</option>
                                                                                    <option value="453">K??? S??n</option>
                                                                                    <option value="452">H??ng Nguy??n</option>
                                                                                    <option value="451">Ho??ng Mai</option>
                                                                                    <option value="450">???? L????ng</option>
                                                                                    <option value="449">Di???n Ch??u</option>
                                                                                    <option value="448">C???a L??</option>
                                                                                    <option value="447">Con Cu??ng</option>
                                                                                    <option value="446">Anh S??n</option>
                                                                                    <option value="445">?? Y??n</option>
                                                                                    <option value="444">Xu??n Tr?????ng</option>
                                                                                    <option value="443">V??? B???n</option>
                                                                                    <option value="442">Nam ?????nh</option>
                                                                                    <option value="441">Nam Tr???c</option>
                                                                                    <option value="440">Ngh??a H??ng</option>
                                                                                    <option value="439">Tr???c Ninh</option>
                                                                                    <option value="438">M??? L???c</option>
                                                                                    <option value="437">H???i H???u</option>
                                                                                    <option value="436">Giao Th???y</option>
                                                                                    <option value="435">Xi Ma Cai</option>
                                                                                    <option value="434">V??n B??n</option>
                                                                                    <option value="433">Sa Pa</option>
                                                                                    <option value="432">M?????ng Kh????ng
                                                                                    </option>
                                                                                    <option value="431">B???o Y??n</option>
                                                                                    <option value="430">B??t X??t</option>
                                                                                    <option value="429">L??o Cai</option>
                                                                                    <option value="428">B???o Th???ng</option>
                                                                                    <option value="427">B???c H??</option>
                                                                                    <option value="426">V??n Quan</option>
                                                                                    <option value="425">V??n L??ng</option>
                                                                                    <option value="424">Tr??ng ?????nh</option>
                                                                                    <option value="423">L???c B??nh</option>
                                                                                    <option value="422">H???u L??ng</option>
                                                                                    <option value="421">L???ng S??n</option>
                                                                                    <option value="420">????nh L???p</option>
                                                                                    <option value="419">Chi L??ng</option>
                                                                                    <option value="418">Cao L???c</option>
                                                                                    <option value="417">B??nh Gia</option>
                                                                                    <option value="416">B???c S??n</option>
                                                                                    <option value="415">L??m H??</option>
                                                                                    <option value="414">L???c D????ng</option>
                                                                                    <option value="413">?????c Tr???ng</option>
                                                                                    <option value="412">????n D????ng</option>
                                                                                    <option value="411">????? Huoai</option>
                                                                                    <option value="410">Di Linh</option>
                                                                                    <option value="409">???? L???t</option>
                                                                                    <option value="408">????? T???h</option>
                                                                                    <option value="407">??am R??ng</option>
                                                                                    <option value="406">C??t Ti??n</option>
                                                                                    <option value="405">B???o L???c</option>
                                                                                    <option value="404">B???o L??m</option>
                                                                                    <option value="403">Than Uy??n</option>
                                                                                    <option value="402">T??n Uy??n</option>
                                                                                    <option value="401">Tam ???????ng</option>
                                                                                    <option value="400">S??n H???</option>
                                                                                    <option value="399">Phong Th???</option>
                                                                                    <option value="398">N???m Nh??n</option>
                                                                                    <option value="397">M?????ng T??</option>
                                                                                    <option value="396">Lai Ch??u</option>
                                                                                    <option value="395">Tu M?? R??ng</option>
                                                                                    <option value="394">Sa Th???y</option>
                                                                                    <option value="393">Ng???c H???i</option>
                                                                                    <option value="392">KonTum</option>
                                                                                    <option value="391">Kon Pl??ng</option>
                                                                                    <option value="390">????k T??</option>
                                                                                    <option value="389">Kon R???y</option>
                                                                                    <option value="388">????k H??</option>
                                                                                    <option value="387">????k Glei</option>
                                                                                    <option value="386">V??nh Thu???n</option>
                                                                                    <option value="385">U minh Th?????ng
                                                                                    </option>
                                                                                    <option value="384">T??n Hi???p</option>
                                                                                    <option value="383">R???ch Gi??</option>
                                                                                    <option value="382">Ph?? Qu???c</option>
                                                                                    <option value="381">Ki??n L????ng</option>
                                                                                    <option value="380">H??n ?????t</option>
                                                                                    <option value="379">Ki??n H???i</option>
                                                                                    <option value="378">H?? Ti??n</option>
                                                                                    <option value="377">G?? Quao</option>
                                                                                    <option value="376">Gi???ng Ri???ng</option>
                                                                                    <option value="375">Giang Th??nh</option>
                                                                                    <option value="374">Ch??u Th??nh</option>
                                                                                    <option value="373">An Minh</option>
                                                                                    <option value="372">An Bi??n</option>
                                                                                    <option value="371">V???n Ninh</option>
                                                                                    <option value="370">Tr?????ng Sa</option>
                                                                                    <option value="369">Ninh H??a</option>
                                                                                    <option value="368">Nha Trang</option>
                                                                                    <option value="367">Kh??nh V??nh</option>
                                                                                    <option value="366">Kh??nh S??n</option>
                                                                                    <option value="365">Di??n Kh??nh</option>
                                                                                    <option value="364">Cam Ranh</option>
                                                                                    <option value="363">Cam L??m</option>
                                                                                    <option value="362">Y??n M???</option>
                                                                                    <option value="361">V??n L??m</option>
                                                                                    <option value="360">V??n Giang</option>
                                                                                    <option value="359">Ti??n L???</option>
                                                                                    <option value="358">Ph?? C???</option>
                                                                                    <option value="357">Kim ?????ng</option>
                                                                                    <option value="356">M??? H??o</option>
                                                                                    <option value="355">Kho??i Ch??u</option>
                                                                                    <option value="354">H??ng Y??n</option>
                                                                                    <option value="353">??n Thi</option>
                                                                                    <option value="352">Y??n Th???y</option>
                                                                                    <option value="351">T??n L???c</option>
                                                                                    <option value="350">Mai Ch??u</option>
                                                                                    <option value="349">L????ng S??n</option>
                                                                                    <option value="348">L???c Th???y</option>
                                                                                    <option value="347">L???c S??n</option>
                                                                                    <option value="346">K??? S??n</option>
                                                                                    <option value="345">Kim B??i</option>
                                                                                    <option value="344">H??a B??nh</option>
                                                                                    <option value="343">???? B???c</option>
                                                                                    <option value="342">Cao Phong</option>
                                                                                    <option value="341">V??? Th???y</option>
                                                                                    <option value="340">V??? Thanh</option>
                                                                                    <option value="339">Ph???ng Hi???p</option>
                                                                                    <option value="338">Ng?? B???y</option>
                                                                                    <option value="337">Long M???</option>
                                                                                    <option value="336">Ch??u Th??nh A
                                                                                    </option>
                                                                                    <option value="335">Ch??u Th??nh</option>
                                                                                    <option value="334">T??? K???</option>
                                                                                    <option value="333">Thanh Mi???n</option>
                                                                                    <option value="332">Thanh H??</option>
                                                                                    <option value="331">Ninh Giang</option>
                                                                                    <option value="330">Nam S??ch</option>
                                                                                    <option value="329">H???i D????ng</option>
                                                                                    <option value="328">Kinh M??n</option>
                                                                                    <option value="327">Kim Th??nh</option>
                                                                                    <option value="326">Gia L???c</option>
                                                                                    <option value="325">Ch?? Linh</option>
                                                                                    <option value="324">C???m Gi??ng</option>
                                                                                    <option value="323">B??nh Giang</option>
                                                                                    <option value="322">V?? Quang</option>
                                                                                    <option value="321">Th???ch H??</option>
                                                                                    <option value="320">Nghi Xu??n</option>
                                                                                    <option value="319">L???c H??</option>
                                                                                    <option value="318">K??? Anh</option>
                                                                                    <option value="317">H????ng S??n</option>
                                                                                    <option value="316">H????ng Kh??</option>
                                                                                    <option value="315">H???ng L??nh</option>
                                                                                    <option value="314">H?? T??nh</option>
                                                                                    <option value="313">?????c Th???</option>
                                                                                    <option value="312">Can L???c</option>
                                                                                    <option value="311">C???m Xuy??n</option>
                                                                                    <option value="310">Thanh Li??m</option>
                                                                                    <option value="309">Ph??? L??</option>
                                                                                    <option value="308">L?? Nh??n</option>
                                                                                    <option value="307">Kim B???ng</option>
                                                                                    <option value="306">Duy Ti??n</option>
                                                                                    <option value="305">B??nh L???c</option>
                                                                                    <option value="304">Y??n Minh</option>
                                                                                    <option value="303">X??n M???n</option>
                                                                                    <option value="302">V??? Xuy??n</option>
                                                                                    <option value="301">Quang B??nh</option>
                                                                                    <option value="300">Qu???n B???</option>
                                                                                    <option value="299">M??o V???c</option>
                                                                                    <option value="298">Ho??ng Su Ph??
                                                                                    </option>
                                                                                    <option value="297">H?? Giang</option>
                                                                                    <option value="296">?????ng V??n</option>
                                                                                    <option value="295">B???c Quang</option>
                                                                                    <option value="294">B???c M??</option>
                                                                                    <option value="293">Plei Ku</option>
                                                                                    <option value="292">Ph?? Thi???n</option>
                                                                                    <option value="291">Mang Yang</option>
                                                                                    <option value="290">Kr??ng Pa</option>
                                                                                    <option value="289">K??ng Chro</option>
                                                                                    <option value="288">KBang</option>
                                                                                    <option value="287">Ia Pa</option>
                                                                                    <option value="286">Ia Grai</option>
                                                                                    <option value="285">?????c C??</option>
                                                                                    <option value="284">????k P??</option>
                                                                                    <option value="283">????k ??oa</option>
                                                                                    <option value="282">Ch??PR??ng</option>
                                                                                    <option value="281">Ch?? S??</option>
                                                                                    <option value="280">Ch?? P??h</option>
                                                                                    <option value="279">Ch?? P??h</option>
                                                                                    <option value="278">AYun Pa</option>
                                                                                    <option value="277">An Kh??</option>
                                                                                    <option value="276">Tp. Cao L??nh
                                                                                    </option>
                                                                                    <option value="275">Th??? x?? H???ng Ng???
                                                                                    </option>
                                                                                    <option value="274">Th??p M?????i</option>
                                                                                    <option value="273">Thanh B??nh</option>
                                                                                    <option value="272">T??n H???ng</option>
                                                                                    <option value="271">Tam N??ng</option>
                                                                                    <option value="270">Sa ????c</option>
                                                                                    <option value="269">L???p V??</option>
                                                                                    <option value="268">Lai Vung</option>
                                                                                    <option value="267">Huy???n H???ng Ng???
                                                                                    </option>
                                                                                    <option value="266">Huy???n Cao L??nh
                                                                                    </option>
                                                                                    <option value="265">Ch??u Th??nh</option>
                                                                                    <option value="264">Xu??n L???c</option>
                                                                                    <option value="263">V??nh C???u</option>
                                                                                    <option value="262">Tr???ng Bom</option>
                                                                                    <option value="261">Th???ng Nh???t</option>
                                                                                    <option value="260">T??n Ph??</option>
                                                                                    <option value="259">Long Kh??nh</option>
                                                                                    <option value="258">Nh??n Tr???ch</option>
                                                                                    <option value="257">Long Th??nh</option>
                                                                                    <option value="256">?????nh Qu??n</option>
                                                                                    <option value="255">C???m M???</option>
                                                                                    <option value="254">Bi??n H??a</option>
                                                                                    <option value="253">Tu???n Gi??o</option>
                                                                                    <option value="252">T???a Ch??a</option>
                                                                                    <option value="251">N???m P???</option>
                                                                                    <option value="250">M?????ng Nh??</option>
                                                                                    <option value="249">??i???n Bi??n Ph???
                                                                                    </option>
                                                                                    <option value="248">M?????ng Lay</option>
                                                                                    <option value="247">M?????ng Ch??</option>
                                                                                    <option value="246">M?????ng ???ng</option>
                                                                                    <option value="245">??i???n Bi??n ????ng
                                                                                    </option>
                                                                                    <option value="244">??i???n Bi??n</option>
                                                                                    <option value="243">Tuy ?????c</option>
                                                                                    <option value="242">Kr??ng N??</option>
                                                                                    <option value="241">Gia Ngh??a</option>
                                                                                    <option value="240">D??k Song</option>
                                                                                    <option value="239">D??k Mil</option>
                                                                                    <option value="238">D??k GLong</option>
                                                                                    <option value="237">C?? J??t</option>
                                                                                    <option value="236">L??k</option>
                                                                                    <option value="235">Kr??ng P???c</option>
                                                                                    <option value="234">Kr??ng N??ng</option>
                                                                                    <option value="233">Kr??ng Buk</option>
                                                                                    <option value="232">Kr??ng B??ng</option>
                                                                                    <option value="231">Kr??ng Ana</option>
                                                                                    <option value="230">Ea S??p</option>
                                                                                    <option value="229">Ea Kar</option>
                                                                                    <option value="228">C?? Kuin</option>
                                                                                    <option value="227">Bu??n Ma Thu???t
                                                                                    </option>
                                                                                    <option value="226">Bu??n H???</option>
                                                                                    <option value="225">Bu??n ????n</option>
                                                                                    <option value="224">Tr??ng Kh??nh</option>
                                                                                    <option value="223">Tr?? L??nh</option>
                                                                                    <option value="222">Th??ng N??ng</option>
                                                                                    <option value="221">Th???ch An</option>
                                                                                    <option value="220">Qu???ng Uy??n</option>
                                                                                    <option value="219">Ph???c H??a</option>
                                                                                    <option value="218">Nguy??n B??nh</option>
                                                                                    <option value="217">H??a An</option>
                                                                                    <option value="216">H?? Qu???ng</option>
                                                                                    <option value="215">H??? Lang</option>
                                                                                    <option value="214">Cao B???ng</option>
                                                                                    <option value="213">B???o L??m</option>
                                                                                    <option value="212">B???o L???c</option>
                                                                                    <option value="211">V??nh Th???nh</option>
                                                                                    <option value="210">Th???t N???t</option>
                                                                                    <option value="209">Ninh Ki???u</option>
                                                                                    <option value="208">Phong ??i???n</option>
                                                                                    <option value="207">C??? ?????</option>
                                                                                    <option value="206">?? M??n</option>
                                                                                    <option value="205">C??i R??ng</option>
                                                                                    <option value="204">B??nh Th???y</option>
                                                                                    <option value="203"> Th???i Lai</option>
                                                                                    <option value="202">U Minh</option>
                                                                                    <option value="201">Tr???n V??n Th???i
                                                                                    </option>
                                                                                    <option value="200">Th???i B??nh</option>
                                                                                    <option value="199">Ph?? T??n</option>
                                                                                    <option value="198">Ng???c Hi???n</option>
                                                                                    <option value="197">N??m C??n</option>
                                                                                    <option value="196">?????m D??i</option>
                                                                                    <option value="195">C??i N?????c</option>
                                                                                    <option value="194">C?? Mau</option>
                                                                                    <option value="193">Tuy Phong</option>
                                                                                    <option value="192">T??nh Linh</option>
                                                                                    <option value="191">Phan Thi???t</option>
                                                                                    <option value="190">La Gi</option>
                                                                                    <option value="189">H??m T??n</option>
                                                                                    <option value="188">H??m Thu???n Nam
                                                                                    </option>
                                                                                    <option value="187">H??m Thu???n B???c
                                                                                    </option>
                                                                                    <option value="186">?????c Linh</option>
                                                                                    <option value="185">?????o Ph?? Qu??</option>
                                                                                    <option value="184">B???c B??nh</option>
                                                                                    <option value="183">Ph?????c Long</option>
                                                                                    <option value="182">Ph?? Ri???ng</option>
                                                                                    <option value="181">L???c Ninh</option>
                                                                                    <option value="180">H???n Qu???n</option>
                                                                                    <option value="179">?????ng Xo??i</option>
                                                                                    <option value="178">?????ng Ph??</option>
                                                                                    <option value="177">Ch??n Th??nh</option>
                                                                                    <option value="176">B?? Gia M???p</option>
                                                                                    <option value="175">B?? ?????p</option>
                                                                                    <option value="174">B?? ????ng</option>
                                                                                    <option value="173">B??nh Long</option>
                                                                                    <option value="172">V??nh Th???nh</option>
                                                                                    <option value="171">V??n Canh</option>
                                                                                    <option value="170">Tuy Ph?????c</option>
                                                                                    <option value="169">T??y S??n</option>
                                                                                    <option value="168">Quy Nh??n</option>
                                                                                    <option value="167">Ho??i Nh??n</option>
                                                                                    <option value="166">Ph?? C??t</option>
                                                                                    <option value="165">Ph?? M???</option>
                                                                                    <option value="164">Ho??i ??n</option>
                                                                                    <option value="163">An Nh??n</option>
                                                                                    <option value="162">An L??o</option>
                                                                                    <option value="161">Th???nh Ph??</option>
                                                                                    <option value="160">M??? C??y Nam</option>
                                                                                    <option value="159">M??? C??y B???c</option>
                                                                                    <option value="158">Gi???ng Tr??m</option>
                                                                                    <option value="157">Ch??? L??ch</option>
                                                                                    <option value="156">Ch??u Th??nh</option>
                                                                                    <option value="155">B??nh ?????i</option>
                                                                                    <option value="154">B???n Tre</option>
                                                                                    <option value="153">Ba Tri</option>
                                                                                    <option value="152">Y??n Phong</option>
                                                                                    <option value="151">T??? S??n</option>
                                                                                    <option value="150">Ti??n Du</option>
                                                                                    <option value="149">L????ng T??i</option>
                                                                                    <option value="148">Thu???n Th??nh</option>
                                                                                    <option value="147">Qu??? V??</option>
                                                                                    <option value="146">Gia B??nh</option>
                                                                                    <option value="145">B???c Ninh</option>
                                                                                    <option value="144">V??nh L???i</option>
                                                                                    <option value="143">Ph?????c Long</option>
                                                                                    <option value="142">H???ng D??n</option>
                                                                                    <option value="141">H??a B??nh</option>
                                                                                    <option value="140">Gi?? Rai</option>
                                                                                    <option value="139">????ng H???i</option>
                                                                                    <option value="138">B???c Li??u</option>
                                                                                    <option value="137">P??c N???m</option>
                                                                                    <option value="136">Ng??n S??n</option>
                                                                                    <option value="135">Na R??</option>
                                                                                    <option value="134">Ch??? M???i</option>
                                                                                    <option value="133">Ch??? ?????n</option>
                                                                                    <option value="132">B???ch Th??ng</option>
                                                                                    <option value="131">B???c K???n</option>
                                                                                    <option value="130">Ba B???</option>
                                                                                    <option value="129">Y??n Th???</option>
                                                                                    <option value="128">Y??n D??ng</option>
                                                                                    <option value="127">Vi???t Y??n</option>
                                                                                    <option value="126">T??n Y??n</option>
                                                                                    <option value="125">S??n ?????ng</option>
                                                                                    <option value="124">L???c Ng???n</option>
                                                                                    <option value="123">L???c Nam</option>
                                                                                    <option value="122">L???ng Giang</option>
                                                                                    <option value="121">Hi???p H??a</option>
                                                                                    <option value="120">B???c Giang</option>
                                                                                    <option value="119">Tri T??n</option>
                                                                                    <option value="118">T???nh Bi??n</option>
                                                                                    <option value="117">Tho???i S??n</option>
                                                                                    <option value="116">T??n Ch??u</option>
                                                                                    <option value="115">Ph?? T??n</option>
                                                                                    <option value="114">Long Xuy??n</option>
                                                                                    <option value="113">Ch??? M???i</option>
                                                                                    <option value="112">Ch??u Th??nh</option>
                                                                                    <option value="111">Ch??u Ph??</option>
                                                                                    <option value="110">Ch??u ?????c</option>
                                                                                    <option value="109">An Ph??</option>
                                                                                    <option value="108">Xuy??n M???c</option>
                                                                                    <option value="107">V??ng T??u</option>
                                                                                    <option value="106">T??n Th??nh</option>
                                                                                    <option value="105">Long ??i???n</option>
                                                                                    <option value="104">?????t ?????</option>
                                                                                    <option value="103">C??n ?????o</option>
                                                                                    <option value="102">Ch??u ?????c</option>
                                                                                    <option value="101">B?? R???a</option>
                                                                                    <option value="100">V??nh H??ng</option>
                                                                                    <option value="99">Th??? Th???a</option>
                                                                                    <option value="98">Th???nh H??a</option>
                                                                                    <option value="97">T??n Tr???</option>
                                                                                    <option value="96">T??n Th???nh</option>
                                                                                    <option value="95">T??n H??ng</option>
                                                                                    <option value="94">T??n An</option>
                                                                                    <option value="93">M???c H??a</option>
                                                                                    <option value="92">Ki???n T?????ng</option>
                                                                                    <option value="91">?????c Hu???</option>
                                                                                    <option value="90">?????c H??a</option>
                                                                                    <option value="89">Ch??u Th??nh</option>
                                                                                    <option value="88">C???n Giu???c</option>
                                                                                    <option value="87">C???n ???????c</option>
                                                                                    <option value="86">B???n L???c</option>
                                                                                    <option value="85">V??nh B???o</option>
                                                                                    <option value="84">Ti??n L??ng</option>
                                                                                    <option value="83">Th???y Nguy??n</option>
                                                                                    <option value="82">Ng?? Quy???n</option>
                                                                                    <option value="81">L?? Ch??n</option>
                                                                                    <option value="80">Ki???n Th???y</option>
                                                                                    <option value="79">Ki???n An</option>
                                                                                    <option value="78">H???ng B??ng</option>
                                                                                    <option value="77">H???i An</option>
                                                                                    <option value="76">D????ng Kinh</option>
                                                                                    <option value="75">????? S??n</option>
                                                                                    <option value="74">C??t H???i</option>
                                                                                    <option value="73">B???ch Long V??</option>
                                                                                    <option value="72">An L??o</option>
                                                                                    <option value="71">An D????ng</option>
                                                                                    <option value="70">Thanh Kh??</option>
                                                                                    <option value="69">S??n Tr??</option>
                                                                                    <option value="68">Ng?? H??nh S??n</option>
                                                                                    <option value="67">Li??n Chi???u</option>
                                                                                    <option value="66">Ho??ng Sa</option>
                                                                                    <option value="65">H??a Vang</option>
                                                                                    <option value="64">H???i Ch??u</option>
                                                                                    <option value="63">C???m L???</option>
                                                                                    <option value="62">Thu???n An</option>
                                                                                    <option value="61">Th??? D???u M???t</option>
                                                                                    <option value="60">Ph?? Gi??o</option>
                                                                                    <option value="59">D?? An</option>
                                                                                    <option value="58">T??n Uy??n</option>
                                                                                    <option value="57">D???u Ti???ng</option>
                                                                                    <option value="56">B???n C??t</option>
                                                                                    <option value="55">B??u B??ng</option>
                                                                                    <option value="54">???ng H??a</option>
                                                                                    <option value="53">Th?????ng T??n</option>
                                                                                    <option value="52">Thanh Xu??n</option>
                                                                                    <option value="51">Thanh Tr??</option>
                                                                                    <option value="50">Thanh Oai</option>
                                                                                    <option value="49">Th???ch Th???t</option>
                                                                                    <option value="48">T??y H???</option>
                                                                                    <option value="47">S??n T??y</option>
                                                                                    <option value="46">S??c S??n</option>
                                                                                    <option value="45">Qu???c Oai</option>
                                                                                    <option value="44">Ph??c Th???</option>
                                                                                    <option value="43">Ph?? Xuy??n</option>
                                                                                    <option value="42">Nam T??? Li??m</option>
                                                                                    <option value="41">M??? ?????c</option>
                                                                                    <option value="40">M?? Linh</option>
                                                                                    <option value="39">Long Bi??n</option>
                                                                                    <option value="38">Ho??ng Mai</option>
                                                                                    <option value="37">Ho??n Ki???m</option>
                                                                                    <option value="36">Ho??i ?????c</option>
                                                                                    <option value="35">Hai B?? Tr??ng</option>
                                                                                    <option value="34">H?? ????ng</option>
                                                                                    <option value="33">Gia L??m</option>
                                                                                    <option value="32">?????ng ??a</option>
                                                                                    <option value="31">????ng Anh</option>
                                                                                    <option value="30">??an Ph?????ng</option>
                                                                                    <option value="29">Ch????ng M???</option>
                                                                                    <option value="28">C???u Gi???y</option>
                                                                                    <option value="27">B???c T??? Li??m</option>
                                                                                    <option value="26">Ba V??</option>
                                                                                    <option value="25">Ba ????nh</option>
                                                                                    <option value="24">T??n Ph??</option>
                                                                                    <option value="23">T??n B??nh</option>
                                                                                    <option value="22">Th??? ?????c</option>
                                                                                    <option value="21">Qu???n 9</option>
                                                                                    <option value="20">Qu???n 8</option>
                                                                                    <option value="19">Qu???n 7</option>
                                                                                    <option value="18">Qu???n 6</option>
                                                                                    <option value="17">Qu???n 5</option>
                                                                                    <option value="16">Qu???n 4</option>
                                                                                    <option value="15">Qu???n 3</option>
                                                                                    <option value="14">Qu???n 2</option>
                                                                                    <option value="13">Qu???n 12</option>
                                                                                    <option value="12">Qu???n 11</option>
                                                                                    <option value="11">Qu???n 10</option>
                                                                                    <option value="10">Qu???n 1</option>
                                                                                    <option value="9">Ph?? Nhu???n</option>
                                                                                    <option value="8">Nh?? B??</option>
                                                                                    <option value="7">H??c M??n</option>
                                                                                    <option value="6">G?? V???p</option>
                                                                                    <option value="5">C??? Chi</option>
                                                                                    <option value="4">C???n Gi???</option>
                                                                                    <option value="3">B??nh Th???nh</option>
                                                                                    <option value="2">B??nh T??n</option>
                                                                                    <option value="1">B??nh Ch??nh</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row row-user-order hidden'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'>
                                                                            <label>Ph?????ng x??
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="id_ward" id="id_ward"
                                                                                    class="form-control selectpicker order-select">
                                                                                    <option value="">Ch???n ph?????ng x??</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order hidden'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Ng??y
                                                                                nh???n
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-date">
                                                                                <input type="text" name="ngaynhan"
                                                                                    class="form-control order-calendar datepicker"
                                                                                    id="ngaynhan" readonly="readonly" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order hidden'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Gi???
                                                                                nh???n
                                                                                <span>(*)</span></label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart">
                                                                                <select name="hour"
                                                                                    class="form-control selectpicker order-select">
                                                                                    <option value="">Gi??? nh???n</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'><label>Ghi
                                                                                ch?? ????n
                                                                                h??ng</label></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart icon-cart-desc">
                                                                                <textarea name='description' placeholder="Nh???p n???i dung" class='form-control'></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End row-cart-->
                                                                    <div class='row row-user-order'>
                                                                        <div class='col-md-3 col-sm-3 hidden-xs'></div>
                                                                        <div class='col-md-9 col-sm-9 col-xs-12'>
                                                                            <div class="row-cart t-right">
                                                                                <!-- <button type="submit" id="payOnline"
                                                            class="btn btn--buy-now btn--buy-now-x2">Thanh to??n tr???c ti???p&nbsp;&nbsp;<i class="fa fa-caret-right"
                                                                aria-hidden="true"></i></button> -->
                                                                                <button type="submit" id="xacnhan1"
                                                                                    class="btn btn--buy-now btn--buy-now-x2">X??c
                                                                                    nh???n&nbsp;&nbsp;<i
                                                                                        class="fa fa-caret-right"
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
                                                        <h2 class="mg-0">TH??NG TIN GIAO H??NG</h2>
                                                    </div>
                                                    <div id="ajaxJson">
                                                    </div>
                                                </div>
                                                <div class="box-httt">
                                                    <div class="box-giaohang mt-20">
                                                        <div class="title-success-giaohang">
                                                            <h2 class="mg-0">Ph????ng th???c giao h??ng</h2>
                                                        </div>
                                                        <div class="box-ajax-giaohang">
                                                            <span id="ajax-giaohang">

                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="box-giaohang mt-20">
                                                        <div class="title-success-giaohang">
                                                            <h2 class="mg-0">Ph????ng th???c thanh to??n</h2>
                                                        </div>
                                                        <div class="box-ajax-giaohang">
                                                            <span id="ajax-thanhtoan"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ajaxLoad2">
                                                <div class="col-md-8 col-xs-12 fix-col-10 fix-col-w8">
                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                        style="background:#fff" width="100%">
                                                        <thead style="border: 1px solid #ccc;">
                                                            <tr>
                                                                <th bgcolor="#000" width="30%"
                                                                    style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    T??N S???N PH???M</th>
                                                                <th bgcolor="#000" width="15%"
                                                                    style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    H??NH ???NH</th>
                                                                <th bgcolor="#000" width="15%"
                                                                    style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    ????N GI??</th>
                                                                <th bgcolor="#000" width="15%"
                                                                    style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    S??? L?????NG</th>
                                                                <th bgcolor="#000" width="15%"
                                                                    style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    TH??NH TI???N</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody bgcolor="#fff"
                                                            style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;border: 1px solid #ccc;">
                                                            <tr>
                                                                <td align="left" width="30%"
                                                                    style="padding:3px 30px;font-size:13px;border: 1px solid #ccc;"
                                                                    valign="center"><span>B??NH HOA CARAMEL HBI - 024</span>
                                                                </td>
                                                                <td align="center" width="15%"
                                                                    style="padding:20px 9px; width:100px;border: 1px solid #ccc;"
                                                                    valign="center"><span class="v-img">
                                                                        <a class="v-img"
                                                                            href="san-pham/binh-hoa-caramel-hbi-024">
                                                                            <img src="upload/baiviet/binhhoatuoitonemaucaramel024-2266.png"
                                                                                alt="" height="100" width="100" />
                                                                        </a>
                                                                    </span><br>
                                                                </td>
                                                                <td align="center" width="15%"
                                                                    style="padding:20px 9px;font-size:16px;color:#000;border: 1px solid #ccc;"
                                                                    valign="center"><span>1.290.000 ??</span>
                                                                </td>
                                                                <td align="center" width="15%"
                                                                    style="padding:20px 9px;border: 1px solid #ccc;"
                                                                    valign="center">
                                                                    2 </td>
                                                                <td align="center" width="15%"
                                                                    style="padding:20px 9px;color:#f00;border: 1px solid #ccc;font-size:16px;color:#000;"
                                                                    valign="center">
                                                                    <span>2.580.000 ??</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="box-bg">
                                                        <div class="row row-col">
                                                            <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                                                                Tr??? gi?? h??ng h??a
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                                                                2.580.000 ?? </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                                                                Ph?? v???n chuy???n
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                                                                ??? </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                                                                <b style="font-size:14px;">Th??nh ti???n</b>
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                                                                <span style="color:#f00;font-weight:bold">2.580.000 ??</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="mt-20 t-right">
                                                    <button type="submit" id="xacnhan2"
                                                        class="btn btn--buy-now btn--buy-now-x2">Ho??n
                                                        t???t&nbsp;&nbsp;<i class="fa fa-caret-right"
                                                            aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="step4">
                                    <div class="step-content-item step-item-4">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="image-success t-center">
                                                <img src="images/success.png" alt="Ho??n t???t" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="title-success">
                                                <h3>?????T H??NG TH??NH C??NG</h3>
                                            </div>
                                            <div class="info-order mt-30">
                                                <p>M?? ????n h??ng c???a b???n l??: <b><span style="color:#737d83;font-size:20px"
                                                            id="order-code"></span></b></p>
                                                <p>Hi???n t???i ????n h??ng c???a b???n ??ang ???????c x??? l??.</p>
                                                <p>Th??ng tin chi ti???t ????n h??ng s??? ???????c g???i ?????n h???p th?? c???a b???n:<b
                                                        id="order-email"></b></p>
                                            </div>

                                            <div class="info-order mt-30">
                                                <p>M???i th???c m???c xin vui l??ng li??n h???</p>
                                                <p>Hotline:<b>07989 12 383</b></p>
                                                <p>Email:<b style="color:#ff6600">hasuflora@gmail.com</b></p>
                                            </div>

                                            <div class="info-order mt-30">
                                                <p>C???m ??n b???n ???? ?????t h??ng. ????n h??ng c???a b???n s??? ???????c x??? l?? trong th???i gian
                                                    s???m nh???t</p>
                                                <p>Ch??ng t??i s??? li??n h??? l???i v???i b???n ????? x??c nh???n y??u c???u v?? giao h??ng.</p>
                                            </div>
                                            <div class="row-cart t-right mt-10">
                                                <a href="san-pham" title="s???n ph???m"><button type="submit"
                                                        class="btn btn--buy-now btn--buy-now-x2">Ti???p t???c mua
                                                        h??ng&nbsp;&nbsp;<i class="fa fa-caret-right"
                                                            aria-hidden="true"></i></button></a>
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

                            <span>Tin t???c n???i b???t</span>

                        </div>

                        <div class="box-news mt-25">

                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="thumbnail-news tf-hover p-relative o-hidden">
                                                <a href="cach-lua-chon-hoa-tuoi-doanh-nghiep-thong-minh"
                                                    title="C??ch l???a ch???n hoa t????i doanh nghi???p th??ng minh">
                                                    <img class="w-100"
                                                        src="resize/600x400/1/upload/baiviet/hoatuoihoalang015b9189-8797.png"
                                                        alt="C??ch l???a ch???n hoa t????i doanh nghi???p th??ng minh"
                                                        onerror='this.src="images/no-image.jpg"' />
                                                </a>
                                            </div>
                                            <div class="desc-news-i mt-10">
                                                <div class="mt-5 mb-5">
                                                    <a href="cach-lua-chon-hoa-tuoi-doanh-nghiep-thong-minh"
                                                        title="C??ch l???a ch???n hoa t????i doanh nghi???p th??ng minh">
                                                        C??ch l???a ch???n hoa t????i doanh nghi???p th??ng minh </a>
                                                </div>
                                                <div><i class="fa fa-calendar"
                                                        aria-hidden="true"></i>&nbsp;&nbsp;22/04/2021 </div>
                                                <div class="mt-10">T???ng hoa cho doanh nghi???p hay ?????i t??c kh??ch
                                                    h??ng kh??ng ch??? l?? t???ng 1 m??n gi?? tr??? m?? c??n th??? hi???n s??? tinh t???, ch???n
                                                    chu c???a ng?????i t???ng. Thay v?? m???t m??n qu?? mang ?? ngh??a v???t ch???t nh?? r?????u,
                                                    tr??, tranh...
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
                                                                            title="V??? ?????p v?? ?? ngh??a theo m???u s???c c???a hoa tulip">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/vedepvaynghiatheomausaccuahoatulip-7597.jpg"
                                                                                alt="V??? ?????p v?? ?? ngh??a theo m???u s???c c???a hoa tulip"
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
                                                                                title="V??? ?????p v?? ?? ngh??a theo m???u s???c c???a hoa tulip">
                                                                                V??? ?????p v?? ?? ngh??a theo m???u s???c c???a hoa tulip
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
                                                                            title="?? ngh??a c???a hoa h???ng trong nh???ng d???p l??? ?????c bi???t">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/ynghiacuahoahongtrongnhungdipledacbiet-4017.jpg"
                                                                                alt="?? ngh??a c???a hoa h???ng trong nh???ng d???p l??? ?????c bi???t"
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
                                                                                title="?? ngh??a c???a hoa h???ng trong nh???ng d???p l??? ?????c bi???t">
                                                                                ?? ngh??a c???a hoa h???ng trong nh???ng d???p l??? ?????c
                                                                                bi???t </a>
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
                                                                            title="?? ngh??a ?????c bi???t c???a hoa ?????ng ti???n ng??y t???t m?? ??t ai bi???t">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/ynghiadacbietcuahoadongtienngaytetmaitaibiet-14.jpg"
                                                                                alt="?? ngh??a ?????c bi???t c???a hoa ?????ng ti???n ng??y t???t m?? ??t ai bi???t"
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
                                                                                title="?? ngh??a ?????c bi???t c???a hoa ?????ng ti???n ng??y t???t m?? ??t ai bi???t">
                                                                                ?? ngh??a ?????c bi???t c???a hoa ?????ng ti???n ng??y t???t
                                                                                m?? ??t ai... </a>
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
                                                                            title="C??c c??ch ch??m lan h??? ??i???p ra hoa r???c r???">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/caccachchamlanhodieprahoarucro-957.jpg"
                                                                                alt="C??c c??ch ch??m lan h??? ??i???p ra hoa r???c r???"
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
                                                                                title="C??c c??ch ch??m lan h??? ??i???p ra hoa r???c r???">
                                                                                C??c c??ch ch??m lan h??? ??i???p ra hoa r???c r??? </a>
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
                                                                            title="NH???NG ??I???U TH?? V??? V??? HOA LY C?? TH??? B???N CH??A BI???T">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/ynghiacuahoaly-277.png"
                                                                                alt="NH???NG ??I???U TH?? V??? V??? HOA LY C?? TH??? B???N CH??A BI???T"
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
                                                                                title="NH???NG ??I???U TH?? V??? V??? HOA LY C?? TH??? B???N CH??A BI???T">
                                                                                NH???NG ??I???U TH?? V??? V??? HOA LY C?? TH??? B???N CH??A
                                                                                BI???T </a>
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
                                                                            title="C??ch tr???ng v?? ch??m s??c hoa lan h??? ??i???p">
                                                                            <img class="col-100 w-100i"
                                                                                src="resize/250x180/1/upload/baiviet/cachtrongvachamsochoalanhodiep-9712.png"
                                                                                alt="C??ch tr???ng v?? ch??m s??c hoa lan h??? ??i???p"
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
                                                                                title="C??ch tr???ng v?? ch??m s??c hoa lan h??? ??i???p">
                                                                                C??ch tr???ng v?? ch??m s??c hoa lan h??? ??i???p </a>
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

                            <span>video n???i b???t</span>

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
                                            title="M???O C???M HOA 10 NG??Y V???N T????I V?? N?????C TRONG B??NH KH??NG TH???I"
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
                                            title="H?????ng d???n c???m hoa cho ng?????i m???i b???t ?????u #1 Hoa ly"
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
                                            title="Nh???ng m???u hoa best sellers" class="popup-video">

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

                                    <h1><span style="font-size:22px;">Hasu thay b???n trao l???i y??u th????ng !</span></h1>

                                    <p><span style="line-height:1.5;"><span
                                                style="font-family:arial,helvetica,sans-serif;"><span
                                                    style="font-size:16px;"><strong>Hoa t????i Hasu</strong> ???????c...
                                </div>

                            </div>

                        </div>
                        <div class="col-md-3 col-sm-3 col-25 col-xs-12 ">

                            <div class="box-mg">

                                <div class="title-footer mt-20">

                                    <span>th??ng tin li??n h???</span>

                                </div>
                                <div class="desc-footer pd-100 mt-20">

                                    <h1><span style="font-size:22px;"><span style="color:#000000;"><strong>HASU
                                                    FLORA</strong></span></span>
                                    </h1>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span
                                                    style="color:#000000;"><strong><span
                                                            style="font-family:arial,helvetica,sans-serif;">?????a
                                                            ch???:????</span><span
                                                            style="font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; white-space: pre-wrap;">67
                                                            Th??? Khoa Hu??n, P. B???n Th??nh, Q1, TP Ho???? Chi??
                                                            Minh</span></strong>
                                                </span>
                                            </span>
                                        </span>
                                    </p>

                                    <p><span style="font-size:16px;"><span style="line-height:1.5;"><span
                                                    style="color:#000000;"><strong><span
                                                            style="font-family:arial,helvetica,sans-serif;">Phone:??</span></strong>
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
                                                            style="font-family:arial,helvetica,sans-serif;">Website:??hasuflora.com</span></strong>
                                                </span>
                                            </span>
                                        </span>
                                    </p>

                                    <div id="gtx-trans" style="position: absolute; left: 92px; top: 135.875px;">
                                        <div class="gtx-trans-icon">??</div>
                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3 col-20 col-xs-12">

                            <div class="box-mg">

                                <div class="title-footer mt-20">

                                    <span>D???ch v???</span>

                                </div>

                                <div class="desc-footer mt-20">

                                    <ul>


                                        <li>

                                            <a href="chinh-sach-doi-tra-hoan-tien"
                                                title="Ch??nh s??ch ?????i tr??? &amp; Ho??n ti???n">

                                                Ch??nh s??ch ?????i tr??? &amp; Ho??n ti???n
                                            </a>

                                        </li>


                                        <li>

                                            <a href="chinh-sach-giao-hang" title="Ch??nh s??ch giao h??ng">

                                                Ch??nh s??ch giao h??ng
                                            </a>

                                        </li>


                                        <li>

                                            <a href="hinh-thuc-thanh-toan" title="H??nh th???c thanh to??n">

                                                H??nh th???c thanh to??n
                                            </a>

                                        </li>


                                        <li>

                                            <a href="dien-hoa-sai-gon" title="??i???n hoa S??i G??n">

                                                ??i???n hoa S??i G??n
                                            </a>

                                        </li>


                                        <li>

                                            <a href="thiet-ke-va-trang-tri-su-kien"
                                                title="Thi???t k??? v?? trang tr?? hoa s??? ki???n">

                                                Thi???t k??? v?? trang tr?? hoa s??? ki???n
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

                                                                    <span>K???t n???i v???i ch??ng t??i</span>

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

                        <p class="copy-text cl-white">??ang online: | T???ng truy c???p:
                        </p>

                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection
