<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/common/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/common/plyr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/assets/css/top/top.css') }}">

    <script src="{{ asset('/assets/js/common/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/common/plyr.min.js') }}"></script>
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
                    <li class="nav-item"><a class="nav-link" id="active1" href="/">トップ</a></li>
                    <li class="nav-item"><a class="nav-link" id="active2" href="{{ route('getJobList') }}">導入する</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('contact') }}">お問い合わせ</a></li>
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
        <div
            class="contact container position-absolute top-0 start-50 translate-middle bg-active px-2 py-5 p-md-5 w-100 rounded">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto text-white">
                    <h1 class="mb-2">Contact</h1>
                    <h5 class="mb-5">お問い合わせ</h5>
                    <p>お客様の作りたい自動機の要望をひとつひとつ、ヒアリングさせていただきます。</p>
                    <p>まずは納期、コスト面についてもお気軽にご相談ください。</p>
                    <p>すぐに専門営業社員がお伺いいたします。</p>
                </div>
                <div class="col-12 col-md-auto d-flex justify-content-center d-md-block">
                    <a href="{{ route('contact') }}" class="text-center">
                        <i class="fa fa-regular fa-circle-right fs-1 text-white"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer d-flex flex-column align-items-center">
                <div class="footer-logo mb-4">
                    <a href="" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" alt="">
                    </a>
                </div>
                <p class="text-center m-0">〒242-0017 神奈川県大和市大和東3-3-15</p>
                <p class="text-center">TEL：046-200-1095 / FAX：046-200-1094</p>
                <div class="social w-100 d-flex justify-content-center align-items-center gap-4">
                    <i class="fa fa-brands fa-facebook-square fs-1"></i>
                    <i class="fa fa-brands fa-twitter fs-1"></i>
                    <i class="fa fa-brands fa-square-instagram fs-1"></i>
                </div>
            </div>
        </div>
        <div class="copyright bg-dark mt-4">
            <p class="text-center text-white m-0 py-4">Copyright © PROS Co., Ltd. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>