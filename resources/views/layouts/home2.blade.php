<!doctype html>
<html lang="en">

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Erdi Tuna">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/price_rangs.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    @yield('headerjs')
</head>
<body>

<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets')}}/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="header-area header-transparrent">
    @include('home._header')

    @include('home._menu')

</div>




@section('content')
@show




@include('home._footer')
</body>
</html>

