<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/common/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/assets/css/top/auth.css') }}">
    <script src="{{ asset('/assets/js/common/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/top/auth.js') }}"></script>
</head>

<body>
    <nav id="header" class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a href="">
                <img src="{{ asset('/assets/img/logo01.png') }}" alt="">
            </a>

            <button class="navbar-toggler" type="button" id="show-toggle-menu">
                <span class="dark-blue-text">
                    <i class="fa fa-bars fa-1x"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" id="active1" href="{{ route('home') }}">トップ</a></li>
                    <li class="nav-item"><a class="nav-link" id="active2" href="">導入する</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="">お問い合わせ</a></li>
                    @if (Route::has('login'))
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('register') }}">登録</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('login') }}">ログイン</a></li>
                    @endif
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="sp-menu pt-4">
        <div class="container d-flex justify-content-end mb-4">
            <button type="button" class="btn-close" id="hide-toggle-menu" aria-label="Close"></button>
        </div>
        <div class="container d-flex flex-column">
            <a href="" class="py-4 text-center">トップ</a>
            <a href="" class="py-4 text-center">導入する</a>
            <a href="" class="py-4 text-center">お問い合わせ</a>
            @if (Route::has('register'))
            <a href="" class="py-4 text-center">登録</a>
            @endif
            @if (Route::has('login'))
            <a href="" class="py-4 text-center">ログイン</a>
            @endif
        </div>
    </div>

    @yield('content')

    <footer class="contact-footer position-relative">
        <div class="container">
            <div class="footer d-flex flex-column align-items-center">
                <div class="footer-logo mb-4">
                    <a href="/" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" alt="">
                    </a>
                </div>
                <p class="text-center m-0">〒242-0017 神奈川県大和市大和東3-3-15</p>
                <p class="text-center">TEL：046-200-1095 / FAX：046-200-1094</p>
                <div class="social w-100 d-flex justify-content-center align-items-center gap-4">
                    <a href="">
                        <i class="fa fa-brands fa-facebook-square fs-1"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-brands fa-twitter fs-1"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-brands fa-square-instagram fs-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright bg-dark mt-4">
            <p class="text-center text-white m-0 py-4">Copyright © PROS Co., Ltd. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>