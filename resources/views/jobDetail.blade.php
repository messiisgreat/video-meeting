@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/top/job-detail.css') }}">
<main class="pb-lg-5">
    <section class="pt-md-5 pb-5">
        <div class="container pt-md-5 pb-5 mb-5">
            <div class="col-12 d-flex justify-content-start align-items-center">
                <div class="company-logo mb-4" style="width: 150px;">
                    <img src="./assets/img/logos/01.png" alt="">
                </div>
                <h1 class="company-name">会社名</h1>
            </div>
            <div class="card rounded p-4 border-0 shadow mb-5">
                <div class="row mb-5">
                    <video controls crossorigin playsinline>
                        <source src="./assets/video/interview01.mp4" type="video/mp4" size="576">
                        <a>Video Oynatılamıyor</a>
                    </video>
                </div>
                <div class="row px-0 px-md-4">
                    <h1 class="mb-4">面接タイトル</h1>
                    <p>私たちはつなげる立場なので、広告主さまに対する営業とメディアさまに対する営業の2種類があります。</p>
                    <p>Circuit Xの広告を多くのメディアに掲載してもらうため、メディア（比較サイト、ランキングサイト、ブログなど）をリストアップし、リクルーティング。広告主さまが期待する効果を出す為に、広告を掲載後、効果が得られているか、改善できることなどを提案までいたします。</p>
                    <hr class="my-4 bg-active">
                    <div class="d-flex justify-content-start align-items-center gap-2 gap-lg-4 mb-3">
                        <i class="fa fa-solid fa-user"></i>
                        <strong>業界：</strong>
                        <p class="m-0">IT</p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center gap-2 gap-lg-4 mb-3">
                        <i class="fa fa-solid fa-yen"></i>
                        <strong>給料：</strong>
                        <p class="m-0">250000円</p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center gap-2 gap-lg-4 mb-3">
                        <i class="fa fa-solid fa-map"></i>
                        <strong>住所：</strong>
                        <p class="m-0">Japan</p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center gap-2 gap-lg-4">
                        <i class="fa fa-solid fa-earth"></i>
                        <strong>WebサイトURL：</strong>
                        <a href="https://abcd.com" target="_blank" class="text-active">https://abcd.com</a>
                    </div>
                    <hr class="my-4 bg-active">
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <a href="{{ route('test') }}" class="btn btn-primary px-5">応募する</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('/assets/js/top/job-detail.js') }}"></script>
@endsection