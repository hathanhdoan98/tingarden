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
                        @foreach ($carts as $cart)
                        <tr current-id={{ $cart['id'] }}>
                            <td align="left" width="30%" style="padding:3px 30px;font-size:13px;border: 1px solid #ccc;" valign="center"><span>{{ $cart['product_name'] }}</span>
                            </td>
                            <td align="center" width="15%" style="padding:20px 9px; width:100px;border: 1px solid #ccc;" valign="center"><span class="v-img">
                                    <a class="v-img" href="{{ $cart['alias'] }}">
                                        <img src="{{ $cart['image'] }}" alt="" height="100" width="100">
                                    </a>
                                </span><br>
                            </td>
                            <td align="center" width="15%" style="padding:20px 9px;font-size:16px;color:#000;border: 1px solid #ccc;" valign="center"><span>{{ number_format($cart['price']) }} đ</span>
                            </td>
                            <td align="center" width="15%" style="padding:20px 9px;border: 1px solid #ccc;" valign="center">
                                <span class="quantity">{{ $cart['quantity'] }}</span></td>
                            <td align="center" width="15%" style="padding:20px 9px;color:#f00;border: 1px solid #ccc;font-size:16px;color:#000;" valign="center">
                                <span class="sub-price">{{ number_format($cart['sub_price']) }} đ</span>
                            </td>
                        </tr>
                        @endforeach
                        
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
                            <span class="price-temp">{{ number_format($sub_total_price)}} đ</span></div>
                        <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                            Phí vận chuyển
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                            .
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-5 pt-10 pb-10">
                            <b style="font-size:14px;">Thành tiền</b>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-7 pt-10 pb-10">
                            <span class="total-cart" style="color:#f00;font-weight:bold">{{ number_format($sub_total_price)}} đ</span>
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