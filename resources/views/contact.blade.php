<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('/assets/css/common/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/common/plyr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/assets/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/top/contact.css') }}">
</head>

<body>
    <nav id="header" class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a href="">
                <img src="./assets/img/logo01.png" alt="">
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
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('register') }}">登録</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('login') }}">ログイン</a></li>
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
            <a href="{{ route('register') }}" class="py-4 text-center">登録</a>
            <a href="{{ route('login') }}" class="py-4 text-center">ログイン</a>
        </div>
    </div>

    <main class="pb-lg-5">
        <section class="main-visual d-flex justify-content-center align-items-center">
            <h1 class="text-active">お問い合わせ</h1>
        </section>
        <section class="py-md-5">
            <div class="container px-md-5">
                <p>弊社へのお問い合わせ誠にありがとうございます。以下のフォームより必要事項をご入力の上、個人情報保護方針に同意してご送信下さい。</p>
                <p>※機種依存文字・半角カタカナ・旧漢字は文字化け及びシステムエラーの原因となりますので、ご使用をお控え下さい。</p>
                <form action="#" method="post" class="pt-5 gap-4">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-5 d-flex justify-content-start mb-2 mb-md-0 justify-content-md-end">
                            <label for="companyName" class="me-4">御社名</label>
                            <span class="bg-danger text-white px-2 py-1 rounded">必須</span>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="companyName" id="companyName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-md-5 d-flex justify-content-start mb-2 mb-md-0 justify-content-md-end">
                            <label for="companyName" class="me-4">部署名</label>
                            <span class="bg-danger text-white px-2 py-1 rounded">必須</span>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="companyName" id="companyName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-md-5 d-flex justify-content-start mb-2 mb-md-0 justify-content-md-end">
                            <label for="companyName" class="me-4">ご担当者名</label>
                            <span class="bg-danger text-white px-2 py-1 rounded">必須</span>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="companyName" id="companyName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-md-5 d-flex justify-content-start mb-2 mb-md-0 justify-content-md-end">
                            <label for="companyName" class="me-4">ご担当者名(フリガナ)</label>
                            <span class="bg-active text-white px-2 py-1 rounded">オプション</span>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="companyName" id="companyName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-md-5 d-flex justify-content-start mb-2 mb-md-0 justify-content-md-end">
                            <label for="companyName" class="me-4">電話番号</label>
                            <span class="bg-danger text-white px-2 py-1 rounded">必須</span>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="companyName" id="companyName">
                        </div>
                    </div>
                    <div class="row align-items-start mb-4">
                        <div class="col-md-5 d-flex justify-content-start mb-2 mb-md-0 justify-content-md-end">
                            <label for="companyName" class="me-4">お問い合わせ内容</label>
                            <span class="bg-danger text-white px-2 py-1 rounded">必須</span>
                        </div>
                        <div class="col-md-7">
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <p class="text-center mb-5">※入力内容の確認はございません。送信ボタンを押すとすぐに送信されます</p>
                    <div class="d-flex justify-content-center col-12">
                        <button type="submit" class="btn btn-primary px-5">送信</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="contact-footer position-relative">
        <div class="container">
            <div class="footer d-flex flex-column align-items-center">
                <div class="footer-logo mb-4">
                    <a href="" class="text-center">
                        <img src="./assets/img/logo01.png" alt="">
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
    <script src="{{ asset('/assets/js/common/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/common/plyr.min.js') }}"></script>
    <script src="{{ asset('/assets/js/top/contact.js') }}"></script>
</body>

</html>