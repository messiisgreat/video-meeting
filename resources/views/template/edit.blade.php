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
                            <input type="text" value="{{ $message->title }}" class="form-control rounded-pill"
                                id="title" placeholder="テンプレートのタイトル">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="type" class="form-label px-3">テンプレートの種類</label>
                            <select name="type" id="type" class="form-select rounded-pill">
                                <option value="email" @if ($message->type == 'email') selected @endif>E メール</option>
                                <option value="sms" @if ($message->type == 'sms') selected @endif>SMS</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="trigger" class="form-label px-3">テンプレートトリガー</label>
                            <select name="trigger" id="trigger" class="form-select rounded-pill">
                                <option value="invite" @if ($message->type == 'invite')  @endif>招待時</option>
                                <option value="success" @if ($message->type == 'success')  @endif>回答返送時</option>
                                <option value="reminder" @if ($message->type == 'reminder')  @endif>回答にエラー</option>
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
                            <button class="btn btn-secondary rounded-pill" type="submit" id="save">保 存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        $(document).ready(function() {
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
            quill.on('text-change', function(delta, oldDelta, source) {
                if (source == 'api') {
                    console.log("An API call triggered this change.");
                } else if (source == 'user') {
                    let content = new String(quill.getContents().ops[0].insert)
                    if (content == '\n') {
                        $("#save").removeClass("bg-primary").attr("disabled", "");

                    } else {
                        $("#save").addClass("bg-primary").removeAttr("disabled");
                        $("#content").val(content);
                    }
                }
            });
            @if ($message->content)
                @php
                    $content = $message->content;
                    $preprocessedContent = str_replace("'", '\'', $content);
                    $preprocessedContent = str_replace('"', '\"', $preprocessedContent);
                @endphp
                quill.setText("{!! $preprocessedContent !!}");
            @endif

            $("form").submit(function(e) {
                e.preventDefault();
                message_add();
            })

            function message_add() {
                let title = $("#title").val().trim();
                let type = $("#type").val().trim();
                let trigger = $("#trigger").val().trim();
                let content = $("#content").val().trim();
                let token = $("meta[name=csrf-token]").attr("content");
                if (title == "" || type == "" || trigger == "" || content == "") {
                    alert("内容を正確に入力してください。");
                    return;
                }
                if (type = "sms") {
                    content = new String(quill.getContents().ops[0].insert);
                }

                let postData = {
                    _token: token,
                    title,
                    type,
                    trigger,
                    content,
                }
                $.post(
                    "/template",
                    postData,
                    function(data, status) {
                        console.log(data, status);
                        if (status = 'success') {
                            window.location.href = "/template"
                        }
                    }
                )
            }

            $("#type").change(function(e) {
                if (e.target.value == "sms") {
                    $("#trigger option:nth-child(2)").hide();
                } else {
                    $("#trigger option:nth-child(2)").show();
                }
            })
        })
    </script>
@endsection
