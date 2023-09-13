<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('/assets/css/common/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/common/plyr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/assets/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/top/top.css') }}">
</head>

<body class="antialiased">
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
            <a href="/" class="py-4 text-center">トップ</a>
            <a href="{{ route('getJobList') }}" class="py-4 text-center">導入する</a>
            <a href="{{ route('contact') }}" class="py-4 text-center">お問い合わせ</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="py-4 text-center">登録</a>
            @endif
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="py-4 text-center">ログイン</a>
            @endif
        </div>
    </div>

    <main class="pb-lg-5">
        <section class="main-visual w-100 p-0 vh-100 background-position-top">
            <div class="container d-flex justify-content-center align-items-start flex-column vh-100 pt-4">
                <div class="max-w-600">
                    <h1 class="mb-4 fs-1">KIRIHARE HR AI採用</h1>
                    <div class="w-100 w-md-75">
                        <p class="ms-md-5">
                            KIRIHARE HR AI採用は、生成AIを活用することによって採用面接を自動化。一番時間が取られる「面接」の工数削減に注力したサービスです。
                        </p>
                    </div>
                </div>
                <div class="max-w-1000 w-100 w-md-50" style="max-width: 600px;">
                    <img src="{{ asset('/assets/img/index-01.png') }}" alt="">
                </div>
            </div>
        </section>

        <section id="solution" class="mb-lg-5">
            <div class="container py-lg-5 opacity-1">
                <h1 class="mb-5 fw-bolder"><span class="active">AI面接作成</span>システム<br>
                    人事による<span class="active">面接の効率化</span>と<br>
                    <span class="active">パーソナライズ</span></h1>
                <div class="max-w-600">
                    <p>
                        人材採用は今やビジネスの核心部分となっていますが、そのプロセスは手間と時間を要します。私たちの最先端のAI面接作成システムは、人事担当者が独自のAI面接を作成できるように設計されています。
                    </p>
                    <p>
                        このシステムにより、適性な候補者を見つけ出すとともに、採用プロセスを効率化し、パーソナライズします。スペシャリストの知識がなくても、必要なスキルと経験を持った候補者を見つけるのがこれまで以上に簡単になります。あなたの採用プロセスを革新的に改善し、ビジネスを次のレベルへ引き上げるために、我々のAI面接作成システムを体験してみてください。
                    </p>
                </div>
            </div>
        </section>

        {{-- <section id="interview">
            <div class="container">
                <h1 class="text-center fw-bolder active mb-5">インタビュー</h1>
                <div class="row mt-4">
                    <div class="col-lg-4 mb-5">
                        <div class="mb-4">
                            <video controls crossorigin playsinline>
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="576">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <a href="" class="video-title">面接タイトル <i class="fa fa-solid fa-arrow-right ms-3"></i></a>
                        <p>
                            広告出稿したい広告主さまと広告掲載したいメディアさまを繋ぎ、収益を上げるお手伝いを担う営業部門の業務をご紹介します。
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="mb-4">
                            <video controls crossorigin playsinline>
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="576">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <a href="" class="video-title">面接タイトル <i class="fa fa-solid fa-arrow-right ms-3"></i></a>
                        <p>
                            広告出稿したい広告主さまと広告掲載したいメディアさまを繋ぎ、収益を上げるお手伝いを担う営業部門の業務をご紹介します。
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="mb-4">
                            <video controls crossorigin playsinline>
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="576">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <a href="" class="video-title">面接タイトル <i class="fa fa-solid fa-arrow-right ms-3"></i></a>
                        <p>
                            広告出稿したい広告主さまと広告掲載したいメディアさまを繋ぎ、収益を上げるお手伝いを担う営業部門の業務をご紹介します。
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="mb-4">
                            <video controls crossorigin playsinline>
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="576">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <a href="" class="video-title">面接タイトル <i class="fa fa-solid fa-arrow-right ms-3"></i></a>
                        <p>
                            広告出稿したい広告主さまと広告掲載したいメディアさまを繋ぎ、収益を上げるお手伝いを担う営業部門の業務をご紹介します。
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="mb-4">
                            <video controls crossorigin playsinline>
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="576">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <a href="" class="video-title">面接タイトル <i class="fa fa-solid fa-arrow-right ms-3"></i></a>
                        <p>
                            広告出稿したい広告主さまと広告掲載したいメディアさまを繋ぎ、収益を上げるお手伝いを担う営業部門の業務をご紹介します。
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="mb-4">
                            <video controls crossorigin playsinline>
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="576">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <a href="" class="video-title">面接タイトル <i class="fa fa-solid fa-arrow-right ms-3"></i></a>
                        <p>
                            広告出稿したい広告主さまと広告掲載したいメディアさまを繋ぎ、収益を上げるお手伝いを担う営業部門の業務をご紹介します。
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                        <a href="{{ route('getJobList') }}" class="btn btn-primary mx-auto px-5 py-2">もっと見る <i
                                class="fa fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="voice" class="bg-active">
            <h1 class="text-center text-white fw-bolder mb-0 mb-md-5">お客様の声</h1>
            <div class="overflow-hidden w-100 pt-5">
                <div class="slider center voice-slider">
                    <div>
                        <div class="px-2 px-lg-5">
                            <div class="mb-4">
                                <video controls crossorigin playsinline>
                                    <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4"
                                        size="576">
                                    <a>Video Oynatılamıyor</a>
                                </video>
                            </div>
                            <p class="text-white">
                                クリステンは、新型コロナウイルス感染症によるロックダウン中、自宅で安全に過ごしながら、Willo を使用して 20 人以上のスタッフをリモートで雇用することに成功しました。
                            </p>
                            <p class="text-white">
                                「採用プロセスを自動化することでチーム全体を採用し、時間を節約しました。」
                            </p>
                            <div class="col-12 d-flex justify-content-center gap-2">
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-regular fa-star text-white"></i>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-4">
                                <img src="{{ asset('/assets/img/logos/01.png') }}" alt="" class="slider-logo"
                                    style="width: 100px; height: 100px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="px-2 px-lg-5">
                            <div class="mb-4">
                                <video controls crossorigin playsinline>
                                    <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4"
                                        size="576">
                                    <a>Video Oynatılamıyor</a>
                                </video>
                            </div>
                            <p class="text-white">
                                クリステンは、新型コロナウイルス感染症によるロックダウン中、自宅で安全に過ごしながら、Willo を使用して 20 人以上のスタッフをリモートで雇用することに成功しました。
                            </p>
                            <p class="text-white">
                                「採用プロセスを自動化することでチーム全体を採用し、時間を節約しました。」
                            </p>
                            <div class="col-12 d-flex justify-content-center gap-2">
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-regular fa-star text-white"></i>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-4">
                                <img src="{{ asset('/assets/img/logos/01.png') }}" alt="" class="slider-logo"
                                    style="width: 100px; height: 100px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="px-2 px-lg-5">
                            <div class="mb-4">
                                <video controls crossorigin playsinline>
                                    <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4"
                                        size="576">
                                    <a>Video Oynatılamıyor</a>
                                </video>
                            </div>
                            <p class="text-white">
                                クリステンは、新型コロナウイルス感染症によるロックダウン中、自宅で安全に過ごしながら、Willo を使用して 20 人以上のスタッフをリモートで雇用することに成功しました。
                            </p>
                            <p class="text-white">
                                「採用プロセスを自動化することでチーム全体を採用し、時間を節約しました。」
                            </p>
                            <div class="col-12 d-flex justify-content-center gap-2">
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-solid fa-star text-warning"></i>
                                <i class="fa fa-regular fa-star text-white"></i>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-4">
                                <img src="{{ asset('/assets/img/logos/01.png') }}" alt="" class="slider-logo"
                                    style="width: 100px; height: 100px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="recruit-step">
            <div class="container">
                <h1 class="text-center text-primary fw-bolder mb-0 mb-md-5">ステップ</h1>
                <div class="row pt-5 justify-content-between">
                    <div class="col-lg-2">
                        <h3 class="text-center mb-4">Step1</h3>
                        <img src="{{ asset('/assets/img/step/01.png') }}" alt="" class="mb-4">
                        <h3 class="text-center mb-2">設定</h3>
                        <p class="text-center">答えてほしい面接の質問を書きます。</p>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="text-center mb-4">Step2</h3>
                        <img src="{{ asset('/assets/img/step/02.png') }}" alt="" class="mb-4">
                        <h3 class="text-center mb-2">共有</h3>
                        <p class="text-center">招待リンクを候補者に送信します (ワンクリックで)。</p>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="text-center mb-4">Step3</h3>
                        <img src="{{ asset('/assets/img/step/03.png') }}" alt="" class="mb-4">
                        <h3 class="text-center mb-2">応答</h3>
                        <p class="text-center">候補者は面接を完了します。</p>
                    </div>
                    <div class="col-lg-2 pb-5 pb-md-0">
                        <h3 class="text-center mb-4">Step4</h3>
                        <img src="{{ asset('/assets/img/step/04.png') }}" alt="" class="mb-4">
                        <h3 class="text-center mb-2">レビュー</h3>
                        <p class="text-center pb-5 pb-md-0">候補者の回答を簡単に確認し、候補リストに入れ、共有します。</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="contact-footer position-relative">
        <div
            class="contact container position-absolute top-0 start-50 translate-middle bg-active px-2 py-5 p-md-5 w-100 rounded">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto text-white">
                    <h1 class="mb-5">お問い合わせ</h1>
                    <p>我々のAI面接作成システムについて、お客様の具体的な要望をお聞かせください。<br>
                        一つ一つの要望を丁寧にヒアリングさせていただきます。</p>
                    <p>利用開始のタイミングや、コスト面についても、どんなことでもお気軽にご相談ください。</p>
                    <p>専門の営業スタッフがすぐにご対応し、詳細をお伺いいたします。</p>
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
                    <a href="/" class="text-center">
                        <img src="{{ asset('/assets/img/logo01.png') }}" alt="">
                    </a>
                </div>
                <p class="text-center m-0">〒236-0017 神奈川県横浜市金沢区西柴1-7-13</p>
                <p class="text-center">TEL：0120-659-646</p>
                <div class="social w-100 d-flex justify-content-center align-items-center gap-4">
                    <a href="">
                        <i class="fa fa-brands fa-facebook-square fs-1"></i>
                    </a>
                    <a href="https://twitter.com/KIRIHARE1">
                        <i class="fa fa-brands fa-twitter fs-1"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-brands fa-square-instagram fs-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright bg-dark mt-4">
            <p class="text-center text-white m-0 py-4">Copyright © AI採用｜KIRIHARE AI採用 All Rights Reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('/assets/js/common/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/common/plyr.min.js') }}"></script>
    <script src="{{ asset('/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('/assets/js/top/top.js') }}"></script>
</body>

</html>