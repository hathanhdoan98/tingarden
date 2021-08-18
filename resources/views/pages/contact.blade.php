@extends('layout.app')
@section('content')
    <div class="body-page bg-white">
        <div class="container">
            <div class="breadcumb">
                <ol id="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://hasuflora.com/"><span itemprop="name"><i class="fa fa-home" aria-hidden="true"></i></span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://hasuflora.com/lien-he"><span itemprop="name">liên hệ</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 fix-col-0">
                    <style>
                        #google-map iframe {
                            width: 100%;
                        }
                    </style>
                    <div class="contact-main-page mb-30">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title t-uppercase">thông tin liên hệ</h3>
                                <div class="contact-page-message mb-25">
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                                    <p> 67 Thủ Khoa Huân, P. Bến Thành, Q.1, TP.HCM</p>
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-phone"></i> Số điện thoại</h4>
                                    <p>Mobile: 07989 12 383</p>
                                    <p>Hotline: 07989 12 383</p>
                                </div>
                                <div class="single-contact-block last-child">
                                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                    <p>hasuflora@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                <h3 class="contact-page-title t-uppercase">Gửi thông tin cho chúng tôi</h3>
                                <div class="contact-form">
                                    <form id="contact-form" action="contact.html" method="post">
                                        <div class="form-group">
                                            <label>Họ và tên <span class="required">*</span></label>
                                            <input type="text" name="data[fullname]" id="customername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập email <span class="required">*</span></label>
                                            <input type="email" name="data[email]" id="customerEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập số điện thoại <span class="required">*</span></label>
                                            <input type="number" name="data[phone]" class="txt-input-number" id="contactSubject" required>
                                        </div>
                                        <div class="form-group mb-30">
                                            <label>Nhập nội dung</label>
                                            <textarea name="data[content]" id="contactMessage"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">Gửi</button>
                                        </div>
                                    </form>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="google-map" class="mb-30">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4787079463117!2d106.69416051454648!3d10.774600362174288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f391846671f%3A0xc3a86f1f511c43c6!2zNjcgVGjhu6cgS2hvYSBIdcOibiwgUGjGsOG7nW5nIELhur9uIFRow6BuaCwgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1608872046708!5m2!1svi!2s"
                                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
