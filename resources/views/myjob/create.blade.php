@extends('layouts.company')

@section('content')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/assets/css/create-interview/index.css') }}">

<main class="pt-5">
    <div class="container mb-5">
        <!-- nav link -->
        <div class="row">
            <ul class="list-inline">
                <li class="list-inline-item me-2">
                    <a class="u-link-v5" href="{{ route('myjob.index') }}">
                        <i class="fa-solid fa-play me-2"></i>インタビュー
                    </a>
                </li>
                <li class="list-inline-item me-2">
                    <label class="u-link-v5 g-color-main" href="#">
                        <i class="fa fa-angle-right me-2"></i>インタビュー作成
                    </label>
                </li>
            </ul>
        </div>
        <!-- end nav link -->
        <!-- steps -->
        <div class="row mt-4">
            <div id="steps" class="col-12 d-flex justify-content-center align-items-center smaller">
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle bg-secondary-white p-3 d-flex justify-content-center align-items-center mb-2 bg-active" style="width: 55px; height: 55px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.498" height="25.468" viewBox="0 0 22.498 25.468">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V23.761H20.791V11.881H8.91V0ZM11.881,0V8.91h8.91ZM2.97,5.94H5.94V8.91H2.97Zm0,5.94H5.94v2.97H2.97Zm0,5.94H14.851v2.97H2.97Z" transform="translate(0.5 1.207)" fill="#fff" stroke="#4ca7ee" stroke-width="1" />
                        </svg>
                    </div>
                    <label>セットアップ</label>
                </div>
                <div class="mb-5 fs-2 ms-1 me-3">
                    <span>------</span>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle p-3 bg-secondary-white d-flex justify-content-center align-items-center mb-2" style="width: 55px; height: 55px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Group_2215" data-name="Group 2215" transform="translate(-872 -254)">
                                <g id="Group_2212" data-name="Group 2212" transform="translate(872 254)">
                                    <path id="Path_81" data-name="Path 81" d="M5.6,18.39h.8v-.8H5.6Zm0,4.8H4.8a.8.8,0,0,0,.44.715.809.809,0,0,0,.84-.075Zm6.4-4.8v-.8h-.265l-.215.16ZM7.2,6.395H6.4v1.6h.8Zm9.6,1.6h.8v-1.6h-.8Zm-9.6,3.2H6.4v1.6h.8Zm6.4,1.6h.8v-1.6h-.8ZM4.8,18.39v4.8H6.4v-4.8Zm1.28,5.435,6.4-4.8-.96-1.28-6.4,4.8ZM12,19.19h9.6v-1.6H12Zm9.6,0a2.4,2.4,0,0,0,2.4-2.4H22.4a.8.8,0,0,1-.8.8Zm2.4-2.4V2.4H22.4V16.79ZM24,2.4A2.4,2.4,0,0,0,21.6,0V1.6a.8.8,0,0,1,.8.8ZM21.6,0H2.4V1.6H21.6ZM2.4,0A2.4,2.4,0,0,0,0,2.4H1.6a.8.8,0,0,1,.8-.8ZM0,2.4V16.79H1.6V2.4ZM0,16.79a2.4,2.4,0,0,0,2.4,2.4v-1.6a.8.8,0,0,1-.8-.8Zm2.4,2.4H5.6v-1.6H2.4Zm4.8-11.2h9.6v-1.6H7.2Zm0,4.8h6.4v-1.6H7.2Z" fill="#fff" />
                                    <path id="Path_82" data-name="Path 82" d="M0,0H24V24H0Z" fill="none" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <label>質問</label>
                </div>
                <div class="mb-5 fs-2 ms-3 me-1">
                    <span>------</span>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle p-3 bg-secondary-white d-flex justify-content-center align-items-center mb-2" style="width: 55px; height: 55px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                            <g id="Group_2216" data-name="Group 2216" transform="translate(-1026 -252)">
                                <path id="Path_92" data-name="Path 92" d="M10,0c5.523,0,10,4.029,10,9s-4.477,9-10,9a10.772,10.772,0,0,1-6.442-2.151l-2.195.7.86-1.89A8.252,8.252,0,0,1,0,9C0,4.029,4.477,0,10,0Z" transform="translate(1029 256)" fill="#fff" />
                                <g id="Group_2211" data-name="Group 2211" transform="translate(1026 252)">
                                    <path id="Path_79" data-name="Path 79" d="M6,25.314l1.408-4.225A8.038,8.038,0,0,1,9.683,9.849a10.681,10.681,0,0,1,12.832.52,7.977,7.977,0,0,1,1.116,11.375,10.549,10.549,0,0,1-12.54,2.486L6,25.314" transform="translate(-2.75 -3.647)" fill="none" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_80" data-name="Path 80" d="M0,0H26V26H0Z" fill="none" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <label>テンプレート</label>
                </div>
                <div class="mb-5 fs-2 ms-1 me-3">
                    <span>------</span>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle p-3 bg-secondary-white d-flex justify-content-center align-items-center mb-2" style="width: 55px; height: 55px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.063" height="27.422" viewBox="0 0 30.063 27.422">
                            <g id="Layer_1" transform="translate(0.552 0.899)">
                                <g id="Group_2213" data-name="Group 2213" transform="translate(0 12.011)">
                                    <path id="Path_83" data-name="Path 83" d="M482.8,975.862a4.532,4.532,0,0,1,4.391-3.951,3.9,3.9,0,0,1,.849.093,5.141,5.141,0,0,1,.03-.538,5.584,5.584,0,0,1,5.409-4.866,4.268,4.268,0,0,1,4.323,4.866" transform="translate(-482.8 -966.6)" fill="none" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                    <path id="Path_84" data-name="Path 84" d="M1044.819,990.562a3.465,3.465,0,0,0-3.509-3.951,4.168,4.168,0,0,0-.868.093c.038-.177.068-.355.09-.538a4.268,4.268,0,0,0-4.323-4.866,5.584,5.584,0,0,0-5.409,4.866" transform="translate(-1015.836 -980.899)" fill="none" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                </g>
                                <g id="Group_2214" data-name="Group 2214" transform="matrix(0.999, -0.035, 0.035, 0.999, 8.379, 0.03)">
                                    <path id="Path_85" data-name="Path 85" d="M876.924,546.538a16.522,16.522,0,0,0,1.892-.156c8.3-13.555,1.065-18.636-.582-19.573a.67.67,0,0,0-.65,0c-1.742.934-9.478,6.016-2.537,19.573A15.432,15.432,0,0,0,876.924,546.538Z" transform="translate(-871.25 -526.725)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                    <path id="Path_86" data-name="Path 86" d="M839.256,1098.2h0a4.409,4.409,0,0,0-1.868,4.88l.6,1.884,3.012-2.709Z" transform="translate(-837.203 -1082.595)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                    <path id="Path_87" data-name="Path 87" d="M1117.049,1098.2h0a4.088,4.088,0,0,1,1.382,4.88l-.789,1.884-2.742-2.709Z" transform="translate(-1107.317 -1082.595)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                    <ellipse id="Ellipse_29" data-name="Ellipse 29" cx="1.95" cy="1.854" rx="1.95" ry="1.854" transform="translate(3.634 6.831) rotate(-44.283)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                    <path id="Path_88" data-name="Path 88" d="M945.6,1167a33.32,33.32,0,0,0,5.573,0" transform="translate(-942.64 -1149.517)" fill="none" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                </g>
                                <line id="Line_25" data-name="Line 25" y1="3.004" x2="1.775" transform="translate(11.701 22.385)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                <line id="Line_26" data-name="Line 26" y1="2.935" x2="0.137" transform="translate(15.27 23.065)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                                <line id="Line_27" data-name="Line 27" x1="1.578" y1="3.02" transform="translate(17.342 22.369)" fill="#fff" stroke="#4ca7ee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" />
                            </g>
                        </svg>
                    </div>
                    <label>公開する</label>
                </div>
            </div>
        </div>
        <!-- end steps -->
    </div>

    <!-- DESCRIPTION -->
    <div class="container" id="description">
        <!-- FORM GROUP -->
        <div class="w-100 pt-5 px-5 fs-14">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="mb-3">
                        <label for="input1" class="form-label px-4 mb-2 pb-1">募集職種</label>
                        <input type="text" class="form-control px-4 rounded-5" id="input1" placeholder="募集職種の入力">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-3 pb-2">
                        <div class="d-flex justify-content-between px-4 pb-1">
                            <label for="input1" class="form-label">給料</label>
                            <div class="text-secondary">オプション</div>
                        </div>
                        <input type="text" class="form-control px-4 rounded-5" id="input2" placeholder="給料の入力">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="mb-3">
                        <label for="input1" class="form-label px-4 mb-2 pb-1">会社名</label>
                        <input type="text" class="form-control px-4 rounded-5" id="input1" placeholder="会社名の入力">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-3 pb-2">
                        <div class="d-flex justify-content-between px-4 pb-1">
                            <label for="input1" class="form-label">ビデオの紹介 &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="13.33" height="13.33" viewBox="0 0 13.33 13.33">
                                    <g id="Icon_feather-info" data-name="Icon feather-info" transform="translate(-2.5 -2.5)">
                                        <path id="Path_93" data-name="Path 93" d="M15.33,9.165A6.165,6.165,0,1,1,9.165,3,6.165,6.165,0,0,1,15.33,9.165Z" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_94" data-name="Path 94" d="M18,20.466V18" transform="translate(-8.835 -8.835)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_95" data-name="Path 95" d="M18,12h0" transform="translate(-8.835 -5.301)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </label>
                            <div class="text-secondary d-flex gap-3">
                                <span>
                                    自分の記録
                                </span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="state_toggle">
                                </div>
                            </div>
                        </div>
                        <input type="text" class="form-control px-4 rounded-5" id="video_url" placeholder="YouTubeビデオのリンクを入力してください">
                    </div>
                </div>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END FORM GROUP -->
        <!-- INTRODUCE CONTENT -->
        <div class="w-100">
            <div class="px-5 pb-3">
                会社を追加
            </div>
            <!-- VIDEO -->
            <div class="w-100 px-5" id="description_video">
                <div class="row card rounded-4 p-4 flex-row flex-wrap">
                    <div class="col-12 col-xl-7 text-center" id="preview">

                        <video class="w-100" autoplay muted playsinline id="videoLive" style="background-color: #747474;"></video>
                        <video class="none w-100" controls playsinline id="videoRecorded"></video>
                    </div>
                    <div class="col-12 col-xl-5 text-center">
                        <p class="pt-3">個人的な紹介ビデオをする</p>
                        <p class="pt-1 pb-4">回答率の向上•次のステップを説明する機会•ブランド を商単に伝える•視聴者との信頼関係を築く</p>
                        <button id="record" class="btn-normal text-white bg-active mb-2 w-100 max-300">録音を閧始</button>
                        <!-- <button id="stop" class="btn-normal text-white bg-active mb-2 w-100 max-300">stop</button> -->
                        <p class="pt-1 pb-1">また</p>
                        <input type="file" class="d-none" id="file_upload">
                        <button id="btn_upload" class="btn-normal w-100 bg-white border border-primary bg-hover-primary max-300">アップロード&nbsp;&nbsp;<i class="fa-solid fa-cloud-arrow-up"></i></button>
                    </div>
                </div>

            </div>
            <!-- END VIDEO -->
            <div class="px-5 pt-4 pb-2 d-flex justify-content-between">
                <div>説明</div>
                <div class="text-secondary">オプション</div>
            </div>
            <!-- TEXT EDITOR -->
            <div class="w-100 mx-0 mx-md-4">
                <div class="" id="editor"></div>
            </div>
            <!-- END TEXTEDITOR -->
        </div>
        <!-- END INTRODUCE CONTENT -->
    </div>
    <!-- END DESCRIPTION -->
    <!-- MAKE QUESTIONS -->
    <div class="container none" id="questions">
        <div class="max-710 m-auto d-flex flex-column gap-4 fs-14" id="question_box">
            <div class="card p-3 position-relative question question-video" id="question1" data-no="1">
                <div class="question-no position-absolute circle pt-1 p-lg-0 text-center fs-5 fw-bold rounded-circle bg-active text-white">
                    1
                </div>
                <div class="ps-5">
                    <input type="text" class="form-control border-start-0 outline-none shadow-none border-secoandary border-top-0 border-end-0 input-title" placeholder="質問のタイトル">
                </div>
                <div class="w-100 ps-5 fs-5 d-none">
                    <span class="fw-bold">B</span>&nbsp;&nbsp;&nbsp;
                    <span class="fst-italic">I</span>&nbsp;&nbsp;&nbsp;
                    <span class="text-decoration-underline">U</span>&nbsp;&nbsp;&nbsp;
                    <span class=""><i class="fa-solid fa-link"></i></span>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="row m-0 mt-4 card_input">
                    <div class="col-12 col-xl-6 input-type mb-4">
                        <label for="input1" class="form-label px-4 mb-1">回答方法の選択</label>
                        <div class="input-group fs-6 rounded-5">
                            <label class="input-group-text justify-content-center rounded-start-5 bg-white w50" for="answer_type"><i class="fa-solid fa-video"></i>
                                <i class="fa-solid fa-microphone"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-file-arrow-up"></i>
                                <i class="fa-solid fa-comments"></i>
                            </label>
                            <select class="form-select rounded-end-5 answer_type" id="answer_type">
                                <option selected value="ビデオ">ビデオ</option>
                                <option value="オーディオ">オーディオ</option>
                                <option value="文章">文章</option>
                                <option value="ファイル">ファイル</option>
                                <option value="AIチャット">AIチャット</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 input-retake">
                        <div class="d-flex justify-content-between px-4">
                            <label for="input1" class="form-label">リテイク</label>
                            <div class="text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.656" height="11.656" viewBox="0 0 11.656 11.656">
                                    <g id="Icon_feather-info" data-name="Icon feather-info" transform="translate(-2.5 -2.5)">
                                        <path id="Path_93" data-name="Path 93" d="M13.656,8.328A5.328,5.328,0,1,1,8.328,3,5.328,5.328,0,0,1,13.656,8.328Z" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_94" data-name="Path 94" d="M18,20.131V18" transform="translate(-9.672 -9.672)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_95" data-name="Path 95" d="M18,12h0" transform="translate(-9.672 -5.803)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="input-group-text  rounded-start-5 bg-white border-end-0" for="input1"><i class="fa-solid fa-repeat"></i></label>
                            <select type="text" class="form-select rounded-end-5 w50 retake" id="input1">
                                <option selected value="0">0 回</option>
                                <option value="1回">1回</option>
                                <option value="2回">2回</option>
                                <option value="3回">3回</option>
                                <option value="4回">4回</option>
                                <option value="5回">5回</option>
                                <option value="制限なし">制限なし</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 input-time">
                        <label for="input1" class="form-label px-4 mb-1">回答の時間</label>
                        <div class="input-group">
                            <label class="input-group-text w50  rounded-start-5 bg-white border-end-0" for="input1"><i class="fa-solid fa-stopwatch"></i></label>
                            <select type="text" class="form-select rounded-end-5 time" id="input1" placeholder="回答時間">
                                <option value="1">1分</option>
                                <option value="2">2分</option>
                                <option value="3">3分</option>
                                <option value="4">4分</option>
                                <option value="5">5分</option>
                                <option value="制限なし">制限なし</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 input-limit none">
                        <label for="input1" class="form-label px-4 mb-1">単語制限</label>
                        <div class="input-group">
                            <select type="text" class="form-select rounded-pill limit" id="input1" placeholder="回答時間">
                                <option value="文字のみ">文字のみ</option>
                                <option value="イラスト">イラスト</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 input-max none">
                        <label for="input1" class="form-label px-4 mb-1">最大文字数</label>
                        <div class="input-group">
                            <input type="number" class="form-control rounded-pill max" min=1 value="500" max=500 step="10">
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 input-thinking-time">
                        <label for="input1" class="form-label px-4 mb-1">シンキングタイムの設定</label>
                        <div class="row">
                            <div class="input-group w-50">
                                <span class="input-group-text rounded-start-5 bg-white border-end-0"><i class="fa-solid fa-hourglass-start"></i></span>
                                <input type="number" class="form-control rounded-end-5 thinking_hour" placeholder="時" min=0 aria-label="" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group w-50">
                                <span class="input-group-text rounded-start-5 bg-white border-end-0"><i class="fa-solid fa-hourglass-start"></i></span>
                                <input type="number" class="form-control rounded-end-5 thinking_minute" placeholder="分" min=0 max=59 aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card_preview fs-14 px-4">
                    <div class="col-12 col-xl-6 input-type">
                        <p>回答方法の選択</p>
                        <p class="text-secondary-subtle"><i class="fa-solid fa-video"></i><i class="fa-solid fa-microphone"></i><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-file-arrow-up"></i><i class="fa-solid fa-comments"></i>
                            <span class="dis_answer_type">ビデオ</span>
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 input-retake">
                        <p class="mb-1">リテイク</p>
                        <p class="text-secondary">
                            <span class="dis_retake">制限なし</span>
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 input-time">
                        <p>回答の時間</p>
                        <p class="text-secondary"><i class="fa-solid fa-stopwatch"></i><span class="dis_time">1</span><span class="dis_time_minute">分</span>
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 input-limit none">
                        <p>単語制限</p>
                        <p class="text-secondary"><i class="fa-solid fa-stopwatch"></i></span class="dis_limit">
                            文字</span>
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 input-max none">
                        <p>最大文字数</p>
                        <p class="text-secondary"><i class="fa-solid fa-stopwatch"></i> <span class="dis_max">500</span>字
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 input-thinking-time">
                        <p>シンキングタイムの設定</p>
                        <p class="text-secondary"><i class="fa-solid fa-stopwatch"></i> <span class="dis_thinking_hour">0</span>時 <span class="dis_thinking_minute">0</span>分
                        </p>
                    </div>
                    <!-- end card preview -->
                </div>
                <div class="w-100 d-flex justify-content-end gap-3 mt-5 operators">
                    <div class="copy">
                        <i class="fa-regular fa-copy"></i>
                    </div>
                    <div class="delete">
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                    <div class="border border-end-1 border-secondary-subtle">

                    </div>
                    <div class="up">
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>
                    <div class="down">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
            </div>

            <button id="add_questioin" class="btn btn-normal p-5 w-100 bg-hover-secondary text-active">新しい質問</button>
        </div>
    </div>
    <!-- END MAKING QUESTIONS -->
    <!-- NOTIFICATION MESSAGE -->
    <div class="container none" id="notification">
        <div class="w-100 pt-5 px-5 fs-14">
            <div class="row">
                <div class="col-12 pb-3 pt-3">
                    <div class="col-12 ps-4 fs-6">招待</div>
                </div>
                <div class="col-12 col-xl-6 mb-3 pt-1 ">
                    <div class="d-flex justify-content-between pb-1 px-4">
                        <label for="input1" class="form-label"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;メールテンプレート</label>
                        <a class="text-active" href="javascript:;"><i class="fa-solid fa-eye me-2"></i>プレビュー</a>
                    </div>
                    <select type="text" class="form-select rounded-5">
                        <option selected> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-12 col-xl-6 mb-3 py ">
                    <div class="d-flex justify-content-between pb-1 px-4">
                        <label for="input1" class="form-label"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;SMS
                            テンプレート</label>
                        <a class="text-active" href="javascript:;"><i class="fa-solid fa-eye me-2"></i>プレビュー</a>
                    </div>
                    <select type="text" class="form-select rounded-5">
                        <option selected> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pb-3 pt-3">
                    <div class="col-12 ps-4 fs-6">不完全なリマインダー</div>
                </div>
                <div class="col-12 col-xl-6 mb-3 pt-1 ">
                    <div class="d-flex justify-content-between pb-1 px-4">
                        <label for="input1" class="form-label"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;メールテンプレート</label>
                        <a class="text-active" href="javascript:;"><i class="fa-solid fa-eye me-2"></i>プレビュー</a>
                    </div>
                    <select type="text" class="form-select rounded-5">
                        <option selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-12 col-xl-6 mb-3 py ">
                    <div class="d-flex justify-content-between pb-1 px-4">
                        <label for="input1" class="form-label"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;SMS
                            テンプレート</label>
                        <a class="text-active" href="javascript:;"><i class="fa-solid fa-eye me-2"></i>プレビュー</a>
                    </div>
                    <select type="text" class="form-select rounded-5">
                        <option selected> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pb-3 pt-3">
                    <div class="col-12 ps-4 fs-6">面接終了通知</div>
                </div>
                <div class="col-12 col-xl-6 mb-3 pt-1 ">
                    <div class="d-flex justify-content-between pb-1 px-4">
                        <label for="input1" class="form-label"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;メールテンプレート</label>
                        <a class="text-active" href="javascript:;"><i class="fa-solid fa-eye me-2"></i>プレビュー</a>
                    </div>
                    <select type="text" class="form-select rounded-5">
                        <option selected> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <!-- END ROW -->
        </div>
    </div>
    <!-- END NOTIFICATION MESSAGE -->
    <!-- PUBLIC -->
    <div class="container max-600 fs-14 none" id="public">
        <div class="row">
            <div class="col-12 mb-3 pt-1 ">
                <div class="d-flex justify-content-between pb-1 px-4">
                    <label for="input1" class="form-label">
                        回答提出期限</label>
                </div>
                <select type="text" class="form-select rounded-5" id="date_limit">
                    <option value="not"> 日付制限なし</option>
                </select>
            </div>
            <div class="col-12 mb-3 pt-1 ">
                <div class="d-flex justify-content-between pb-1 px-4">
                    <label for="input1" class="form-label">
                        リダイレクトURL</label>
                </div>
                <input type="text" class="form-control rounded-5">
            </div>
            <div class="col-12 mb-3 pt-1 ">
                <div class="d-flex justify-content-between pb-1 px-4">
                    <label for="input1" class="form-label">
                        既定の言語</label>
                </div>
                <select type="text" class="form-select rounded-5">
                    <option value="jp" selected> 日本語</option>
                    <option value="en">English</option>
                </select>
            </div>
            <div class="col-12 d-flex justify-content-between">
                <span>「表示のヒント」ページ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.656" height="11.656" viewBox="0 0 11.656 11.656">
                        <path id="Path_93" data-name="Path 93" d="M13.656,8.328A5.328,5.328,0,1,1,8.328,3,5.328,5.328,0,0,1,13.656,8.328Z" transform="translate(-2.5 -2.5)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                        <path id="Path_94" data-name="Path 94" d="M18,20.131V18" transform="translate(-12.172 -12.172)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                        <path id="Path_95" data-name="Path 95" d="M18,12h0" transform="translate(-12.172 -8.303)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </svg>

                </span>
                <div class="form-check form-switch w-auto">
                    <input class="form-check-input" data-onstyle="success" type="checkbox" role="switch" checked>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between mt-3">
                <span>フォローアップのための空き状況をリクエストする&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.656" height="11.656" viewBox="0 0 11.656 11.656">
                        <path id="Path_93" data-name="Path 93" d="M13.656,8.328A5.328,5.328,0,1,1,8.328,3,5.328,5.328,0,0,1,13.656,8.328Z" transform="translate(-2.5 -2.5)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                        <path id="Path_94" data-name="Path 94" d="M18,20.131V18" transform="translate(-12.172 -12.172)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                        <path id="Path_95" data-name="Path 95" d="M18,12h0" transform="translate(-12.172 -8.303)" fill="none" stroke="#a1a1a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </svg>

                </span>
                <div class="form-check form-switch w-auto">
                    <input class="form-check-input " data-onstyle="success" type="checkbox" role="switch" checked>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between mt-2">
                <span class="text-active">他の人と共有する
                </span>
            </div>
            <div class="w-100 mt-2 pt-1">
                <table class="table" id="public_table">
                    <thead>
                        <tr class="bg-secondary-subtle">
                            <td class="bg-secondary-subtle">他の人と共有する</td>
                            <td class="bg-secondary-subtle text-center"><i class="fa-solid fa-user-group"></i></td>
                            <td class="bg-secondary-subtle text-center"><i class="fa-solid fa-bell"></i></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pt-4"><span>abcd1234@gmail.com</span></td>
                            <td></td>
                            <td class="text-center"><input type="checkbox" name="" id=""></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="w-100 fs-14 text-center">
                <p>ほぼ完了しました！ 「公開」をクリックして保存します。</p>
                <p>この情報はいつでも編集できます。 次のページで候補者を招待できます。 ご質問がございましたら、お問い合わせください。</p>
            </div>

        </div>
    </div>
    <!-- END PUBLIC -->
    <div class="container">
        <div class="w-100 d-flex justify-content-center align-items-baseline text-center mt-4 mb-5">
            <button class="none btn  btn-normal rounded-5 bg-white border border-primary me-4" id="before">戻る</button>
            <button class="btn  btn-normal rounded-5 active" id="next">次に</button>
            <a class="btn  btn-normal rounded-5 bg-active text-white none" id="btn_public" href="{{ route('invite-people') }}">公開</a>
        </div>

    </div>
</main>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{ asset('/assets/js/create-interview/index.js') }}"></script>
<script>
    function copy() {
        let doms = document.getElementsByClassName("copy");
        let len = doms.length;
        for (let i = 0; i < len; i++) {
            doms[i].onclick = copy_set;
        }
    }

    function copy_set(e) {
        let dom = e.target.parentElement.parentElement;
        if (!$(dom).hasClass("card")) {
            dom = e.target.parentElement.parentElement.parentElement;
        }
        let new_dom = dom.cloneNode(true);
        dom.insertAdjacentElement("afterend", new_dom);
        func()

        $(new_dom).find(".answer_type").val($(dom).find(".answer_type").val())
        $(new_dom).find(".retake").val($(dom).find(".retake").val())
        $(new_dom).find(".time").val($(dom).find(".time").val())
        $(new_dom).find(".limit").val($(dom).find(".limit").val())
        $(new_dom).find(".max").val($(dom).find(".max").val())
        $(new_dom).find(".thinking_hour").val($(dom).find(".thinking_hour").val())
        $(new_dom).find(".thinking_minute").val($(dom).find(".thinking_minute").val())

        if ($(e.target).hasClass("card"))
            $(e.target).addClass("active");
        else
            $(e.target).parents(".card").addClass("active");

        e.preventDefault();
        copy();
        up();
        down();
        del();
        recount();
    }

    function up() {
        let doms = document.getElementsByClassName("fa-chevron-up");
        let len = doms.length;
        for (let i = 1; i < len; i++) {
            doms[i].onclick = up_set;
        }
    }

    function up_set(e) {
        let dom = e.target.parentElement.parentElement.parentElement;
        let prevedom = dom.previousElementSibling;

        $(dom).insertBefore($(prevedom));
        e.preventDefault();
        copy();
        del();
        up();
        down();
        recount()
    }

    function down() {
        let doms = document.getElementsByClassName("fa-chevron-down");
        let len = doms.length;
        for (let i = 0; i < len - 1; i++) {
            doms[i].onclick = down_set;
        }

    }

    function down_set(e) {
        let dom = e.target.parentElement.parentElement.parentElement;
        let nextedom = dom.nextElementSibling;

        $(dom).insertAfter($(nextedom));
        e.preventDefault();
        copy();
        del();
        up();
        down();
        recount()
    }

    function del() {
        let doms = document.getElementsByClassName("fa-trash-can");
        let len = doms.length;
        for (let i = 0; i < len; i++) {
            doms[i].onclick = del_set;
        }
    }

    function del_set(e) {
        let dom = e.target.parentElement.parentElement.parentElement;
        $(dom).remove();
        e.preventDefault();
        copy();
        del();
        up();
        down();
        recount();
    }

    function recount() {
        let doms = document.getElementsByClassName("card");
        let len = doms.length;
        for (let i = 0; i < len; i++) {
            $(doms[i]).find(".question-no").html(i)
        }
    }

    copy();
    del();
    up();
    down();
    let recording = false;

    async function record() {
        const videoLive = document.querySelector('#videoLive')
        const videoRecorded = document.querySelector('#videoRecorded')
        let stream;

        try {
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: true,
                }).then(function(sss) {
                    stream = sss;

                    videoLive.srcObject = stream

                    if (!MediaRecorder.isTypeSupported('video/webm')) { // <2>
                        console.warn('video/webm is not supported')
                    }

                    const mediaRecorder = new MediaRecorder(stream, { // <3>
                        mimeType: 'video/webm',
                    })

                    mediaRecorder.start()
                    recording = true;
                    $("#record").html('録音を停止')


                    $("#record").click(function() {

                        if (!recording) {
                            mediaRecorder.start() // <4>
                            $("#record").html('録音を停止')
                            $("#videoLive").show();
                            $("#videoRecorded").hide();

                        } else {
                            mediaRecorder.stop()
                            $("#record").html('録音を閧始')
                            $("#videoLive").hide();
                            $("#videoRecorded").show();

                        }
                        recording = !recording;
                    })


                    mediaRecorder.addEventListener('dataavailable', event => {
                        videoRecorded.src = URL.createObjectURL(event.data) // <6>
                    })
                }).catch(function(res) {
                    console.log(res);
                    alert("カメラを接続してください。")
                })
            } else {
                console.error('getUserMedia()はサポートされていません。\n httpsで接続してください。');
            }

        } catch (e) {
            alert("現在、規約ではサポートしていません。httpsで接続してください。")
        }


    }
    let flag = true;

    $("#record").click(function() {
        if (flag) {
            record();
            flag = false;
        }
    })
</script>


@endsection