<div class="step-content-item step-item-2">
    <div id="info">
        <div id="sanpham">
            <form id="form-checkout">
            <div class='row'>
                <div class='col-md-4 col-xs-12 fix-col-10 pull-right'>
                    <div class="title-thongtin title-cart-default pt-20 pb-20">
                        <h2 class="pd-thongtin mg-0">THÔNG TIN ĐƠN HÀNG</h2>
                    </div>
                    <div class='box-thanhtoan' id="ajaxLoad1">
                        <table border="0" cellpadding="5px" cellspacing="1px"
                            class='table-order table-order-thanhtoan' width="100%">
                            <tbody>
                                @foreach ($carts as $cart)
                                <tr current-id={{ $cart['id'] }} bgcolor="#FFFFFF">
                                    <td width="100%"
                                        style="border-bottom:1px solid #ccc">
                                        <div class='row'>
                                            <div class='col-xs-3'>
                                                <div class="p-img">
                                                    <a class="v-img"
                                                        href="{{ $cart['alias'] }}">
                                                        <img src="{{ $cart['image'] }}"
                                                            alt="" height="70"
                                                            width="100" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class='col-xs-9'>
                                                <p
                                                    style="color:#000;font-size:14px;;margin-bottom:5px">
                                                    <a style="font-size:13px;"
                                                        href="{{ $cart['alias'] }}">
                                                        <span>{{ $cart['product_name'] }}</span>
                                                    </a>
                                                </p>
                                                <p 
                                                    style="color:#000;font-size:14px;;margin-bottom:5px">
                                                    Số lượng: <span class="quantity">{{ $cart['quantity'] }}</span>
                                                </p>
                                                <p class=""
                                                    style="color:#000;font-size:14px;;margin-bottom:5px">
                                                    Giá: <span class="sub-price">{{ number_format($cart['sub_price']) }}</span> đ </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="tonggia-order">
                                    <td colspan="5" >
                                        Trị giá hàng hóa : <span class="price-temp">{{ number_format($sub_total_price)}} đ</span> </td>
                                </tr>
                                <tr class="tonggia-order">
                                    <td colspan="5">
                                        Phí vận chuyển :  </td>
                                </tr>
                                <tr class="tonggia-order">
                                    <td colspan="5">
                                        <span
                                            style="font-weight: bold;font-size:14px;">Thành
                                            tiền:</span>
                                        <span class="total-cart"
                                            style="color:#f00;font-weight:bold;font-size:15px">{{ number_format($sub_total_price)}} đ</span>
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
                        <b style="font-size:16px;font-weight:bold">Phương thức giao
                            hàng</b><br>
                        <div class="rd-giaohang">
                            <label class="radio-item">
                                <input type="radio" name="giaohang" checked value="1" />
                                <span class="rd-text">Giao hàng tiêu chuẩn</span>
                            </label>
                        </div>
                        <div class="rd-giaohang">
                            <label class="radio-item">
                                <input type="radio" name="giaohang" value="2" />
                                <span class="rd-text">Giao hàng nhanh</span>
                            </label>
                        </div>
                    </div>
                    <div class="box-paypal mt-5">
                        <b style="font-size:16px;font-weight:bold">Phương thức thanh
                            toán</b><br>
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
                                    &nbsp;&nbsp;Thẻ ATM nội địa (Internet Banking)
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
                                    &nbsp;&nbsp;Chuyển khoản (ATM, tại ngân hàng)
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
                                    &nbsp;&nbsp;Thẻ tín dụng ghi nợ </span>
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
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Họ
                                            và tên
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart icon-cart-name">
                                            <input type="hidden" name="id_user"
                                                value="" />
                                            <input type="text" required="required"
                                                id="ten" name="fullname" value=""
                                                class="textbox-cart input-cart form-control"
                                                placeholder="Họ và tên">
                                        </div>
                                    </div>
                                </div>
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Điện
                                            thoại
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart icon-cart-tele ds-mobile"
                                            style="display:flex;align-items:center;justify-content:space-between">
                                            <input type="text" id="dienthoai"
                                                name="phone" value=""
                                                class="textbox-cart input-cart form-control w-40 w-100i"
                                                placeholder="Số điện thoại">
                                            <!-- <p class='title-giaohang'>(Nhân viên giao nhận sẽ liên hệ SĐT này)</p> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End row-cart-->
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'>
                                        <label>Email</label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart icon-cart-email">
                                            <input type="email" id="email" name="email"
                                                value=""
                                                class="textbox-cart input-cart form-control"
                                                placeholder="Email">
                                                <small class="text-danger">Hệ thống sẽ gửi thông tin đơn hàng vào email này</small>    
                                        </div>
                                    </div>
                                </div>
                                <!-- End row-cart-->
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Địa
                                            chỉ giao hàng
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart icon-cart-add">
                                            <input name="address" required="required"
                                                id="address" type="text" value=""
                                                class="textbox-cart input-cart form-control"
                                                placeholder="Số nhà, Phường, Quận, Thành Phố...">
                                        </div>
                                    </div>
                                </div>
                                <!-- End row-cart-->
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Tỉnh
                                            thành
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart">
                                            <select name="id_city" id="id_city"
                                                class="form-control selectpicker order-select">
                                                <option value="">Chọn tỉnh thành
                                                </option>
                                                @foreach ($provinces as $province)
                                                <option value="{{ $province['province_code'] }}">{{ $province['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End row-cart-->
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Quận
                                            huyện
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart">
                                            <select name="id_dist" id="id_dist"
                                                class="form-control selectpicker order-select">
                                                <option value="">Chọn quận huyện
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'>
                                        <label>Phường xã
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart">
                                            <select name="id_ward" id="id_ward"
                                                class="form-control selectpicker order-select">
                                                <option value="">Chọn phường xã</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End row-cart-->
                                <div class='row row-user-order hidden'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Ngày
                                            nhận
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
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Giờ
                                            nhận
                                            <span>(*)</span></label></div>
                                    <div class='col-md-9 col-sm-9 col-xs-12'>
                                        <div class="row-cart">
                                            <select name="hour"
                                                class="form-control selectpicker order-select">
                                                <option value="">Giờ nhận</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End row-cart-->
                                <div class='row row-user-order'>
                                    <div class='col-md-3 col-sm-3 hidden-xs'><label>Ghi
                                            chú đơn
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
                                            <button type="submit" id="xacnhan1"
                                                class="btn btn--buy-now btn--buy-now-x2">Xác
                                                nhận&nbsp;&nbsp;<i
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
            </form>
        </div>
    </div>
</div>