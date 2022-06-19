@php
$categories = $categories ?? [];
$subCategories1 = array_slice($categories, 0, 3);
$subCategories2 = array_slice($categories, 3);

$carts = \request()->session()->get('carts', []);
$totalCarts = array_sum($carts);
@endphp
<section class="section-head bg-white clearfix">

    <div class="container">

        <div class="row">

            <div class="ds-flex flex-align-center flex-space ds-mobile pt-10 pb-10 clearfix">

                <div class="col-md-2 col-sm-2 col-15 col-xs-12">

                    <div class="logo-header t-center">

                        <a href="" title="home">

                            <img src="resize/155x105/1/upload/hinhanh/logo-hasu-501.png" alt=""
                                onerror='this.src="images/no-image.jpg"' />
                        </a>

                    </div>

                </div>

                <div class="col md-12 col-sm-12 col-65 col-xs-12 none-mobile">
                    <div
                        class="box-search-header menu-sticky-mobile ds-flex flex-align-center flex-center mb-15 mg-0i mt-10i">
                        <div class="thumb-banner">
                            <a href="" title="">
                                <img src="upload/hinhanh/hasu-thay-loi-3139.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col md-12 col-sm-12 col-20 col-xs-12 none-mobile">
                    <div class="box-cart ds-flex flex-align-center flex-end">
                        <div class="box-flex">
                            <div class="cart-header ds-flex flex-align-center flex-space">
                                <div class="box-lang ds-flex flex-align-center cs-pointer"
                                    onclick="window.location.href='gio-hang.html'">
                                    <div class="thumb-cart p-relative">
                                        <img src="images/cart.png" width="25" alt="cart" />
                                        <!-- <span id="view-header">0</span> -->
                                    </div>
                                    <div class="desc-cart-header ml-5">
                                        <span>Giỏ hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="header-phone mt-10 ds-flex flex-align-center">
                                <div class="thumb-call">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="desc-call ml-10">
                                    <div class="phone">{{ $settings['phone']['value'] ?? '' }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<nav class="cssMenu menu-sticky clearfix" itemscope itemtype="http://schema.org/SiteNavigationElement">

    <div class="container">

        <div class="row">
            <div class="ds-flex flex-space flex-align-center pt-5i pb-5i">
                <div class="col-md-9 col-sm-9 col-90 col-20i col-xs-12">

                    <div class="wrap-menu">

                        <div class="hidden-lg hidden-md ds-mobile">
                            <div class="title-rpmenu">
                                <span></span>
                            </div>
                            <div id="responsive-menu">
                                <div class="thanh_left pl-10">
                                    <a href="" title="home">
                                        MENU
                                    </a>
                                    <span></span>
                                </div>
                                <nav class="content" itemscope
                                    itemtype="http://schema.org/SiteNavigationElement">
                                    <ul class="clearfix">
                                        <li class="p-relative">
                                            <div class="lang-top lang-mobile ds-flex flex-center">
                                                <a href="lang/vi" class="active" title="Tiếng việt">VI</a>
                                                <a href="lang/en" class="" title="Tiếng anh">EN</a>
                                            </div>
                                        </li>
                                        <li class="p-relative">
                                            <a itemprop="url" href="all-product" title="Tất cả" class="">
                                                <span itemprop="name">Xem tất cả</span>
                                            </a>
                                        </li>
                                        @foreach ($categories as $category)
                                            <li class="p-relative">
                                                <a itemprop="url" href="{{ $category['alias']['alias'] ?? '' }}"
                                                    title="{{ $category['name'] ?? '' }}" class="">
                                                    <span itemprop="name">{{ $category['name'] ?? '' }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                        <li class="p-relative">
                                            <a itemprop="url" href="tin-tuc" title="Tin tức" class="">
                                                <span itemprop="name">Tin tức</span>
                                            </a>
                                        </li>
                                        <li class="p-relative">
                                            <a itemprop="url" href="lien-he" title="Liên hệ" class="">
                                                <span itemprop="name">Liên hệ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--end menu_mobile-->
                            </div>
                        </div>
                        <ul class="ul-menu mg-0 none-mobile">
                            <li class=" p-relative">
                                <a itemprop="url" href="tat-ca" title="Tất cả sản phẩm">
                                    <span itemprop="name">Tất cả sản phẩm</span>
                                </a>
                            </li>
                            @foreach ($subCategories1 as $index => $subCategory1)
                                <li class=" p-relative">
                                    <a class="dropdown-holder" itemprop="url"
                                        href="{{ $subCategory1['alias']['alias'] ?? '' }}"
                                        title="{{ $subCategory1['name'] ?? '' }}">
                                        <span itemprop="name">{{ $subCategory1['name'] ?? '' }}</span>
                                    </a>
                                </li>
                            @endforeach
                            @if ($subCategories2)
                                <li class=" p-relative">
                                    <a class="dropdown-holder" itemprop="url" href="" title="Xem thêm">
                                        <span itemprop="name">Xem thêm <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="mega-menu pos-menu-c1 before-menu after-menu">
                                        <div class="box-mega-menu">
                                            <ul class="c1">
                                                @foreach ($subCategories2 as $subCategory2)
                                                    <li class="p-relative">
                                                        <a itemprop="url"
                                                            href="{{ $subCategory2['alias']['alias'] ?? '' }}"
                                                            title="{{ $subCategory2['name'] ?? '' }}">
                                                            <span
                                                                itemprop="name">{{ $subCategory2['name'] ?? '' }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                            </li>
                        @endif
                        <li class=" p-relative">
                            <a itemprop="url" href="tin-tuc" title="Tin tức">
                                <span itemprop="name">Tin tức</span>
                            </a>
                        </li>

                        <li class=" p-relative">


                            <a itemprop="url" href="lien-he" title="Liên hệ">

                                <span itemprop="name">Liên hệ</span>

                            </a>


                        </li>

                    </ul>

                </div>

            </div>
            <div class="col-md-3 col-sm-3 col-10 col-80i col-xs-12">

                <div class="ds-flex flex-center flex-wrap-i">
                    <div class="cart-mobile none-desktop ds-mobile">
                        <div class="thumb-cart-m p-relative" onclick="window.location.href='gio-hang.html'">
                            <img src="images/cart_m.png" width="25" alt="cart" />
                            <span id="view-header">{{ $totalCarts ?? 0 }}</span>
                        </div>
                    </div>
                    <div class="ic-search-menu p-relative cs-pointer">
                        <i class="fa fa-search none-mobile" aria-hidden="true"></i>
                        <div class="form-search ds-flex flex-end p-relative">

                            <input type="text" name="keywords" id="keywords" value="{{ $_GET['keyword'] ?? '' }}" placeholder="Tìm kiếm...">

                            <button class="button-search" type="submit"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

</nav>
