@extends('layouts.company')

@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/member-list/index.css') }}">

<!-- Select2 CSS -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<style>
    .select2 {
        /* width: auto !important; */
        min-width: 200px;
        /* force fluid responsive */
    }

    .select2-container .select2-selection--single {
        height: 40px;
        border-radius: 20px;
        position: relative;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        line-height: 40px;
    }

    .select2-container .select2-selection--single .select2-selection__arrow {
        top: 8px;
        right: 8px;
    }

    .select2-container .select2-selection--single .select2-container--default .select2-results>.select2-results__options {
        -webkit-overflow-scrolling: touch;
    }

    .select2-button {
        /* color: red; */
        background-color: #337ab7;
        padding: 5px 10px;
        cursor: pointer;
    }

    .select2-dropdown {
        /* width: 200px!important; */
        /* border-radius: 1rem; */
        /* background-color: ; */
    }


    span a {
        font-size: 12px !important;
    }

.select-cus button{
	font-size: 13px!important;
}
</style>

<main class="pt-5">
    <div class="container px-4">
        <div class="row mb-3">
            <div class="col-auto">
                <input type="text" class="form-control rounded-pill" placeholder="応募者氏名 " name="" id="" value="">
            </div>
        </div>
        <div class="row justify-content-between align-items-center mb-5">
            <div class="col-lg-2 mb-3 mb-lg-0 position-relative">
                <!-- <button id="open-dropdown1" class="btn btn-primary p-2 select2-hidden-accessible">検索</button> -->
                <!-- <select name="" id="select1" class="form-select rounded-pill select2" data-no="1">
                    <option value="1">キリハレ株式会社</option>
                    <option value="button"></option>
                </select> -->
                <input name="company" id="company" class="form-select rounded-pill select2" placeholder="募集した会社 " data-no="1">
                <div class="select-cus position-absolute card p-3 shadow rounded-4">
                    <div class="cus-search">
                        <input type="text" name="search-compayny" class="form-control select-search" placeholder="検索...">
                    </div>
                    <div class="cus-options py-2">
                        <div class="cus-notfound"><span>見つかりません</span></div>
                        <div class="cus-option"><span>キリハレ株式会社</span></div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary rounded-2 ok">申し込み</button>
                        <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                    </div>
                    <div class="cus-bg position-fixed">

                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-3 mb-lg-0 position-relative">
                <input name="" id="select2" class="form-select rounded-pill select2" data-no="2" placeholder="募集のタイトル">
                <div class="select-cus position-absolute card p-3 shadow rounded-4">
                    <div class="cus-search">
                        <input type="text" name="search-compayny" class="form-control select-search" placeholder="検索...">
                    </div>
                    <div class="cus-options py-2">
                        <div class="cus-notfound"><span>見つかりません</span></div>
                        <div class="cus-option"><span>技術者募集</span></div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary rounded-2 ok">申し込み</button>
                        <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                    </div>
                    <div class="cus-bg position-fixed">

                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-3 mb-lg-0 position-relative">
                <input name="" id="select3" class="form-select rounded-pill select2" data-no="3" placeholder="応募先">
                <div class="select-cus position-absolute card p-3 shadow rounded-4">
                    <div class="cus-search">
                        <input type="text" name="search-compayny" class="form-control select-search" placeholder="検索...">
                    </div>
                    <div class="cus-options py-2">
                        <div class="cus-notfound"><span>見つかりません</span></div>
                        <div class="cus-option"><span>オーナー</span></div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary rounded-2 ok">申し込み</button>
                        <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                    </div>
                    <div class="cus-bg position-fixed">

                    </div>
                </div>

            </div>
            <div class="col-lg-2 mb-3 mb-lg-0 position-relative">
                <input name="" id="select4" class="form-select rounded-pill select2" data-no="4" placeholder="現時点の評価">
                <div class="select-cus position-absolute card p-3 shadow rounded-4">
                    <div class="cus-search">
                        <input type="text" name="search-company" class="form-control select-search" placeholder="検索…">
                    </div>
                    <div class="cus-options py-2">
                        <div class="cus-notfound"><span>見つかりません</span></div>
                        <div class="cus-option"><span>レビューする</span></div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary rounded-2 ok">申し込み</button>
                        <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                    </div>
                    <div class="cus-bg position-fixed">

                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-3 mb-lg-0 position-relative">
                <input name="" id="select5" class="form-select rounded-pill select2" data-no="5" placeholder="評価">
                <div class="select-cus position-absolute card p-3 shadow rounded-4">
                    <div class="cus-search">
                        <input type="text" name="search-compayny" class="form-control select-search" placeholder="検索...">
                    </div>
                    <div class="cus-options py-2">
                        <div class="cus-notfound"><span>見つかりません</span></div>
                        <div class="cus-option"><span>5</span></div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary rounded-2 ok">申し込み</button>
                        <button class="btn btn-outline-primary ms-3 rounded-2 cancel">リセット </button>
                    </div>
                    <div class="cus-bg position-fixed">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-auto d-flex align-items-center gap-3 mb-4 flex-wrap">
                <p class="m-0">0 個のフィルターが選択されました</p>|
                <p class="m-0">すべてクリア</p>
            </div>
            <div class="col-12">
                <div class="table-responsive border rounded" style="min-height: 500px; overflow-y: auto;">
                    <table class="table" style="min-width: 992px; overflow-x: auto;">
                        <thead>
                            <tr class="bg-secondary-grey">
                                <th class="py-4 text-center">名前</th>
                                <th class="py-4">募集タイトル</th>
                                <th class="py-4">提出日</th>
                                <th class="py-4">ステータス</th>
                                <th class="py-4">評価点</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center gap-2 justify-content-center">
                                        <div class="col-auto">
                                            <img src="./assets/img/avatar/01.png" alt="" style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="col-auto">
                                            <a class="m-0" href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">募集項目名</a><br>
                                            <a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">abcd1234@gmail.com</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="m-0">技術者募集</p>
                                        <p class="m-0">キリハレ株式会社</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="m-0">2023/07/20</p>
                                        <p class="m-0">午後2時8分</p>
                                    </div>
                                </td>
                                <td>
                                    <h5><span class="badge rounded-pill bg-warning text-dark bg-light-warning py-1 px-3">レビューする</span>
                                    </h5>
                                </td>
                                <td>
                                    <div class="">
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center gap-2 justify-content-center">
                                        <div class="col-auto">
                                            <img src="./assets/img/avatar/01.png" alt="" style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="col-auto">
                                            <a class="m-0" href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">募集項目名</a><br>
                                            <a href="{{ route('myjob.person', ['myjob' => 1, 'user_id' => 1]) }}">abcd1234@gmail.com</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="m-0">技術者募集</p>
                                        <p class="m-0">キリハレ株式会社</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="m-0">2023/07/20</p>
                                        <p class="m-0">午後2時8分</p>
                                    </div>
                                </td>
                                <td>
                                    <h5><span class="badge rounded-pill bg-warning text-dark bg-light-warning py-1 px-3">レビューする</span>
                                    </h5>
                                </td>
                                <td>
                                    <div class="">
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <i class="fa fa-solid fa-star text-warning"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
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
    // $(document).ready(function() {
    //     $('#select1').select2({
    //         templateResult: addButtonsToOptions,
    //         // placeholder: "asdfas"
    //     });
    //     $('#select2').select2({
    //         templateResult: addButtonsToOptions,
    //         // placeholder: "asdfas"
    //     });
    //     $('#select3').select2({
    //         templateResult: addButtonsToOptions,
    //         // placeholder: "asdfas"
    //     });
    //     $('#select4').select2({
    //         templateResult: addButtonsToOptions,
    //         // placeholder: "asdfas"
    //     });
    //     $('#select5').select2({
    //         templateResult: addButtonsToOptions,
    //         // placeholder: "asdfas"
    //     });

    //     function addButtonsToOptions(option) {
    //         if (!option.id) {
    //             return option.text;
    //         }

    //         var $option = $('<span></span>');
    //         $option.text(option.text);

    //         if (option.element) {
    //             $option.addClass($(option.element).attr('class'));
    //         }
    //         if (option.id === 'button') {
    //             $option = $('<span><a href="./" class="btn btn-primary ms-1">確認</a><a href="" class="btn text-black border border-outline-primary ms-1 bg-hover-white text-hover-white">キャンセル</a></span>');
    //             // $option.
    //             $option.on('click', function(e) {
    //                 e.preventDefault()
    //                 console.log(e)
    //                 // alert("sadaf")
    //                 // // Perform action for Option 3 button
    //                 if ($('#select1').val() !== 'button') {
    //                     // $('#select1').val('button').trigger('1');
    //                     // let doms = document.getElementsByClassName("select2-results");
    //                     // doms.foreach(function(dom) {
    //                     //     dom.remove();
    //                     // })
    //                     // console.log(doms)
    //                 }
    //             });
    //         }

    //         return $option;
    //     }
    // });
</script>
@endsection