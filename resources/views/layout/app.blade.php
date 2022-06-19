<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/WebSite">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <base href="http://dev.tingarden.com/">

    <link rel="canonical" href="http://dev.tingarden.com/" />

    <link rel="alternate" href="http://dev.tingarden.com/" hreflang="vn-vi" />


    <link rel="alternate" href="http://dev.tingarden.com/" hreflang="en" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link id="favicon" rel="shortcut icon" href="http://dev.tingarden.com/upload/hinhanh/logo-hasu-khung-tron-7955.png" type="image/x-icon" />

    <title>HASU FLORA</title>

    <meta name="description" content="Hoa tươi Hasu Flora được thành lập với sứ mệnh đem đến khách hàng những sản phẩm hoa chất lượng được tự tay chủ nhân, với trên 10 năm kinh nghiệm trực tiếp tạo ra Hoa là món quà vô giá mà thiên nhiên đã dành tặng cho con người.">

    <meta name="keywords" content="HASU FLORA, hoa tươi quận 1, hoa tươi giá rẻ quận 1, các loại hoa đẹp">

    <meta name="robots" content="noodp,index,follow" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190435681-2">--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}

{{--        function gtag() {--}}
{{--            dataLayer.push(arguments);--}}
{{--        }--}}
{{--        gtag('js', new Date());--}}

{{--        gtag('config', 'UA-190435681-2');--}}
{{--    </script>--}}
    <meta http-equiv="audience" content="General" />

    <meta name="resource-type" content="Document" />

    <meta name="distribution" content="Global" />

    <meta name='revisit-after' content='1 days' />

    <meta name="ICBM" content="10.6885418,106.6034837">

    <meta name="geo.position" content="10.6885418,106.6034837">

    <meta name="geo.placename" content=" 67 Thủ Khoa Huân, P. Bến Thành, Q.1, TP.HCM">

    <meta name="author" content="HASU FLORA">

    <meta name="theme-color" content="#F59FAC" />

    <meta name="dc.language" CONTENT="vietnamese">

    <meta name="dc.source" CONTENT="http://dev.tingarden.com/">

    <meta name="dc.title" CONTENT="TIN GARDEN">

    <meta name="dc.keywords" CONTENT="TIN GARDEN, sen đá, sen đá giá rẻ pleiku, sen đá giá rẻ gia lai, các loại sen đá đẹp">

    <meta name="dc.description" CONTENT="Sen đá Tin Garden với mục tiêu mang đến cho tất cả mọi người những sản phẩm sen đá, cây cảnh đẹp, giá rẻ. Đây sẽ là những món quá ý nghĩa cho những người yêu thương">

    <style type="text/css" media="screen"></style>
    <link href="themes/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="themes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="themes/bootstrap/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="themes/css/fonts.css" rel="stylesheet">
    <link href="themes/css/normalize.css" rel="stylesheet">
    <link href="themes/css/reset.css" rel="stylesheet">
    <link href="themes/css/menu.mobile.css" rel="stylesheet">
    <link href="themes/css/style.css" rel="stylesheet">
    <link href="themes/css/themes.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <style>
        :root {
            --html-bg-website: #F59FAC;
            --html-cl-website: #060602;
            --font-montserrat-black: 'montserratBlack';
            --font-montserrat-bold: 'montserratBold';
            --font-roboto-regular: 'RobotoRegular';
            --font-roboto-bold: 'RobotoBold';
            --font-page: 'UTMBC';
            --bg-head: url('../../upload/hinhanh/test03-1-3756.png')no-repeat center center/cover;
            --bg-about: url('../../upload/hinhanh/bgabout-6245.png')no-repeat center center/cover;
            --bg-feedbacks: url('../../upload/hinhanh/dat-hang-ko-nen-2358.png')no-repeat center center/cover;
            --bg-lydo: url('../../upload/hinhanh/nen1-8355.png')no-repeat center center/cover;
            --bg-visao: url('../../upload/hinhanh/bgct-719.png')no-repeat center center/cover;
            --bg-album: url('../../upload/hinhanh/untitled1-6057.png')no-repeat center center/cover;
            --bg-newsletter: url('../../upload/hinhanh/nen1-396.png')no-repeat center center/cover;
            --bg-footer: url('../../upload/hinhanh/nen1-4554.png')no-repeat center center/cover;
        }
    </style>
    <script src="themes/js/jquery.min.js"></script>
    <script src="themes/js/ImageTooltip.js"></script>
    <script src="themes/js/jquery-toc.js"></script>
</head>

<body itemscope itemtype="https://schema.org/WebPage">
<h1 class="hide fn">Tin garden</h1>
<div id="inPage">
    @include('layout.header')
    <div class="body-fix">
        @yield('content')
        @include('layout.new-post')
        @include('layout.footer')
    </div>
</div>
<script type="text/javascript" src="themes/js/arcontactus.js"></script>
<style>
    .arcontactus-widget.right.arcontactus-message {
        right: 5px;
        bottom: 150px
    }

    .arcontactus-widget .arcontactus-message-button.pulsation {
        -webkit-animation-duration: 2s;
        animation-duration: 2s
    }

    .arcontactus-widget.md .arcontactus-message-button,
    .arcontactus-widget.md.arcontactus-message {
        width: 60px;
        height: 60px
    }

    .arcontactus-widget {
        opacity: 0;
        transition: .2s opacity
    }

    .arcontactus-widget * {
        box-sizing: border-box
    }

    .arcontactus-widget.left.arcontactus-message {
        left: 20px;
        right: auto
    }

    .arcontactus-widget.left .arcontactus-message-button {
        right: auto;
        left: 0
    }

    .arcontactus-widget.left .arcontactus-prompt {
        left: 80px;
        right: auto;
        transform-origin: 0 50%
    }

    .arcontactus-widget.left .arcontactus-prompt:before {
        border-right: 8px solid #FFF;
        border-top: 8px solid transparent;
        border-left: 8px solid transparent;
        border-bottom: 8px solid transparent;
        right: auto;
        left: -15px
    }

    .arcontactus-widget.left .messangers-block {
        right: auto;
        left: 0;
        -webkit-transform-origin: 10% 105%;
        -ms-transform-origin: 10% 105%;
        transform-origin: 10% 105%
    }

    .arcontactus-widget.left .callback-countdown-block {
        left: 0;
        right: auto
    }

    .arcontactus-widget.left .callback-countdown-block::before,
    .arcontactus-widget.left .messangers-block::before {
        left: 25px;
        right: auto
    }

    .arcontactus-widget.md .callback-countdown-block,
    .arcontactus-widget.md .messangers-block {
        bottom: 70px
    }

    .arcontactus-widget.md .arcontactus-prompt {
        bottom: 5px
    }

    .arcontactus-widget.md.left .callback-countdown-block:before,
    .arcontactus-widget.md.left .messangers-block:before {
        left: 21px
    }

    .arcontactus-widget.md.left .arcontactus-prompt {
        left: 70px
    }

    .arcontactus-widget.md.right .callback-countdown-block:before,
    .arcontactus-widget.md.right .messangers-block:before {
        right: 21px
    }

    .arcontactus-widget.md.right .arcontactus-prompt {
        right: 70px
    }

    .arcontactus-widget.md .arcontactus-message-button .pulsation {
        width: 74px;
        height: 74px
    }

    .arcontactus-widget.md .arcontactus-message-button .callback-state,
    .arcontactus-widget.md .arcontactus-message-button .icons {
        width: 40px;
        height: 40px;
        margin-top: -20px;
        margin-left: -20px
    }

    .arcontactus-widget.sm .arcontactus-message-button,
    .arcontactus-widget.sm.arcontactus-message {
        width: 50px;
        height: 50px
    }

    .arcontactus-widget.sm .callback-countdown-block,
    .arcontactus-widget.sm .messangers-block {
        bottom: 60px
    }

    .arcontactus-widget.sm .arcontactus-prompt {
        bottom: 0
    }

    .arcontactus-widget.sm.left .callback-countdown-block:before,
    .arcontactus-widget.sm.left .messangers-block:before {
        left: 16px
    }

    .arcontactus-widget.sm.left .arcontactus-prompt {
        left: 60px
    }

    .arcontactus-widget.sm.right .callback-countdown-block:before,
    .arcontactus-widget.sm.right .messangers-block:before {
        right: 16px
    }

    .arcontactus-widget.sm.right .arcontactus-prompt {
        right: 60px
    }

    .arcontactus-widget.sm .arcontactus-message-button .pulsation {
        width: 64px;
        height: 64px
    }

    .arcontactus-widget.sm .arcontactus-message-button .icons {
        width: 40px;
        height: 40px;
        margin-top: -20px;
        margin-left: -20px
    }

    .arcontactus-widget.sm .arcontactus-message-button .static {
        margin-top: -16px
    }

    .arcontactus-widget.sm .arcontactus-message-button .callback-state {
        width: 40px;
        height: 40px;
        margin-top: -20px;
        margin-left: -20px
    }

    .arcontactus-widget.active {
        opacity: 1
    }

    .arcontactus-widget .icons.hide,
    .arcontactus-widget .static.hide {
        opacity: 0;
        transform: scale(0)
    }

    .arcontactus-widget.arcontactus-message {
        z-index: 10000;
        right: 20px;
        bottom: 20px;
        position: fixed !important;
        height: 70px;
        width: 70px
    }

    .arcontactus-widget .arcontactus-message-button {
        width: 50px;
        position: absolute;
        height: 50px;
        right: 8px;
        background-color: red;
        border-radius: 50px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        text-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer
    }

    .arcontactus-widget .arcontactus-message-button p {
        font-family: Ubuntu, Arial, sans-serif;
        color: #fff;
        font-weight: 700;
        font-size: 10px;
        line-height: 11px;
        margin: 0
    }

    .arcontactus-widget .arcontactus-message-button .pulsation {
        width: 84px;
        height: 84px;
        background-color: red;
        border-radius: 50px;
        position: absolute;
        left: -18px;
        top: -17px;
        z-index: -1;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-animation: arcontactus-pulse 2s infinite;
        animation: arcontactus-pulse 2s infinite
    }

    .arcontactus-widget .arcontactus-message-button .icons {
        background-color: var(--html-bg-website);
        width: 44px;
        height: 44px;
        border-radius: 50px;
        position: absolute;
        overflow: hidden;
        top: 50%;
        left: 50%;
        margin-top: -22px;
        margin-left: -22px
    }

    .arcontactus-widget .arcontactus-message-button .static {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -19px;
        margin-left: -26px;
        width: 52px;
        height: 52px;
        text-align: center
    }

    .arcontactus-widget .arcontactus-message-button .static img {
        display: inline
    }

    .arcontactus-widget .arcontactus-message-button .static svg {
        width: 15px;
        height: 24px;
        color: #FFF
    }

    .arcontactus-widget .arcontactus-message-button.no-text .static {
        margin-top: -12px
    }

    .arcontactus-widget .pulsation:nth-of-type(2n) {
        -webkit-animation-delay: .5s;
        animation-delay: .5s
    }

    .arcontactus-widget .pulsation.stop {
        -webkit-animation: none;
        animation: none
    }

    .arcontactus-widget .icons-line {
        top: 10px;
        left: 12px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: absolute;
        -webkit-transition: cubic-bezier(.13, 1.49, .14, -.4);
        -o-transition: cubic-bezier(.13, 1.49, .14, -.4);
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-transform: translateX(30px);
        -ms-transform: translateX(30px);
        transform: translateX(30px);
        height: 24px;
        transition: .2s all
    }

    .arcontactus-widget .icons,
    .arcontactus-widget .static {
        transition: .2s all
    }

    .arcontactus-widget .icons-line.stop {
        -webkit-animation-play-state: paused;
        animation-play-state: paused
    }

    .arcontactus-widget .icons-line span {
        display: inline-block;
        width: 24px;
        height: 24px;
        color: red
    }

    .arcontactus-widget .icons-line span i,
    .arcontactus-widget .icons-line span svg {
        width: 24px;
        height: 24px
    }

    .arcontactus-widget .icons-line span i {
        display: block;
        font-size: 24px;
        line-height: 24px
    }

    .arcontactus-widget .icons-line img,
    .arcontactus-widget .icons-line span {
        margin-right: 40px
    }

    .arcontactus-widget .icons.hide .icons-line {
        transform: scale(0)
    }

    .arcontactus-widget .icons .icon:first-of-type {
        margin-left: 0
    }

    .arcontactus-widget .arcontactus-close {
        color: #FFF
    }

    .arcontactus-widget .arcontactus-close svg {
        -webkit-transform: rotate(180deg) scale(0);
        -ms-transform: rotate(180deg) scale(0);
        transform: rotate(180deg) scale(0);
        -webkit-transition: ease-in .12s all;
        -o-transition: ease-in .12s all;
        transition: ease-in .12s all;
        display: block
    }

    .arcontactus-widget .arcontactus-close.show-messageners-block svg {
        -webkit-transform: rotate(0) scale(1);
        -ms-transform: rotate(0) scale(1);
        transform: rotate(0) scale(1)
    }

    .arcontactus-widget .arcontactus-prompt,
    .arcontactus-widget .messangers-block {
        background: center no-repeat var(--html-bg-website);
        box-shadow: 0 0 10px rgba(0, 0, 0, .6);
        width: 235px;
        position: absolute;
        bottom: 80px;
        left: -165px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        padding: 14px 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 7px;
        -webkit-transform-origin: 80% 105%;
        -ms-transform-origin: 80% 105%;
        transform-origin: 80% 105%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: ease-out .12s all;
        -o-transition: ease-out .12s all;
        transition: ease-out .12s all;
        z-index: 10000
    }

    .arcontactus-widget .arcontactus-prompt:before,
    .arcontactus-widget .messangers-block:before {
        position: absolute;
        bottom: -7px;
        right: 25px;
        display: inline-block !important;
        border-right: 8px solid transparent;
        border-top: 8px solid var(--html-bg-website);
        border-left: 8px solid transparent;
        content: ''
    }

    .arcontactus-widget .arcontactus-prompt.show-messageners-block,
    .arcontactus-widget .messangers-block.show-messageners-block {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }

    .arcontactus-widget .arcontactus-prompt {
        color: #787878;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 18px;
        width: auto;
        bottom: 10px;
        right: 80px;
        white-space: nowrap;
        padding: 18px 20px 14px
    }

    .arcontactus-widget .arcontactus-prompt:before {
        border-right: 8px solid transparent;
        border-top: 8px solid transparent;
        border-left: 8px solid #FFF;
        border-bottom: 8px solid transparent;
        bottom: 16px;
        right: -15px
    }

    .arcontactus-widget .arcontactus-prompt.active {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1)
    }

    .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-close {
        position: absolute;
        right: 6px;
        top: 6px;
        cursor: pointer;
        z-index: 100;
        height: 14px;
        width: 14px;
        padding: 2px
    }

    .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-close svg {
        height: 10px;
        width: 10px;
        display: block
    }

    .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing {
        border-radius: 10px;
        display: inline-block;
        left: 3px;
        padding: 0;
        position: relative;
        top: 4px;
        width: 50px
    }

    .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div {
        position: relative;
        float: left;
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background: #ccc;
        margin: 0 2px;
        -webkit-animation: arcontactus-updown 2s infinite;
        animation: arcontactus-updown 2s infinite
    }

    .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div:nth-child(2) {
        animation-delay: .1s
    }

    .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div:nth-child(3) {
        animation-delay: .2s
    }

    .arcontactus-widget .messangers-block.sm .messanger {
        padding-left: 50px;
        min-height: 44px
    }

    .arcontactus-widget .messangers-block.sm .messanger span {
        height: 32px;
        width: 32px;
        margin-top: -16px
    }

    .arcontactus-widget .messangers-block.sm .messanger span svg {
        height: 20px;
        width: 20px;
        margin-top: -10px;
        margin-left: -10px
    }

    .arcontactus-widget .messanger {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin: 0;
        cursor: pointer;
        width: 100%;
        padding: 8px 20px 8px 60px;
        position: relative;
        min-height: 54px;
        text-decoration: none
    }

    .arcontactus-widget .messanger:before {
        background-repeat: no-repeat;
        background-position: center
    }

    .arcontactus-widget .messanger.facebook span {
        background: #000
    }

    .arcontactus-widget .messanger.viber span {
        background: #7c529d
    }

    .arcontactus-widget .messanger.telegram span {
        background: #2ca5e0
    }

    .arcontactus-widget .messanger.skype span {
        background: #31c4ed
    }

    .arcontactus-widget .messanger.email span {
        background: #ff8400
    }

    .arcontactus-widget .messanger.contact span {
        background: #7eb105
    }

    .arcontactus-widget .messanger.call-back span {
        background: #54cd81
    }

    .arcontactus-widget .messanger span {
        position: absolute;
        left: 10px;
        top: 50%;
        margin-top: -20px;
        display: block;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: transparent;
        margin-right: 10px;
        color: #FFF;
        text-align: center;
        vertical-align: middle
    }

    .arcontactus-widget .messanger span i,
    .arcontactus-widget .messanger span svg {
        width: 24px;
        height: 24px;
        vertical-align: middle;
        text-align: center;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -12px;
        margin-left: -12px
    }

    .arcontactus-widget .messanger span i {
        font-size: 24px;
        line-height: 24px
    }

    .arcontactus-widget .messanger p {
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #fff
    }

    @-webkit-keyframes arcontactus-pulse {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 1
        }
        50% {
            opacity: .5
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0
        }
    }

    @media (max-width:468px) {
        .arcontactus-widget.opened.arcontactus-message,
        .arcontactus-widget.opened.left.arcontactus-message {
            width: auto;
            right: 20px;
            left: 20px
        }
    }

    @keyframes arcontactus-updown {
        0%,
        100%,
        43% {
            transform: translate(0, 0)
        }
        25%,
        35% {
            transform: translate(0, -10px)
        }
    }

    @-webkit-keyframes arcontactus-updown {
        0%,
        100%,
        43% {
            transform: translate(0 0)
        }
        25%,
        35% {
            transform: translate(-10px 0)
        }
    }

    @keyframes arcontactus-pulse {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 1
        }
        50% {
            opacity: .5
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0
        }
    }

    @-webkit-keyframes arcontactus-show-stat {
        0%,
        100%,
        20%,
        85% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
        21%,
        84% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }
    }

    @keyframes arcontactus-show-stat {
        0%,
        100%,
        20%,
        85% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
        21%,
        84% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }
    }

    @-webkit-keyframes arcontactus-show-icons {
        0%,
        100%,
        20%,
        85% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }
        21%,
        84% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes arcontactus-show-icons {
        0%,
        100%,
        20%,
        85% {
            -webkit-transform: scale(0);
            transform: scale(0)
        }
        21%,
        84% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }
</style>
<div id="arcontactus" class="arcontactus-widget arcontactus-message right lg active">
    <div class="messangers-block lg">
        <a class="messanger msg-item-address" id="msg-item-2" href="https://www.google.com/maps/dir//" target="_blank">
            <span>
                <img src="images/message/maps.png" alt="Địa chỉ"/>
            </span>
            <p>Chỉ Đường</p>
        </a>
        <a class="messanger msg-item-facebook-messenger" id="msg-item-1" href="https://m.me/HasuFlora" target="_blank">
            <span>
                <img src="images/message/facebook.png" alt="Facebook"/>
            </span>
            <p>Messenger</p>
        </a>
        <a class="messanger msg-item-telegram-plane" id="msg-item-9" href="https://zalo.me/0798912383" target="_blank">
            <span>
                <img src="images/message/zalo.png" alt="Zalo"/>
            </span>
            <p>Zalo Chat</p>
        </a>
        <a class="messanger msg-item-envelope" id="msg-item-7" href="mailto:hasuflora@gmail.com" target="_blank">
            <span>
                <img src="images/message/email.png" alt="Email"/>
            </span>
        </a>
        <a class="messanger msg-item-phone" id="msg-item-8" href="tel:0798912383" target="_blank">
            <span>
                <img src="images/message/phone.png" alt="Phone"/>
            </span>
            <p>Call {{ $settings["phone"]["value"] ?? "" }}</p>
        </a>
    </div>
    <div class="arcontactus-message-button" style="background-color: var(--html-bg-website)">
        <div class="static">
            <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Canvas" transform="translate(-825 -308)">
                    <g id="Vector">
                        <use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"></use>
                    </g>
                </g>
                <defs>
                    <path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                    </path>
                </defs>
            </svg>
        </div>
        <div class="callback-state" style="color: var(--html-bg-website)"></div>
        <div class="icons hide">
            <div class="icons-line" style="transform: translate(-2px, 0px);">
                    <span style="color: var(--html-bg-website)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path>
                    </svg>
                </span>
                <span style="color: var(--html-bg-website)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z">
                        </path>
                    </svg>
                </span>
                <span style="color: var(--html-bg-website)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z">

                        </path>
                    </svg>
                </span>
                <span style="color: var(--html-bg-website)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">

                        </path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="arcontactus-close">
            <svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor">

                        </use>
                    </g>
                </g>
                <defs>
                    <path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path>
                </defs>
            </svg>
        </div>
        <div class="pulsation" style="background-color: var(--html-bg-website)"></div>
        <div class="pulsation" style="background-color: var(--html-bg-website)"></div>
    </div>
    <div class="arcontactus-prompt">
        <div class="arcontactus-prompt-close" style="color: var(--html-bg-website)">
            <svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Canvas" transform="translate(-4087 108)">
                    <g id="Vector">
                        <use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use>
                    </g>
                </g>
                <defs>
                    <path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z">
                    </path>
                </defs>
            </svg>
        </div>
        <div class="arcontactus-prompt-inner"></div>
    </div>
</div>

<div class="system_message">
    <div class="title">Cập nhật thành công</div>
</div>

<script type="text/javascript">
    var arCuMessages = ["Hasu Flora"];
    var arCuLoop = false;
    var arCuCloseLastMessage = false;
    var arCuPromptClosed = false;
    var _arCuTimeOut = null;
    var arCuDelayFirst = 2000;
    var arCuTypingTime = 2000;
    var arCuMessageTime = 4000;
    var arCuClosedCookie = 0;
    var arcItems = [];
    jQuery(document).ready(function() {
        arCuClosedCookie = arCuGetCookie('arcu-closed');
        jQuery('#arcontactus').on('arcontactus.init', function() {
            if (arCuClosedCookie) {
                return false;
            }
            arCuShowMessages();
        });
        jQuery('#arcontactus').on('arcontactus.openMenu', function() {
            clearTimeout(_arCuTimeOut);
            arCuPromptClosed = true;
            jQuery('#contact').contactUs('hidePrompt');
            arCuCreateCookie('arcu-closed', 1, 30);
        });
        jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
            clearTimeout(_arCuTimeOut);
            arCuPromptClosed = true;
            arCuCreateCookie('arcu-closed', 1, 30);
        });
        var arcItem = {};
        arcItem.id = 'msg-item-2';
        arcItem.class = 'msg-item-address';
        arcItem.title = 'Chỉ Đường';
        arcItem.icon = '<img src="images/message/maps.png" alt="Địa chỉ"/>';
        arcItem.href = 'https://www.google.com/maps/dir//';
        arcItem.color = '';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-1';
        arcItem.class = 'msg-item-facebook-messenger';
        arcItem.title = 'Messenger';
        arcItem.icon = '<img src="images/message/facebook.png" alt="Facebook"/>';
        arcItem.href = 'https://m.me/tingarden';
        arcItem.color = '';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-9';
        arcItem.class = 'msg-item-telegram-plane';
        arcItem.title = 'Zalo Chat';
        arcItem.icon = '<img src="images/message/zalo.png" alt="Zalo"/>';
        arcItem.href = 'https://zalo.me/0123123123';
        arcItem.color = '';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-7';
        arcItem.class = 'msg-item-envelope';
        arcItem.title = 'Send mail';
        arcItem.icon = '<img src="images/message/email.png" alt="Email"/>';
        arcItem.href = 'mailto:tingarden@gmail.com';
        arcItem.color = '';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-8';
        arcItem.class = 'msg-item-phone';
        arcItem.title = 'Call {{ $settings["phone"]["value"] ?? "" }}';
        arcItem.icon = '<img src="images/message/phone.png" alt="Phone"/>';
        arcItem.href = 'tel:0123123';
        arcItem.color = '';
        arcItems.push(arcItem);
        jQuery('#arcontactus').contactUs({
            items: arcItems
        });
    });
</script>
<address class="vcard" style='display: none'>
    <span class="org">HASU FLORA</span>
    <span class="adr"> 67 Thủ Khoa Huân, P. Bến Thành, Q.1, TP.HCM</span>
    <span class="street-address"> 67 Thủ Khoa Huân, P. Bến Thành, Q.1, TP.HCM</span>
    <span class="locality">10.6885418,106.6034837</span>
    <span class="postal-code">700000</span>
    <span class="country-name">Việt Nam</span>
    <span class="tel">{{ $settings["phone"]["value"] ?? "" }}</span>
</address>
<script>
    var apiAddToCart = "{{ route('web.cart.add') }}";

    var class_ = 'theme-default';
    var color_ = '37a000';
    var chart_order;
    var apexMixedChart;
    var index = "yes";
    var template = "index";
    var timer = "2020/06/20";
    var baseUrl = "http://dev.tingarden.com/";
    var mobile = "no";
    var toc_page = "";
    var column = "3" || 5;
    var rows = "2" || 1;
    var autoPlay = "true";
    var arrows = "true";
    var autoplaySpeed = "4000" || 4000;
    var speed = "400" || 400;
    // var jsCart=JSON.parse('null');
    var youtube = "p7UDQ63wYhM";
    var blocksite = "no";
</script>
<script src="themes/js/swiper.jquery.min.js"></script>
<script src="themes/js/lang/vi.js"></script>
<script src="themes/js/functions.js"></script>
<script src="themes/js/api.js"></script>
<script src="themes/js/app.js"></script>
<script src="js/web/web.js"></script>
@yield('script')
</body>

</html>
