@extends('layouts.company')

@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/collection/style.css') }}">
<main>
    <section id="" class="mt-5">
        <div class="container px-3">
            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><i class="fa-solid fa-play"></i>&nbsp;&nbsp;<a
                            href="#">インタビュー</a>&nbsp;&nbsp;&nbsp;</li>
                    <li class="breadcrumb-item active" aria-current="page"><i
                            class="fa-solid fa-angle-right fw-bold"></i>&nbsp;&nbsp;&nbsp;募集トピック</li>
                </ol>
            </nav>
            <div class="w-100 d-flex justify-content-center justify-content-md-between flex-wrap flex-lg-nowrap">
                <div class="d-flex gap-5">
                    <div class="d-flex gap-5">
                        <h4>募集トピック</h4>
                    </div>
                    <div class="cs-state pb-2 bt-2 text-black h-85">ライブ</div>

                </div>
                <div class="d-flex gap-5">
                    <div>ライブ</div>
                    <div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>

                </div>
            </div>
            <p class="pt-1">採用担当名</p>
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column flex-md-row flex-wrap gap-3 px-2 fs-14">
                    <a class="cs-state bg-primary text-white px-4 w-auto" href="">
                        <i class="fa-solid fa-share-nodes"></i>
                        招待
                    </a>
                    <a class="cs-state border-gray bg-white text-black px-4 w-auto" href="">
                        <i class="fa-regular fa-edit"></i>
                        編集
                    </a>
                    <a class="cs-state border-gray bg-white text-black px-4 w-auto" href="">
                        <i class="fa-solid fa-eye"></i>
                        プレビュー
                    </a>
                </div>
                <div class="d-flex">
                    <div class="" style="width:36px;">
                        <img src="{{ asset('/assets/img/avatar/01.png') }}" style="width:44px;height: 44px;"
                            class="rounded-circle border border-1 border-white" alt="">
                    </div>
                    <div class="" style="width:36px;">
                        <img src="{{ asset('/assets/img/avatar/01.png') }}" style="width:44px;height: 44px;"
                            class="rounded-circle border border-1 border-white" alt="">
                    </div>
                    <div class="">
                        <a href="{{ route('invite-people') }}">
                            <img src="{{ asset('/assets/img/avatar/user-plus.png') }}" style="width:44px;height: 44px;" class="rounded-circle border border-1 border-white" alt="">
                        </a>
                    </div>

                </div>
            </div>
            <hr>
            <div class="card-box w-100 d-flex flex-wrap gap-3 px-2 fs-14">
                <div class="card rounded-4 p-3">
                    <div class="row mt-3">
                        <div class="col-4">
                            <span>招待者:</span>
                        </div>
                        <div class="col-8 row">
                            <div class="col-10">
                                <div class="progress h-5 mt-2">
                                    <div class="progress-bar bg-success h-5" role="progressbar" style="width: 0%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2">0</div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <span>レビューする:</span>
                        </div>
                        <div class="col-8 row">
                            <div class="col-10">
                                <div class="progress h-5 mt-2">
                                    <div class="progress-bar bg-info h-5" role="progressbar" style="width: 66%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                            <div class="col-2">2</div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4 pe-0">
                            <span>受け入れられました:</span>
                        </div>
                        <div class="col-8 row">
                            <div class="col-10">
                                <div class="progress h-5 mt-2">
                                    <div class="progress-bar bg-warning h-5" role="progressbar" style="width: 33%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                            <div class="col-2">1</div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <span>拒否されました:</span>
                        </div>
                        <div class="col-8 row">
                            <div class="col-10">
                                <div class="progress h-5 mt-2">
                                    <div class="progress-bar bg-danger h-5" role="progressbar" style="width: 0%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                            <div class="col-2">0</div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-4 p-3">
                    <div class="row mt-3">
                        <div class="col-4">
                            開始:
                        </div>
                        <div class="col-8">
                            3人
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            回答:
                        </div>
                        <div class="col-8">
                            3名（100％）
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            始める:
                        </div>
                        <div class="col-8">
                            2023 年 6 月 29 日
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            終わり:
                        </div>
                        <div class="col-8">
                            終了日なし
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div
                class="w-100 px-3 d-flex flex-column flex-md-row flex-wrap gap-3 align-items-center text-warning justify-content-evenly">
                <input type="text" class="form-control rounded-5 fs-14 max-w-285 lh-lg order-3 order-xl-0"
                    value="面接タイトル">
                <div class="lh-lg text-black">
                    <span>ランキング</span>
                </div>
                <div class="rating rounded-4 bg-white border-gray text-yellow px-3 py-1" data-value="1">
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="rating rounded-4 bg-white border-gray text-yellow px-3 py-1" data-value="2">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="rating rounded-4 bg-white border-gray text-yellow px-3 py-1" data-value="3">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="rating rounded-4 bg-white border-gray text-yellow px-3 py-1" data-value="4">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="rating rounded-4 bg-white border-gray text-yellow px-3 py-1" data-value="5">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <input class="form-control rounded-5 fs-14 max-w-158 ms-auto lh-lg order-4" value="すべてクリア">

            </div>
            <div class="w-100 d-flex row-cols-1 row-cols-sm-2 row-cols-lg-4 flex-wrap px-4 pt-4 pb-5">
                <div class="col1 d-flex flex-column gap-4 px-2 mb-4">
                    <div class=" position-relative">招待されました&nbsp;&nbsp;&nbsp;
                        <span class="badge rounded-pill px-3 bg-1">1</span>
                    </div>
                    <!-- INTERVIEW ITEM -->
                    <div class="bg-5 border-start border-5 border-secondary rounded-end-4 d-flex gap-3 p-2 px-3 pt-3">
                        <div class="avatar">
                            <img src="{{ asset('/assets/img/company/avatar.png') }}" alt="avatar">
                        </div>
                        <div class="content">
                            <p class="fs-14">
                                <a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">応募者名</a>
                            </p>
                            <p class="fs-10">2023 年 6 月 29 日</p>
                        </div>

                    </div>
                    <!-- END INTERVIEW TIEM -->

                </div>
                <div class="col2 d-flex flex-column px-2 gap-4  mb-4">
                    <div class=" position-relative">招待されました&nbsp;&nbsp;&nbsp;
                        <span class="badge rounded-pill px-3 bg-2">2</span>
                    </div>
                    <!-- INTERVIEW ITEM -->
                    <div class="bg-5 border-start border-5 border-primary rounded-end-4 d-flex gap-3 p-2 px-3 pt-3">
                        <div class="avatar">
                            <img src="{{ asset('/assets/img/company/avatar.png') }}" alt="avatar">
                        </div>
                        <div class="content">
                            <p class="fs-14"><a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">応募者名</a></p>
                            <p class="fs-10">2023 年 6 月 29 日</p>
                        </div>

                    </div>
                    <!-- END INTERVIEW TIEM -->
                    <!-- INTERVIEW ITEM -->
                    <div class="bg-5 border-start border-5 border-primary rounded-end-4 d-flex gap-3 p-2 px-3 pt-3">
                        <div class="avatar">
                            <img src="{{ asset('/assets/img/company/avatar.png') }}" alt="avatar">
                        </div>
                        <div class="content">
                            <p class="fs-14"><a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">応募者名</a></p>
                            <p class="fs-10">2023 年 6 月 29 日</p>
                        </div>
                    </div>
                    <!-- END INTERVIEW TIEM -->

                </div>
                <div class="col3 d-flex flex-column gap-4 px-2">
                    <div class=" position-relative">招待されました&nbsp;&nbsp;&nbsp;
                        <span class="badge rounded-pill px-3 bg-3">1</span>
                    </div>
                    <!-- INTERVIEW ITEM -->
                    <div class="bg-5 border-start border-5 border-success rounded-end-4 d-flex gap-3 p-2 px-3 pt-3">
                        <div class="avatar">
                            <img src="{{ asset('/assets/img/company/avatar.png') }}" alt="avatar">
                        </div>
                        <div class="content">
                            <p class="fs-14"><a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">応募者名</a></p>
                            <p class="fs-10">2023 年 6 月 29 日</p>
                            <p class="fs-10 text-warning">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                &nbsp;&nbsp;
                                <span class="text-black">(1)</span>
                            </p>
                        </div>

                    </div>
                    <!-- END INTERVIEW TIEM -->

                </div>
                <div class="col4 d-flex flex-column gap-4 px-2">
                    <div class=" position-relative">招待されました&nbsp;&nbsp;&nbsp;
                        <span class="badge rounded-pill px-3 bg-4">1</span>
                    </div>
                    <!-- INTERVIEW ITEM -->
                    <div class="bg-5 border-start border-5 border-primary rounded-end-4 d-flex gap-3 p-2 px-3 pt-3">
                        <div class="avatar">
                            <img src="{{ asset('/assets/img/company/avatar.png') }}" alt="avatar">
                        </div>
                        <div class="content">
                            <p class="fs-14"><a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">応募者名</a></p>
                            <p class="fs-10">2023 年 6 月 29 日</p>
                        </div>

                    </div>
                    <!-- END INTERVIEW TIEM -->

                </div>
            </div>

        </div>
    </section>


</main>
@endsection