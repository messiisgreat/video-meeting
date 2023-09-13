@extends('layouts.company')

@section('content')

<link rel="stylesheet" href="{{ asset('/assets/css/collection/style.css') }}">

<!-- Select2 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

<!-- Select2 JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/i18n/ja.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>

<main style="min-height: calc(100vh - 251px);">
    <section id="sec_condistions">
        <div class="container px-5">
            <div class="row flex-column flex-md-row justify-content-between gap-4 flex-wrap flex-xl-nowrap">
                <div class="col-lg-2">
                    <input class="form-control rounded-5 fs-14 h-100" type="text" placeholder="タイトルで検索する">
                </div>
                <div class="col-lg-2 position-relative">
                    <input name="" id="" class="form-select select2 w-100 rounded-pill" placeholder="会社名による検索">
                    <div class="select-cus position-absolute card p-3 shadow rounded-4">
                        <div class="cus-search">
                            <input type="text" name="search" class="form-control select-search" placeholder="検索...">
                        </div>
                        <div class="cus-options py-2">
                            <div class="cus-notfound"><span>見つかりません</span></div>
                            <div class="cus-option"><span>会社ごとにフ</span></div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-primary rounded-2 ok">申し込み</button>
                            <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                        </div>
                        <div class="cus-bg position-fixed">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 position-relative">
                    <input name="" id="" class="form-select select2 w-100 rounded-pill" placeholder="所有者名による検索">
                    <div class="select-cus position-absolute card p-3 shadow rounded-4">
                        <div class="cus-search">
                            <input type="text" name="search" class="form-control select-search" placeholder="検索...">
                        </div>
                        <div class="cus-options py-2">
                            <div class="cus-notfound"><span>見つかりません</span></div>
                            <div class="cus-option"><span>所有者でフィ</span></div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-primary rounded-2 ok">申し込み</button>
                            <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                        </div>
                        <div class="cus-bg position-fixed">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 position-relative">
                    <input name="" id="" class="form-select select2 w-100 rounded-pill" placeholder="ステータスによる検索">
                    <div class="select-cus position-absolute card p-3 shadow rounded-4">
                        <div class="cus-search">
                            <input type="text" name="search" class="form-control select-search" placeholder="検索...">
                        </div>
                        <div class="cus-options py-2">
                            <div class="cus-notfound"><span>見つかりません</span></div>
                            <div class="cus-option"><span>所有者でフィ</span></div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-primary rounded-2 ok">申し込み</button>
                            <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                        </div>
                        <div class="cus-bg position-fixed">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a class="btn text-center px-4 px-xl-5 rounded-5 text-white fw-bold" id="job_add" href="{{ route('myjob.create') }}">
                        <i class="fa-regular fa-plus me-2"></i> 作成
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="sec_jobs_table" class=" px-2 px-md-0">
        <div class="container pt-4">
            <table class="table table-bordered mt-3 mt-xl-5">
                <thead>
                    <tr class="border-top-0">
                        <th class="rounded-top-4 rounded-end-0">募集項目名</th>
                        <th>募集会社名</th>
                        <th>募集終了日</th>
                        <th>現在の応募者数</th>
                        <th>募集中/募集終了</th>
                        <th class="rounded-top-4 rounded-start-0"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">
                            <div class="fs-14">募集項目名</div>
                            <div class="fs-12">募集項目名</div>
                        </td>
                        <td>
                            <div>募集会社名</div>
                            <div>abcd1234@gmail.com</div>
                        </td>
                        <td>2023/07/20
                        </td>
                        <td><a href="{{ route('myjob.show', ['myjob' => 1]) }}">20</a>
                        </td>
                        <td>
                            <div class="cs-state">募集中</div>
                        </td>
                        <td class="text-right">
                            <a href="" class="me-3">
                                <i class="fa-solid fa-link"></i>
                            </a>
                            <a href="" class="me-3">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <a href="#" class="me-3">
                                <i class="fa-solid fa-copy"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>募集項目名</div>
                            <div>募集項目名</div>
                        </td>
                        <td>
                            <div>募集会社名</div>
                            <div>abcd1234@gmail.com</div>
                        </td>
                        <td>2023/07/20
                        </td>
                        <td><a href="./company-job-details.html">20</a>
                        </td>
                        <td>
                            <div class="cs-state bg-red-subscribe text-black">募集終了</div>
                        </td>
                        <td class="text-right">
                            <a href="" class="me-3">
                                <i class="fa-solid fa-link"></i>
                            </a>
                            <a href="" class="me-3">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <a href="#" class="me-3">
                                <i class="fa-solid fa-copy"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>

<script>
    function copy() {
        let doms = document.getElementsByClassName("fa-copy");
        let len = doms.length;
        for (let i = 0; i < len; i++) {
            doms[i].onclick = copy_set;
        }
    }

    function copy_set(e) {
        let dom = e.target.parentElement.parentElement.parentElement;
        let new_dom = dom.cloneNode(true);
        dom.insertAdjacentElement("afterend", new_dom);

        // show();
        copy();
        del();
    }

    function del() {
        let doms = document.getElementsByClassName("fa-trash");
        let len = doms.length;
        for (let i = 0; i < len; i++) {
            doms[i].onclick = delete_set;
        }
    }

    function delete_set(e) {
        e.target.parentElement.parentElement.parentElement.remove();
    }
    copy();
    del()
    
    $(".select2").focus(function(e) {
        $(".select2 + .select-cus").hide();
        $(e.target).next().show();
        $(".cus-bg").show();
    })

    $(".select-cus .cus-option span").click(function(e) {
        $(e.target).parent().parent().parent().hide();
        $(e.target).parent().parent().parent().prev().val(e.target.textContent);
    })

    $(".select-cus .ok").click(function(e) {
        $(e.target).parent().parent().hide();
        $(e.target).parent().parent().prev().val($(e.target).parent().parent().find('input').val());
    })

    $(".select-cus .cancel").click(function(e) {
        $(e.target).parent().parent().hide();
        $(e.target).parent().parent().prev().val("");
    })

    $(".cus-bg").click(function(e) {
        $(e.target).parent().hide();
        $(e.target).parent().prev().val("");
    })

    $(".select-search").keyup(function(e) {

        let listDom = e.target.parentElement.nextElementSibling.getElementsByTagName("DIV");
        let val = e.target.value.trim();
        let listData = [];
        let len = listDom.length;
        let nooptionsdom = e.target.parentElement.nextElementSibling.firstElementChild;
        console.log(nooptionsdom)
        nooptionsdom.style.display = "block"

        for (let i = 1; i < len; i++) {
            if (val.length == 0) {
                listDom[i].style.display = "block";
                nooptionsdom.style.display = "none"
            } else {
                if (listDom[i].textContent.indexOf(val) != -1) {
                    listDom[i].style.display = "block";
                    nooptionsdom.style.display = "none"
                } else {
                    listDom[i].style.display = "none";
                }
            }
        }

    })
</script>

@endsection