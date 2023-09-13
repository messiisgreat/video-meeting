@extends('layouts.company')

@section('content')

<link rel="stylesheet" href="{{ asset('/assets/css/top/profile.css') }}">

<main>
    <section id="users">
        <div class="container m-1200 fs-14">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-between">
                    <span>Admin</span>
                    <span class="text-success">成長<i class="ms-2 fa-solid fa-check fs-18"></i></span>
                </div>
                <div class="col-md-6 offset-md-2 col-xl-4 offset-md-2 offset-xl-4">
                    <!-- input element -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control py-2 rounded-5 " placeholder="有効なメールアドレスを入力してください">
                        <button id="invite" class="btn rounded-5 bg-secondary-subtle text-white py-1 position-absolute">
                            <i class="fa-regular fa-paper-plane text-white me-2 px-1"></i>招待</button>
                        <div class="invalid-feedback w-100">
                            有効なメールアドレスを入力してください
                        </div>
                    </div>

                    <!-- radio button -->
                    <div class="w-100 d-flex flex-wrap  ">
                        <div class="form-check w-auto me-3 pe-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="standard" checked>
                            <label class="form-check-label" for="standard">
                                スタンダード
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
                            </label>
                        </div>
                        <div class="form-check w-auto">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="admin" checked>
                            <label class="form-check-label" for="admin">
                                管理者
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
                            </label>
                        </div>
                    </div>
                    <!-- radio button -->
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <table class="table mt-4 text-center fw-normal">
                    <thead>
                        <tr class="table-sec fw-normal">
                            <th>フルネーム</th>
                            <th>メール</th>
                            <th>電話番号</th>
                            <th>役割</th>
                            <th>ステータス</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-secondary">
                            <td class="border-start">Admin</td>
                            <td>Admin@gmail.com</td>
                            <td>-</td>
                            <td>オーナー</td>
                            <td>参加しました</td>
                            <td class="border-end">
                                <a href="javascript:;">
                                    <i class="fa fa-solid fa-edit me-3"></i>
                                </a>
                                <a href="javascript:;" onclick="">
                                    <i class="fa fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>
@endsection