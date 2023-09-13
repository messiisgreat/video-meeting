@extends('layouts.company')

@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/top/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <main>
        <section>
            <div class="container m-1200">
                <div class="justify-content-md-center row">
                    <div class="col-12 col-md-4">
                        <div class="fs-14 card shadow rounded-4 p-4 pb-4 position-relative mr-5 mt-5">
                            <h6 class="fs-16 text-center mb-4 mt-3">{{ $user->name }}</h6>
                            <ul class="list-group border-0 text-overflow-hidden" id="show_profile">
                                <li class="list-group-item border-0 py-1"><i
                                        class="fa-solid fa-envelope me-2"></i>{{ $user->email }}
                                </li>
                                <li class="list-group-item border-0 py-1"><i
                                        class="fa-solid fa-mobile-screen-button me-2"></i><span
                                        id="show_phone">{{ $user->phone }}</span></li>
                                <li class="list-group-item border-0 py-1"><i class="fa-regular fa-building me-2"></i><span
                                        id="show_org_name">{{ $org->name }}</span></li>
                                <li class="list-group-item border-0 py-1"><i class="fa-solid fa-key me-2"></i></li>

                            </ul>
                            <form action="" method="post" id="form_profile" style="display:none;">
                                <ul class="list-group border-0 text-overflow-hidden">
                                    <li class="list-group-item border-0 py-0">
                                        <i class="fa-solid fa-envelope me-2"></i>{{ $user->email }}
                                        <div class="invalid fs-12 hidden">
                                            Required
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 py-0">
                                        <i class="fa-solid fa-mobile-screen-button me-2"></i>
                                        <input type="text" class="border-0 border-bottom" value="{{ $user->phone }}"
                                            id="input_phone">
                                        <div class="invalid fs-12 text-danger hidden">
                                            Required
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 py-0"><i
                                            class="fa-regular fa-building me-2"></i><input type="text"
                                            class="border-0 border-bottom " value="{{ $org->name }}" id="org_name">
                                        <div class="invalid fs-12 text-danger hidden">
                                            Required
                                        </div>
                                    </li>
                                </ul>
                                <div class="w-100 d-flex justify-content-center gap-3 mt-3">
                                    <button class="btn btn-outline-primary" id="cancel">cancel</button>
                                    <input class="btn btn-primary" type="submit" value="submit" id="submit">
                                </div>

                            </form>
                            <div class="position-absolute fs-5" id="edit_profile">
                                {{-- <a href="javascript:;"> --}}
                                <i class="fa-regular fa-edit text-secondary-subtle"></i>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 fs-16 pt-5">
                        <div>
                            <span><i class="fa-regular fs-16 fa-building me-2"></i>{{ $org->name }}</span>
                        </div>
                        <div>
                            <span class=" fs-14">Growth プランの無料トライアルは 15 日で終了します</span>

                        </div>
                        <hr class="border-secondary">
                        <div>
                            <span class="text-secondary fs-14">期間：7月13日～8月13日</span>
                        </div>
                        <div class="mt-2 fs-14">
                            <span>インタビュー:</span>
                        </div>
                        <div class="w-100 d-flex fs-14">
                            <div class="w-auto d-flex me-2 align-items-center">
                                <i class="fa-solid fa-video me-2 text-main"></i>
                            </div>
                            <div class="d-flex flex-column flex-grow-1">
                                <span class="">{{ $org->interviews_count }}</span>
                                <div class="progress w-auto" role="progressbar" style="height: 6px;"
                                    aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" id="interview_progress_bar" style="width: 0%"></div>
                                </div>
                                <div class="text-end"><span>{{ $org->total_interviews }}</span></div>
                            </div>
                            <div class="d-flex align-items-center ms-2 fs-14">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.33" height="13.33"
                                    viewBox="0 0 13.33 13.33">
                                    <g id="Icon_feather-info" data-name="Icon feather-info"
                                        transform="translate(-2.5 -2.5)">
                                        <path id="Path_93" data-name="Path 93"
                                            d="M15.33,9.165A6.165,6.165,0,1,1,9.165,3,6.165,6.165,0,0,1,15.33,9.165Z"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1" />
                                        <path id="Path_94" data-name="Path 94" d="M18,20.466V18"
                                            transform="translate(-8.835 -8.835)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_95" data-name="Path 95" d="M18,12h0"
                                            transform="translate(-8.835 -5.301)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <div class="form-check form-switch mt-3 ps-0 fs-14">
                            <label class="form-check-label ms-2" for="flexSwitchCheckChecked">SMS 招待:</label>
                            <input class="form-check-input ms-0 text-main" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked">
                        </div>
                        <div class="w-100 d-flex fs-14" id="show_sms_status">
                            <div class="w-auto d-flex me-2 align-items-center">
                                <i class="fa-solid fa-video me-2 text-main"></i>
                            </div>
                            <div class="d-flex flex-column flex-grow-1">
                                <span class="">{{ $org->sms_count }}</span>
                                <div class="progress w-auto" role="progressbar" style="height: 6px;"
                                    aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" id="interview_progress_bar" style="width: 0%"></div>
                                </div>
                                <div class="text-end"><span>{{ $org->total_sms }}</span></div>
                            </div>
                            <div class="d-flex align-items-center ms-2 fs-14">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.33" height="13.33"
                                    viewBox="0 0 13.33 13.33">
                                    <g id="Icon_feather-info" data-name="Icon feather-info"
                                        transform="translate(-2.5 -2.5)">
                                        <path id="Path_93" data-name="Path 93"
                                            d="M15.33,9.165A6.165,6.165,0,1,1,9.165,3,6.165,6.165,0,0,1,15.33,9.165Z"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1" />
                                        <path id="Path_94" data-name="Path 94" d="M18,20.466V18"
                                            transform="translate(-8.835 -8.835)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_95" data-name="Path 95" d="M18,12h0"
                                            transform="translate(-8.835 -5.301)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                </svg>

                            </div>
                        </div>
                        <p class="text-secondary mt-3 fs-14">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.33" height="13.33"
                                    viewBox="0 0 13.33 13.33">
                                    <g id="Icon_feather-info" data-name="Icon feather-info"
                                        transform="translate(-2.5 -2.5)">
                                        <path id="Path_93" data-name="Path 93"
                                            d="M15.33,9.165A6.165,6.165,0,1,1,9.165,3,6.165,6.165,0,0,1,15.33,9.165Z"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1" />
                                        <path id="Path_94" data-name="Path 94" d="M18,20.466V18"
                                            transform="translate(-8.835 -8.835)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_95" data-name="Path 95" d="M18,12h0"
                                            transform="translate(-8.835 -5.301)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </span>
                            未使用のインタビューと SMS は翌月に繰り越されません。
                        </p>
                        <hr class="border-secondary">
                        <div class="mt-5 fs-14">
                            <span>総ユーザー数:</span>
                        </div>
                        <p class="mt-3 fs-20 text-main">
                            <i class="fa-solid fa-person me-2"></i>
                            <a href="/users">{{ $org->users_count }}</a>
                        </p>
                        <p class=" fs-14">
                            プランは 2023 年 8 月 13 日に更新されます<br>今月の追加インタビュー: $0.00
                        </p>
                        <hr class="border-secondary-subtle">
                        <div class="w-100 mt-4 rounded-4 card shadow p-3 text-center">
                            <p class=" text-start">
                                <i class="fas text-warning me-2 fa-lock" aria-hidden="true"></i>
                                アップグレードすると、次の機能が利用可能になります。
                            </p>
                            <p class="mb-1 fs-14">
                                <i class="fa-regular fa-circle-check text-main me-2"></i>
                                複数のユーザー
                            </p>
                            <p class="mb-1 fs-14">
                                <i class="fa-regular fa-circle-check text-main me-2"></i>
                                月に 10 件以上の返信
                            </p>
                            <p class="mb-1 fs-14">
                                <i class="fa-regular fa-circle-check text-main me-2"></i>
                                カスタムブランディング
                            </p>
                            <p class="mb-1 fs-14">
                                <i class="fa-regular fa-circle-check text-main me-2"></i>
                                統合
                            </p>
                            <p class=" fs-14">
                                <i class="fa-regular fa-circle-check text-main me-2"></i>
                                + その他
                            </p>
                            <p class="mb-0 fs-14">
                                契約やセットアップ料金は不要、いつでもキャンセル可能:
                            </p>
                            <a href="/upgrade" class="fs-14 btn btn-primary py-2 rounded-5 m-auto px-5">アップグレード</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            let interview_percent = {!! $org->interviews_count !!} / {!! $org->total_interviews !!} * 100 + "%";
            $("#interview_progress_bar").css("width", percent);

            @if ($org->total_sms != 0)
                let sms_percent = {!! $org->sms_count !!} / {!! $org->total_sms !!} * 100 + "%";
                $("#sms_progress_bar").css("width", percent);
            @endif

            $("#flexSwitchCheckChecked").change(function(e) {
                if ($(this).is(':checked')) {
                    $("#show_sms_status").show();
                } else {
                    $("#show_sms_status").hide();
                }

            });

            $("#edit_profile i").click(function() {
                $("#show_profile").toggle();
                $("#form_profile").toggle();
            });

            $("#cancel").click(function(e) {
                e.preventDefault();
                $("#show_profile").show();
                $("#form_profile").hide();
            })

            $("#submit").click(function(e) {
                e.preventDefault();
                let phone = $("#input_phone").val().trim();
                let name = $("#org_name").val().trim();
                //check if the length is greater than 8.
                if (phone.length < 8) {
                    $("#input_phone + div").attr("visivility", "visible");
                } else {
                    $("#org_name + div").attr("visivility", "hidden");
                }

                if (name) {
                    $("#input_name + div").attr("visivility", "visible");
                } else {
                    $("#org_name + div").attr("visivility", "hidden");
                }

                if (phone.length && name) {
                    update();
                }

            });

            function update() {

                let phone = $("#input_phone").val().trim();
                let org_name = $("#org_name").val().trim();
                let token = $("meta[name=csrf-token]").attr("content");
                let postData = {
                    _token: token,
                    phone,
                    org_name,
                }
                $.ajax({
                    url: "/profile",
                    type: 'PUT',
                    data: postData,
                    success: function(data) {
                        toastr.success('変更操作が成功しました。');
                        $("#show_phone").html(phone);
                        $("#show_org_name").html(org_name);
                        $("#show_profile").show();
                        $("#form_profile").hide();
                    },
                    error: function(xhr, status, error) {
                        toastr.error('変更操作が成功しました。');
                    },
                })
            }

        })
    </script>
@endsection
