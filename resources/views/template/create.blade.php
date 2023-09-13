@extends('layouts.company')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/assets/css/template-list/create.css') }}">

<main class="pt-5">
    <div class="container">
        <div class="row">
            <ul class="list-inline">
                <li class="list-inline-item me-2">
                    <a class="u-link-v5" href="/">
                        <i class="fa-solid fa-play me-2"></i>ライブラリ
                    </a>
                </li>
                <li class="list-inline-item me-2">
                    <label class="u-link-v5 g-color-main" href="#">
                        <i class="fa fa-angle-right me-2"></i>テンプレートの作成
                    </label>
                </li>
            </ul>
        </div>
        <div class="row mt-5">
            <form action="" method="post" class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label px-3">テンプレートのタイトル</label>
                        <input type="text" class="form-control rounded-pill" id="title" placeholder="テンプレートのタイトル">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="type" class="form-label px-3">テンプレートの種類</label>
                        <select name="type" id="type" class="form-select rounded-pill">
                            <option value="email">E メール</option>
                            <option value="sms">SMS</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="trigger" class="form-label px-3">テンプレートトリガー</label>
                        <select name="trigger" id="trigger" class="form-select rounded-pill">
                            <option value="invite">招待時</option>
                            <option value="success">回答返送時</option>
                            <option value="reminder">回答にエラー</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <p class="m-0">テンプレートの内容</p>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-solid fa-eye"></i> プレビュー
                        </a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div id="editor">

                    </div>
                    <input type="hidden" name="content" id="content">
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <input class="btn btn-secondary rounded-pill" id="submit" type="submit" id="save" value="保 存">
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{ asset('/assets/js/template/create.js') }}"></script>
@endsection