<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/common/bootstrap.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/assets/css/companyMana/list.css') }}">

    <script src="{{ asset('/assets/js/common/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/common/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <header class="bg-light py-1 position-sticky w-100 top-0" style="z-index: 2">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand pe-5" href="{{ route('home') }}">
                    <img src="{{ asset('/assets/img/logo01.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link @if(strpos(url()->current(), '/myjob') != false) text-active @endif" href="{{ route('myjob.index') }}">インタビュー</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(strpos(url()->current(), '/member') != false) text-active @endif" href="{{ route('member.index') }}" href="{{ route('member.index') }}">求職者</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(strpos(url()->current(), '/company') != false) text-active @endif" href="{{ route('company.index') }}" href="{{ route('company.index') }}">企業</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-5">
                            <input type="text" class="form-control rounded-pill" name="" id="" placeholder="企業"
                                value="">
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('/assets/img/avatar/01.png') }}" alt="Avatar" class="avatar-img"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.index') }}">プロフィール</a>
                                <a class="dropdown-item" href="{{ route('user.index') }}">ユーザー</a>
                                <a class="dropdown-item" href="{{ route('template.index') }}">ライブラリ</a>
                                <div class="dropdown-divider"></div>
                                <form class="dropdown-item" action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="border-0 bg-transparent">ログアウト</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="pt-5">
        <div class="py-3 bg-secondary-grey">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/assets/img/logo01.png') }}" alt="">
                    </a>
                </div>
                <div class="d-flex gap-3">
                    <a href="">サポート</a>
                    <a href="">プライバシーポリシー</a>
                </div>
            </div>
        </div>
        <div class="bg-dark">
            <div class="container py-3">
                <p class="text-center text-white m-0">Copyright © PROS Co., Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>