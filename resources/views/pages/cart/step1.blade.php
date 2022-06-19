<div class="step-content-item step-item-1">
    <div class="content-cart mt-20">
        <div id="ajaxLoadCart">
            <table class="table-customize" border="0" cellpadding="0" cellspacing="0" style="background:#fff"
                width="100%">
                <thead style="border: 1px solid #ccc;">
                    <tr>
                        <th bgcolor="#000" width="30%"
                            style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                            TÊN SẢN PHẨM</th>
                        <th bgcolor="#000" width="15%"
                            style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                            HÌNH ẢNH</th>
                        <th bgcolor="#000" width="15%"
                            style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                            ĐƠN GIÁ</th>
                        <th bgcolor="#000" width="15%"
                            style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                            SỐ LƯỢNG</th>
                        <th bgcolor="#000" width="15%"
                            style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                            THÀNH TIỀN</th>
                        <!-- <th align="right" bgcolor="#c33444" style="width:100px;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm</th> -->
                        <th bgcolor="#000" width="15%"
                            style="text-align:center!important;border: 1px solid #ccc;padding:10px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                            XÓA ĐƠN</th>
                    </tr>
                </thead>
                <tbody bgcolor="#fff"
                    style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;border: 1px solid #ccc;">
                    @foreach ($carts as $cart)
                        <tr>
                            <td data-title="" align="left" width="30%"
                                style="padding:3px 30px;font-size:14px;border: 1px solid #ccc;" valign="center">
                                <a href="{{ $cart['alias'] }}"><span>{{ $cart['product_name'] }}</span></a>

                            </td>
                            <td align="center" width="15%" style="padding:20px 9px; width:100px;border: 1px solid #ccc;"
                                valign="center"><span class="v-img">
                                    <img src="{{ $cart['image'] }}" alt="{{ $cart['product_name'] }}" height="100"
                                        width="100">
                                </span><br>
                            </td>
                            <td align="center" width="15%"
                                style="padding:20px 9px;font-size:16px;color:#000;border: 1px solid #ccc;"
                                valign="center"><span>{{ number_format($cart['price']) }} đ</span>
                            </td>
                            <td align="center" width="15%" style="padding:20px 9px;border: 1px solid #ccc;"
                                valign="center">
                                <div class="ds-flex flex-align-center flex-center">
                                    <button class="btn-minus btn-default">-</button>
                                    <input
                                        style="height: 35px;text-align: center;width: 30px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;border-left:none;border-right:none"
                                        current-id="{{ $cart['id'] }}" data-price="{{ $cart['price'] }}"
                                        type="number" name="quantity" min="1" max="999"
                                        class="update-sl txt-input-number" value="{{ $cart['quantity'] }}">
                                    <button class="btn-plus btn-default">+</button>
                                </div>
                            </td>
                            <td align="center" width="15%"
                                style="padding:20px 9px;color:#f00;border: 1px solid #ccc;font-size:16px;color:#000;"
                                valign="center">
                                <span class="sub-price">
                                    {{ number_format($cart['price'] * $cart['quantity']) }} đ
                                </span>
                            </td>
                            <!-- <td align="right" style="padding:20px 9px;color:#f00" valign="center"><span class="price-temp">2.580.000 đ</span></td> -->
                            <td align="center" width="15%"
                                style="width:100px;padding:20px 9px;font-size:1.5em;color:#f00;border: 1px solid #ccc;"
                                valign="center"><span current-id="{{ $cart['id'] }}" class="remove-cart"><i
                                        class="fa fa-trash" aria-hidden="true"></i></span></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px">
                    <tr>
                        <td align="left" colspan="4" style="padding:7px 9px">
                            <strong><big></big>
                            </strong>
                        </td>
                        <td align="left" style="padding:0px 9px;font-size:14px;">Trị giá
                            hàng hóa</td>
                        <td align="right" style="padding:5px 9px;font-size:14px;color:#000"><span
                                class="price-temp">{{ number_format($sub_total_price ?? 0) }} đ</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" colspan="4" style="padding:7px 9px">
                            <strong><big></big>
                            </strong>
                        </td>
                        <td align="left" style="padding:0px 9px;font-size:14px;">Phí vận
                            chuyển</td>
                        <td align="right" style="padding:5px 9px;color:#000;font-size:14px;">
                            <span></span>
                        </td>
                    </tr>
                    <tr bgcolor="#fff">
                        <td align="left" colspan="4" style="padding:7px 9px">
                            <strong><big></big>
                            </strong>
                        </td>
                        <td align="left" style="padding:7px 9px;font-size:14px;">
                            <strong><big>Thành
                                    tiền</big> </strong>
                        </td>
                        <td align="right" style="padding:7px 9px;font-size:14px;color:#ea3223">
                            <strong><big><span class="total-cart">{{ number_format($sub_total_price ?? 0) }} đ</span>
                                </big> </strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="button-block ds-mobile mt-10">
            <a class="step-footer-previous-link" href="tat-ca" style="color: #338dbc;">
                <button type="submit" class="btn btn--buy-now btn--buy-now-x2 w-100i">Tiếp tục mua
                    hàng&nbsp;&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
            </a>
            <button class="w-100i"
                style="background: var(--html-bg-website)!important;text-transform:uppercase;font-weight:bold;border:none;font-size:16px;text-transform:uppercase;display:inline-block;color:#fff;padding:10px;"
                id="giohang" title="thanh toán"><i style="color: blue; display:none" class="fa fa-spin fa-spinner"></i> Giao hàng &amp; thanh toán</button>
        </div>
    </div>
</div>
