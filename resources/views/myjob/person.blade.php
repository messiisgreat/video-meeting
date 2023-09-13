@extends('layouts.company')

@section('content')

<link rel="stylesheet" href="{{ asset('/assets/css/common/plyr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/slick/slick.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/slick/slick-theme.css') }}" />

<link rel="stylesheet" href="{{ asset('/assets/css/collection/applicant.css') }}">

<main>
    <section id="sec_applicant">
        <div class="container max-1200 pt-76">
            <div class="row">
                <div class="col-1 pt-5 btn " id="slider_before">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23.44" height="39.881" viewBox="0 0 23.44 39.881">
                        <path id="left" d="M2024.4-6367.952l-9.369,9.369-5.621,5.622,14.99,14.99" transform="translate(-2005.912 6372.901)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="7" />
                    </svg>
                </div>
                <div class="col-10 row slider-for">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="d-flex flex-column flex-md-row">
                                    <!-- avatar -->
                                    <div class="me-4 pt-2 text-center text-md-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                            <g id="avatar-default" transform="translate(-431 -163)">
                                                <circle id="Ellipse_37" data-name="Ellipse 37" cx="50" cy="50" r="50" transform="translate(431 163)" fill="#6e6e6e" />
                                                <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt" d="M23.841,26.822A13.411,13.411,0,1,0,10.431,13.411,13.414,13.414,0,0,0,23.841,26.822ZM35.762,29.8H30.631a16.212,16.212,0,0,1-13.578,0H11.921A11.92,11.92,0,0,0,0,41.723v1.49a4.471,4.471,0,0,0,4.47,4.47H43.213a4.471,4.471,0,0,0,4.47-4.47v-1.49A11.92,11.92,0,0,0,35.762,29.8Z" transform="translate(457.158 189.159)" fill="#fff" />
                                            </g>
                                        </svg>
                                    </div>
                                    <!-- end avatar -->
                                    <div class="px-3  text-center text-md-left">
                                        <p class="fs-4">応募者名</p>

                                        <div class="rounded-4 bg-white border-gray text-yellow">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <p class="pt-3">レビューする</p>
                                        <p class="mb-0">
                                            <a href="" class="text-decoration-underline">採用者名</a>
                                            &nbsp;&nbsp; の&nbsp;&nbsp;
                                            <a href="" class="text-decoration-underline">募集トピック</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 ps-1 text-secondary border-start ps-4 border-5">
                                <div class="d-flex flex-wrap pt-2">
                                    <div class="fs-4  min-30 text-center pe-2">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 col-lg-10">
                                        <span>+852123123123</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>abcd1234@gmail.com</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>日本</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>現地時間:午後 3 時 51 分</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="d-flex flex-column flex-md-row">
                                    <!-- avatar -->
                                    <div class="me-4 pt-2 text-center text-md-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                            <g id="avatar-default" transform="translate(-431 -163)">
                                                <circle id="Ellipse_37" data-name="Ellipse 37" cx="50" cy="50" r="50" transform="translate(431 163)" fill="#6e6e6e" />
                                                <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt" d="M23.841,26.822A13.411,13.411,0,1,0,10.431,13.411,13.414,13.414,0,0,0,23.841,26.822ZM35.762,29.8H30.631a16.212,16.212,0,0,1-13.578,0H11.921A11.92,11.92,0,0,0,0,41.723v1.49a4.471,4.471,0,0,0,4.47,4.47H43.213a4.471,4.471,0,0,0,4.47-4.47v-1.49A11.92,11.92,0,0,0,35.762,29.8Z" transform="translate(457.158 189.159)" fill="#fff" />
                                            </g>
                                        </svg>
                                    </div>
                                    <!-- end avatar -->
                                    <div class="px-3  text-center text-md-left">
                                        <p class="fs-4">応募者名</p>

                                        <div class="rounded-4 bg-white border-gray text-yellow">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <p class="pt-3">レビューする</p>
                                        <p class="mb-0">
                                            <a href="" class="text-decoration-underline">採用者名</a>
                                            &nbsp;&nbsp; の&nbsp;&nbsp;
                                            <a href="" class="text-decoration-underline">募集トピック</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 ps-1 text-secondary border-start ps-4 border-5">
                                <div class="d-flex flex-wrap pt-2">
                                    <div class="fs-4  min-30 text-center pe-2">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 col-lg-10">
                                        <span>+852123123123</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>abcd1234@gmail.com</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>日本</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>現地時間:午後 3 時 51 分</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="d-flex flex-column flex-md-row">
                                    <!-- avatar -->
                                    <div class="me-4 pt-2 text-center text-md-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                            <g id="avatar-default" transform="translate(-431 -163)">
                                                <circle id="Ellipse_37" data-name="Ellipse 37" cx="50" cy="50" r="50" transform="translate(431 163)" fill="#6e6e6e" />
                                                <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt" d="M23.841,26.822A13.411,13.411,0,1,0,10.431,13.411,13.414,13.414,0,0,0,23.841,26.822ZM35.762,29.8H30.631a16.212,16.212,0,0,1-13.578,0H11.921A11.92,11.92,0,0,0,0,41.723v1.49a4.471,4.471,0,0,0,4.47,4.47H43.213a4.471,4.471,0,0,0,4.47-4.47v-1.49A11.92,11.92,0,0,0,35.762,29.8Z" transform="translate(457.158 189.159)" fill="#fff" />
                                            </g>
                                        </svg>
                                    </div>
                                    <!-- end avatar -->
                                    <div class="px-3  text-center text-md-left">
                                        <p class="fs-4">応募者名</p>

                                        <div class="rounded-4 bg-white border-gray text-yellow">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <p class="pt-3">レビューする</p>
                                        <p class="mb-0">
                                            <a href="" class="text-decoration-underline">採用者名</a>
                                            &nbsp;&nbsp; の&nbsp;&nbsp;
                                            <a href="" class="text-decoration-underline">募集トピック</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 ps-1 text-secondary border-start ps-4 border-5">
                                <div class="d-flex flex-wrap pt-2">
                                    <div class="fs-4  min-30 text-center pe-2">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 col-lg-10">
                                        <span>+852123123123</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>abcd1234@gmail.com</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>日本</span>
                                    </div>
                                    <div class="fs-4 min-30 text-center pe-2">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="ps-1 pt-1 col-11 col-sm-10 col-md-11 c col-lg-10">
                                        <span>現地時間:午後 3 時 51 分</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-1 pt-5 btn " id="slider_next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23.44" height="39.881" viewBox="0 0 23.44 39.881">
                        <path id="Path_162" data-name="Path 162" d="M2009.412-6367.952l9.369,9.369,5.621,5.622-14.99,14.99" transform="translate(-2004.462 6372.901)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="7" />
                    </svg>
                </div>
            </div>
            <div class="row mt-5 d-flex flex-column flex-md-row align-items-center gap-4 ms-0 ms-185">
                <button class="btn-normal bg-green-strong w-auto text-white">
                    <i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;受け入れる</button>
                <button class="btn-normal bg-red-strong w-auto text-white" data-bs-toggle="modal" data-bs-target="#refuseModal">
                    <i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;拒絶</button>
                <button class="btn-normal w-auto" data-bs-toggle="modal" data-bs-target="#shareModal">
                    <i class="fa-solid fa-share-nodes"></i>&nbsp;&nbsp;&nbsp;共有</button>
            </div>
        </div>
        <div class="container max-1200 px-70 pt-3">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">インタビュー</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">可用性</a>
                </li>
            </ul><!-- Tab panes -->
            <div class="tab-content">
                <!-- TAB 1 -->
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="w-100 d-flex justify-content-between mt-3 mb-4">
                        <div class="text-end">
                            <img src="{{ asset('/assets/img/application/chat-right.png') }}" alt="chat">
                            &nbsp;&nbsp;&nbsp;質問1
                        </div>
                        <div class="me-4">
                            <span class="me-5">回答 2/8</span>
                            <span class="mx-4"></span>
                            <a class="ms-5" href="{{ asset('/assets/video/interview01.mp4') }}" download id="download">すべてダウンロード&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-download"></i></a>
                        </div>
                    </div>
                    <div class="w-100 d-flex flex-column flex-lg-row gap-4 align-items-center">

                        <div class="w-100 text-center" id="preview-pane">
                            <video controls crossorigin playsinline class="w-100">
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="300">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                        <!-- LIST BOX -->

                        <div class="w-445 card rounded-4 shadow">
                            <div class="container d-flex flex-column gap-3 overflow-y-auto p-3 py-2">
                                <!--WRITING BOX -->
                                <div class="answer-item rounded-2 row m-0 p-1" data-type="writing">
                                    <!-- HEADER -->
                                    <div class="col-6 p-0">
                                        <div class="bg-white w-155 rounded-2 text-center h-100 pt-4">
                                            <i class="fa-solid fa-align-center fs-2"></i>
                                            <div class="mt-3 fs-14">
                                                <span>ワード数: 1</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END HEADER -->
                                    <!-- CONTENT -->
                                    <div class="answer-content text-left col-6 p-0 overflow-hidden">
                                        <div class="w-100 pt-3 pb-2">
                                            <img src="{{ asset('/assets/img/application/chat-right.png') }}" alt="chat">
                                            &nbsp;&nbsp;&nbsp;質問1
                                        </div>
                                        <div class="data">
                                            <p>
                                                さささ
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END BOX -->
                                <!-- video box -->
                                <div class="answer-item rounded-2 row m-0 p-1 active" data-type="video" data-bs-toggle="modal" data-bs-target="#video_preview">
                                    <!-- HEADER -->
                                    <div class="col-6 p-0">
                                        <div class="w-155 text-center h-100">
                                            <video class="rounded-4 w-100 h-100" crossorigin playsinline>
                                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="300">
                                                <a>Video Oynatılamıyor</a>
                                            </video>
                                        </div>
                                    </div>
                                    <!-- END HEADER -->
                                    <!-- CONTENT -->
                                    <div class="answer-content text-left col-6 p-0 overflow-hidden">
                                        <div class="w-100 pt-3 pb-2">
                                            <img src="{{ asset('/assets/img/application/chat-right.png') }}" alt="chat">
                                            &nbsp;&nbsp;&nbsp;質問1
                                        </div>
                                        <p>
                                        回答内容回答内容回答内容回答内容
                                        </p>
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END BOX -->
                                <!-- voice box -->
                                <div class="answer-item rounded-2 row m-0 p-1" data-type="voice" data-url="{{ asset('/assets/video/voice.wav') }}">
                                    <!-- HEADER -->
                                    <div class="col-6 p-0">
                                        <div class="w-155 text-center h-100">
                                            <img class="rounded-4 w-100 h-100" src="{{ asset('/assets/img/application/answer-voice.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- END HEADER -->
                                    <!-- CONTENT -->
                                    <div class="answer-content text-left col-6 p-0 overflow-hidden">
                                        <div class="w-100 pt-3 pb-2">
                                            <img src="{{ asset('/assets/img/application/chat-right.png') }}" alt="chat">
                                            &nbsp;&nbsp;&nbsp;質問1
                                        </div>
                                        <div class="data">
                                            <p>
                                            回答内容回答内容回答内容回答内容
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END BOX -->
                                <!--FILEUPLOAD BOX -->
                                <div class="answer-item rounded-2 row m-0 p-1" data-type="file" data-url="./assets/video/wordpress.rar">
                                    <!-- HEADER -->
                                    <div class="col-6 p-0">
                                        <div class="bg-white w-155 rounded-2 text-center h-100 pt-4">
                                            <i class="fa-solid fa-cloud-arrow-up fs-2"></i>
                                            <div class="mt-3 fs-14">
                                                <span>wordpress.rar</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END HEADER -->
                                    <!-- CONTENT -->
                                    <div class="answer-content text-left col-6 p-0 overflow-hidden">
                                        <div class="w-100 pt-3 pb-2">
                                            <img src="{{ asset('/assets/img/application/chat-right.png') }}" alt="chat">
                                            &nbsp;&nbsp;&nbsp;質問1
                                        </div>
                                        <p>
                                        wordpress.rar
                                        </p>
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END BOX -->
                                <!--CHAT BOX -->
                                <div class="answer-item rounded-2 row m-0 p-1" data-type="chat" data-url="./assets/video/wordpress.rar"  data-bs-toggle="modal" data-bs-target="#chat_preview">
                                    <!-- HEADER -->
                                    <div class="col-6 p-0">
                                        <div class="bg-white w-155 rounded-2 text-center h-100 pt-4">
                                            <i class="fa-regular fa-comments"></i>
                                            <div class="mt-3 fs-14">
                                                <span>AIチャット</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END HEADER -->
                                    <!-- CONTENT -->
                                    <div class="answer-content text-left col-6 p-0 overflow-hidden">
                                        <div class="w-100 pt-3 pb-2">
                                            <img src="{{ asset('/assets/img/application/chat-right.png') }}" alt="chat">
                                            &nbsp;&nbsp;&nbsp;質問5
                                        </div>
                                        <p>
                                        回答内容回答内容回答内容回答内容
                                        </p>
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END BOX -->
                            </div>

                        </div>
                        <!-- END LIST BOX -->
                    </div>
                    <div class="container mt-5">
                        <div class="max-590">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-5 px-4" placeholder="メモを書いてください...">
                            </div>
                            <div class="w-100 d-flex flex-wrap vertial-center aling-items-center justify-content-between">
                                <p class="pt-4 mt-1 ms-5 text-md-nowrap">メモは組織内のユーザーのみに表示されます</p>
                                <button class="btn-normal bg-secondary-subtle mt-4 mx-auto mb-3" id="meeting_book_ok">メモを追加</button>
                            </div>
                            <p>アクティビティ</p>
                            <div class="w-100 d-flex gap-3 ps-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="216" viewBox="0 0 40 216">
                                        <g id="progress" transform="translate(-31 -829)">
                                            <g id="Ellipse_38" data-name="Ellipse 38" transform="translate(31 829)" fill="#fff" stroke="#707070" stroke-width="0.5">
                                                <circle cx="20" cy="20" r="20" stroke="none" />
                                                <circle cx="20" cy="20" r="19.75" fill="none" />
                                            </g>
                                            <g id="Ellipse_39" data-name="Ellipse 39" transform="translate(31 922)" fill="#fff" stroke="#707070" stroke-width="0.5">
                                                <circle cx="20" cy="20" r="20" stroke="none" />
                                                <circle cx="20" cy="20" r="19.75" fill="none" />
                                            </g>
                                            <g id="Ellipse_40" data-name="Ellipse 40" transform="translate(31 1005)" fill="#fff" stroke="#707070" stroke-width="0.5">
                                                <circle cx="20" cy="20" r="20" stroke="none" />
                                                <circle cx="20" cy="20" r="19.75" fill="none" />
                                            </g>
                                            <line id="Line_58" data-name="Line 58" y2="54" transform="translate(51.5 868.5)" fill="none" stroke="#707070" stroke-width="0.5" />
                                            <line id="Line_59" data-name="Line 59" y2="44" transform="translate(51.5 961.5)" fill="none" stroke="#707070" stroke-width="0.5" />
                                            <g id="Group_2359" data-name="Group 2359" transform="translate(38.5 837.5)">
                                                <path id="Path_164" data-name="Path 164" d="M26.917,7.292A7.292,7.292,0,1,1,19.625,0,7.293,7.293,0,0,1,26.917,7.292ZM23.484,4.474a1.028,1.028,0,0,0-1.469,0L18.583,7.9,17.234,6.557a1.039,1.039,0,0,0-1.469,1.469l2.083,2.083a1.028,1.028,0,0,0,1.469,0l4.167-4.167A1.028,1.028,0,0,0,23.484,4.474ZM19.625,16.667A9.339,9.339,0,0,0,24.8,15.109a4.17,4.17,0,0,1-4.135,3.641H15.776l-5.99,3.99a1.042,1.042,0,0,1-1.62-.865V18.75A4.166,4.166,0,0,1,4,14.583V6.25A4.166,4.166,0,0,1,8.167,2.083h3.661a9.377,9.377,0,0,0,7.8,14.583Z" transform="translate(-1.917)" fill="#4ca7ee" />
                                                <path id="Path_165" data-name="Path 165" d="M0,0H25V25H0Z" fill="none" />
                                            </g>
                                            <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M19.928,10.675a11.164,11.164,0,0,0-9.9-6.175,11.166,11.166,0,0,0-9.9,6.175,1.126,1.126,0,0,0,0,1.016,11.164,11.164,0,0,0,9.9,6.175,11.166,11.166,0,0,0,9.9-6.175A1.126,1.126,0,0,0,19.928,10.675Zm-9.9,5.52a5.012,5.012,0,1,1,5.012-5.012A5.012,5.012,0,0,1,10.024,16.2Zm0-8.354a3.317,3.317,0,0,0-.881.132A1.666,1.666,0,0,1,6.815,10.3a3.334,3.334,0,1,0,3.21-2.461Z" transform="translate(40.976 1014.569)" fill="#4ca7ee" />
                                            <g id="Icon_feather-video" data-name="Icon feather-video" transform="translate(40.976 935.47)">
                                                <path id="Path_98" data-name="Path 98" d="M31.152,10.5,24,15.164l7.152,4.664Z" transform="translate(-10.104 -8.635)" fill="#4ca7ee" />
                                                <path id="Path_99" data-name="Path 99" d="M3.544,7.5H14.783a1.961,1.961,0,0,1,2.044,1.866v9.329a1.961,1.961,0,0,1-2.044,1.866H3.544A1.961,1.961,0,0,1,1.5,18.694V9.366A1.961,1.961,0,0,1,3.544,7.5Z" transform="translate(-1.5 -7.5)" fill="#4ca7ee" />
                                            </g>
                                        </g>
                                    </svg>

                                </div>
                                <div class="fs-12">
                                    <p class="fs-14 mb-2">メールが配信されました</p>
                                    <p class="mb-2">招待状の配信: abcd1234@gmail.com</p>
                                    <p>2023/06/29 午後 12:49</p>
                                    <p class="fs-14">応答を受信しました</p>
                                    <p>2023/06/29 午後 12:49</p>
                                    <p class="fs-14 mt-4 mb-2">インタビューページにアクセスしました</p>
                                    <p>2023/06/29 午後 12:48</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mt-5 d-flex gap-5 justify-content-around">
                            <p>ライフサイクル ポリシーに基づいて、
                                このメディアは 6 か月 (26/12/23) 後に自動的に削除されます。</p>
                            <button class="btn-normal text-white align-self-center" id="delete"><span>消去</span></button>
                        </div>
                    </div>
                </div>
                <!-- END TAB 1 -->
                <!-- TAB 2 -->
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <!-- MEETING BOOXING -->
                    <div class="meeting-book">
                        <div class="w-100 pt-3">
                            <table id="booking_table" class="table table-hover table-bordered w-100 text-white text-center">
                                <thead>
                                    <tr class="text-white">
                                        <th class="p-0"><i class="fa-solid fa-clock text-white"></i></th>
                                        <th class="text-white">木曜日</th>
                                        <th class="text-white">金曜日</th>
                                        <th class="text-white">月曜日</th>
                                        <th class="text-white">火曜日</th>
                                        <th class="text-white">水曜日</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">
                                    <tr>
                                        <td>午前8:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td class="active">会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前8:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td class="active">会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前9:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td class="active">会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前9:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前10:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前10:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前11:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前11:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午前12:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後12:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後1:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後1:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後2:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後2:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後3:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後3:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後4:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後4:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後5:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後5:30</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>
                                    <tr>
                                        <td>午後6:00</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                        <td>会議のスケジュールを設定する</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="w-100 text-end">
                            <span>上記の時間帯のどれも当てはまりませんか？&nbsp;&nbsp;&nbsp;;&nbsp;</span>
                            <button class="text-white rounded-5 mb-5 " id="meeting_book_ok">会議を作成する</button>
                        </div>
                    </div>
                    <!-- END MEETING BOOKING -->
                </div>
                <!-- END TAB 2 -->
            </div>
        </div>
    </section>

</main>


<div class="modal fade" id="refuseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="POST" class="py-3">
                    <div class="row justify-content-center gap-4 mb-3">
                        <div class="col-auto">
                            <button class="btn btn-primary">拒絶</button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-secondary">出金</button>
                        </div>
                    </div>
                    <div class="row px-5 gap-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                社風に合わなかった
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                希望する資格を満たしていない
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                最低条件を満たしていない
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                            審査要件を満たしていない
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault5">
                                不完全なアプリケーション
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                            <label class="form-check-label" for="flexRadioDefault6">
                                場所で働く資格がない
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label" for="flexRadioDefault7">
                                誤って伝えられた資格
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                            <label class="form-check-label" for="flexRadioDefault8">
                                より適格な候補者が選択されました
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                            <label class="form-check-label" for="flexRadioDefault9">
                                無反応
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button class="btn btn-primary">保 存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">のリンクを共有</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">他のユーザーと共有できるリンクを生成します。サインインは必要ありません。</p>
                <div class="row mb-3 px-4">
                    <div class="col-9">
                        <input type="text" name="" id="invite_url" class="form-control w-100" placeholder="https://app.willotalent.com/show/kuTG4N/" value="https://app.willotalent.com/show/kuTG4N/">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary w-100" onclick="navigator.clipboard.writeText(document.getElementById('invite_url').value)">コピー</button>
                    </div>
                </div>
                <div class="row mb-3 px-4">
                    <div class="col-6 d-flex justify-content-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">リンク有効</label>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <i class="fa fa-eye me-3"></i> 0 ビュー
                    </div>
                </div>
                <div class="row justify-content-between align-items-center px-4">
                    <div class="col-auto">
                        <i class="fa fa-message me-2"></i>質問1
                        <p class="ms-4">自己紹介</p>
                    </div>
                    <div class="col-auto">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center px-4">
                    <div class="col-auto">
                        <i class="fa fa-message me-2"></i>質問2
                        <p class="ms-4">志望試</p>
                    </div>
                    <div class="col-auto">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center px-4">
                    <div class="col-auto">
                        <i class="fa fa-message me-2"></i>質問3
                        <p class="ms-4">会社でやりたい事</p>
                    </div>
                    <div class="col-auto">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center px-4">
                    <div class="col-auto">
                        <i class="fa fa-message me-2"></i>質問4
                        <p class="ms-4">あなたの情熱</p>
                    </div>
                    <div class="col-auto">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center px-4">
                    <p class="text-center">コンテンツは、このリンクを知っている人なら誰でも公關されます。 このリンクは、信頼できる人とのみ共有してください。</p>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="video_preview" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-4" id="exampleModalToggleLabel">ビデオ回答</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h5 class="px-5">ビデオ</h5>
                        <div class="pre-content border border-primary rounded-4 p-4">
                            <video controls crossorigin playsinline style="width: 100%; height: 100%;">
                                <source src="{{ asset('/assets/video/interview01.mp4') }}" type="video/mp4" size="100">
                                <a>Video Oynatılamıyor</a>
                            </video>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="px-5">評価内容</h5>
                        <div class="eval-content border border-primary rounded-4 p-4">
                            <p>評価内容評価内容評価内容評価内容評価内容</p>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <h5 class="px-5">回答内容</h5>
                        <div class="text-content border border-primary rounded-4 p-4">
                            <p>回答内容回答内容回答内容回答内容</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#video_preview" data-bs-toggle="modal">確認 </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="chat_preview" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-4" id="exampleModalToggleLabel">AIチャット回答</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <h5 class="px-5">チャットメッセージ</h5>
                        <div class="pre-content border border-primary rounded-4 p-4">
                            <p>チャットメッセージチャットメッセージチャットメッセージチャットメッセージ</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="px-5">設問分</h5>
                        <div class="eval-content border border-primary rounded-4 p-4">
                            <p>評価内容評価内容評価内容評価内容評価内容</p>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <h5 class="px-5">評価（テキスト）</h5>
                        <div class="text-content border border-primary rounded-4 p-4">
                            <p>回答内容回答内容回答内容回答内容</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#chatpreview" data-bs-toggle="modal">確認 </button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/assets/js/common/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('/assets/js/common/plyr.min.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/js/slick/slick.js') }}"></script>
<!-- Include the Quill library -->

<script src="{{ asset('/assets/js/collection/applicant.js') }}"></script>
@endsection