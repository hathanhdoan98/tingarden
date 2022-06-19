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
                                                                                            class="js-price-new">{{ number_format($product['sale_off_price']) }} đ</span></b>
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
                                                                                            class="js-price-old">{{ number_format($product['price']) }} đ</span></b>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                    @endif
                                                                    <li class="desc-detail">
                                                                       {!! $product['description'] !!}
                                                                    </li>

                                                                    <li class="ds-flex flex-align-center flex-start" style="border:none">
                                                                        <span class="mr-10 w-label">Số lượng:</span>
                                                                        <span>
                                        <div class="wrap_qty mt-5">
                                            <span class="down">-</span>
                                                                                <input type="text" class="input-text qty" name="qty" id="qty" value="1" title="Số lượng" maxlength="6" min="1" data-action="" max="21" data-max="21">
                                                                                <span class="up" data-max="21" max="21">+</span>
                                                                    </div>
                                                                    </span>
                                                                    </li>
                                                                    <li style="border:none">
                                                                        <div class="actions mt-15">
                                                                            <a class="btn btn_site_3 btnAddToCart" data-cart-advance="no" data-price="1599000" data-id="{{ $product['id'] }}"><span>Thêm vào
                                                giỏ</span></a>
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
                                                                Nội dung chi tiết                        </a>
                                                        </li>
                                                    </ul>
                                                    {{-- <div class="tab-content pd-20" id="myTabContent">
                                                        <div class="tab-pane fade active" id="detail-tabs" role="tabpanel" aria-labelledby="detail-tab">
                                                            <div class="wrapper-toc">
                                                                <div class="content">
                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">BÓ HOA TULIP HBO - 082 TULIP TRẮNG HÀ LAN</span></span></span></strong></p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Chi tiết thiết kế:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ 20 cành <strong>HOA TULIP TRẮNG</strong> Hà Lan<br />
+ Hoa lá phụ liệu nhập khẩu khác.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hoa tulip trắng đại diện cho tình yêu và niềm đam mê và gắn với ý nghĩa về sự bình yên. Chính vì vậy, những người nhận được bó hoa này thường có tâm hồn thật đẹp, tấm lòng cao thượng và vị tha.<br />
Khi tặng hoa chúc mừng, hoa sinh nhật thì người tặng sẽ nghĩ ngay đến hoa bó. Bởi vì hoa bó dễ mang đi, và hơn nữa hoa bó từ xưa đến nay luôn mang ý nghĩa chúc mừng, mừng bình an, mừng tài lộc.<br />
Hasu nghiên cứu và sáng tạo ra những mẫu hoa bó nghệ thuật, thay đổi theo xu hướng mới để khách hàng có nhiều lựa chọn hơn.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Hoa tươi mỗi ngày:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mỗi ngày, Hasu nhập khẩu về nhiều loại<strong> HOA TƯƠI</strong> khác nhau. Tùy theo mùa hoa mà loại hoa có thể thay đổi. <br />
Vậy nên khách hàng<strong> MUA HOA</strong> hãy yên tâm rằng mình sẽ luôn <strong>MUA HOA ĐẸP</strong> nhất nhé.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Quan điểm khác biệt:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ Không chỉ đơn giản là một bó hoa, Hasu luôn gửi cả tấm lòng chân thành phục vụ, những thông điệp yêu thương vào từng nụ hoa.<br />
+ Mỗi bó hoa, mỗi sản phẩm được tạo ra bởi tấm lòng florist nhà Hasu, mang trong mình sứ mệnh giúp khách hàng trao những yêu thương tới tận tay người nhận.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Sáng tạo:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Các mẫu hoa tại Hasu luôn được các florist sáng tạo không ngừng, khác biệt, độc đáo không tiệm hoa nào có, cập nhật xu hướng thường xuyên, giúp khách hàng không bị nhàm chán.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Dịch vụ chu đáo và nhiệt tình:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hasu luôn tư vấn tận tình, thấu hiểu tâm tư nhu cầu của khách hàng nên luôn trao đúng mẫu hoa khách hàng mong muốn.<br />
Hasu Flora luôn tự tin là SHOP HOA tận tâm nhất Việt nam, ở đây chúng tôi BÁN HOA bằng cả tấm lòng dù khách hàng mua HOA BÓ, HOA LẴNG, HOA BÌNH, HOA KHAI TRƯƠNG, ...hay HOA KHÔ cũng đều vô cùng hài lòng.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Hình ảnh thiết kế hoa chỉ mang tính chất tham khảo. Tùy vào mùa hoa mà một số loại hoa lá trong thiết kế sẽ không có hoặc chất lượng không đảm bảo để thực hiện đơn hàng. Chúng tôi sẽ dùng các loại hoa lá khác thay thế. Hình dáng và màu sắc của hoa thay thế sẽ không làm thay đổi thiết kế hoa, hay tính thẩm mĩ của sản phẩm. Quý khách vui lòng liên hệ với chúng tôi qua số hotline trước khi đặt hàng online để được tư vấn kĩ hơn về các loại hoa hiện có trong mùa.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Cam kết của Hasu:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ Chúng tôi luôn đảm bảo 100% các hoa luôn tươi và mới.<br />
+ Làm đúng mẫu, giao đúng hẹn, thu đúng giá ship, không phát sinh thêm chi phí bất thường.<br />
+ Luôn có mức chiết khấu hấp dẫn cho quý khách hàng, đối tác là công ty đặt đơn với số lượng lớn hoặc đặt hàng thường xuyên hàng ngày.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Vậy nên, khi các bạn CẦN HOA TƯƠI hãy nhớ ngay đến Hasu để ĐẶT HOA nhé ^^</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Hình thức thanh toán:</span></span></span></strong></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">+ Quý Khách có thể thanh toán online bằng hình thức chuyển khoản qua Internetbanking vào tài khoản của Hasu theo cú pháp: Tên khách hàng + SĐT đặt hàng + Mã số sản phẩm<br />
+ Nếu Quý khách vừa là người đặt cũng là người nhận hoa, Quý khách có thể lựa chọn hình thức thành toán “Thu tiền khi giao hàng”, Quý khách sẽ thanh toán tiền đơn hàng khi nhận được sản phẩm (áp dụng đối với đơn hàng có giá trị tổng hóa đơn dưới 1.000.000đ).</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">- Nếu Quý khách cần đặt các mẫu hoa đặc biệt khác, xin vui lòng liên hệ trực tiếp qua hotline 07989 12 383 hoặc inbox trực tiếp tại Fanpage: Hasu Flora để nhân viên shop tư vấn cho Quý khách được tốt hơn.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hasu xin chân thành cảm ơn sự ủng hộ của Quý Khách.</span></span>
                                                                            </span>
                                                                    </p>

                                                                    <h3><strong><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#FF0000;"><span style="font-size:18px;">HASU FLORA</span></span><br />
Address: 67 Thu Khoa Huan, Ben Thanh Ward, District 1, Ho Chi Minh City<br />
Phone/zalo/viber : 07989 12 383<br />
Email: hasufloral@gmail.com<br />
Website: hasuflora.com</span></span></span></strong></h3>

                                                                    <p><a href="https://hasuflora.com/"><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tag : hoa tươi giá rẻ, hoa tươi quận 1, hoa tươi hcm, hoa tươi hasu, shop hoa giá rẻ, shop hoa đẹp, shop hoa quận 1, Flower shop, Hoa tươi nhập khẩu, Hoa sự kiện</span></span></span></a></p>

                                                                    <p><span style="line-height:1.5;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">#Hasu #floral #hoa #flower #bloom #dep #hoadep #hoathietke #hoatuoi #hoanhapkhau #hoatinhyeu #hoakhaitruong #hoachucmung #hoasinhnhat #dienhoa #hoasaigon #sai #gon #hoacuoi #flowerwedding #hoaquan1 #hoaquan3 #tiemhoaganday #tiemhoatuoidep </span></span>
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
                                    <div class="title p-relative"><a href="tat-ca" title="Sản phẩm liên quan" class="p-relative">
                                            Sản phẩm liên quan                    </a></div>
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
                                                                <div class="price-new">{{ $product['discount'] ? number_format($product['sale_off_price']) :  number_format($product['price'])}} đ</div>
                                
                                                                @if($product['discount'])
                                                                    <div class="price-old">{{ number_format($product['price'])}} đ</div>
                                                                @endif
                                                            </div>
                                                            <div class="btn-submit-cart"><a class="js-btnAddToCart ic-cart-all cs-pointer"
                                                                    data-id="{{ $product['id'] }}" data-price="1599000" data-qty="1" data-size="" data-color=""
                                                                    data-material="" title="Thêm vào giỏ">Thêm vào giỏ</a></div>
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