@extends('layouts.company')

@section('content')
<main class="pt-5">
    <div class="container">
        <div class="row">
            <ul class="list-inline">
                <li class="list-inline-item me-2">
                    <a class="u-link-v5" href="{{ route('myjob.index') }}">
                        <i class="fa-solid fa-play me-2"></i>インタビュー
                    </a>
                </li>
                <li class="list-inline-item me-2">
                    <a class="u-link-v5" href="{{ route('myjob.create') }}">
                        <i class="fa fa-angle-right me-2"></i></i>インタビュー作成
                    </a>
                </li>
                <li class="list-inline-item me-2">
                    <label class="u-link-v5 g-color-main" href="#">
                        <i class="fa fa-angle-right me-2"></i>招待
                    </label>
                </li>
            </ul>
        </div>
        <div class="row mt-3">
            <div class="mb-1">
                <h5 class="fs-5">面接タイトル <span class="badge bg-light-success text-success px-3 py-1 rounded-pill">募集中</span></h5>
            </div>
            <div>
                <h6>会社 <i class="fa fa-solid fa-location-dot ms-3 me-1"></i> 日本</h6>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 d-flex justify-content-center flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="161" height="130" viewBox="0 0 161 130">
                    <path id="Icon_awesome-user-plus" data-name="Icon awesome-user-plus" d="M151.125,50.375h-15.5v-15.5A3.886,3.886,0,0,0,131.75,31H124a3.886,3.886,0,0,0-3.875,3.875v15.5h-15.5a3.886,3.886,0,0,0-3.875,3.875V62a3.886,3.886,0,0,0,3.875,3.875h15.5v15.5A3.886,3.886,0,0,0,124,85.25h7.75a3.886,3.886,0,0,0,3.875-3.875v-15.5h15.5A3.886,3.886,0,0,0,155,62V54.25A3.886,3.886,0,0,0,151.125,50.375ZM54.25,62a31,31,0,1,0-31-31A31,31,0,0,0,54.25,62Zm21.7,7.75H71.905a42.159,42.159,0,0,1-35.311,0H32.55A32.558,32.558,0,0,0,0,102.3v10.075A11.628,11.628,0,0,0,11.625,124h85.25A11.628,11.628,0,0,0,108.5,112.375V102.3A32.558,32.558,0,0,0,75.95,69.75Z" transform="translate(3 3)" fill="none" stroke="#4ca7ee" stroke-width="6" />
                </svg>
                <p class="text-center mt-3">招待リンク</p>
            </div>
            <div class="col-lg-5 mx-auto">
                <p class="text-center">このリンクをコピーして候補者と共有してください...</p>
                <p class="text-center">(推奨オプション)</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 mx-auto">
                <div class="rounded-pill position-relative p-2 border">
                    <div class="col col-lg-8">
                        <input type="text" class="link-input form-control border-0 shadow-none" placeholder="https://exam.com/invite/62juBk/" value="https://exam.com/invite/62juBk/" id="invite_url" readonly>
                        <div class="d-none d-lg-block">
                            <div class="position-absolute muted bg-dark text-white rounded text-center fs-12 my-tooltip" style="display:none;padding:8px ;bottom: 40px; right: 10px; font-size: 12px;z-index: 1000;"><span>リンクがコピーされました。</span></div>
                            <button class="btn btn-info py-2 position-absolute rounded-pill end-0 top-50 translate-middle-y me-2 text-white" type="button" style="z-index: 2;" onclick="copy()">リンクをコピーする</button>
                        </div>
                    </div>
                </div>
                <div class="col mt-3 d-block d-lg-none ">
                    <div class="position-absolute muted bg-dark text-white rounded text-center fs-12 my-tooltip" style="display:none;padding:8px ;bottom: 40px; right: 10px; font-size: 12px;z-index: 1000;"><span>リンクがコピーされました。</span></div>
                    <div class="w-100 d-flex justify-content-center">
                        <button class="btn btn-info text-white" onclick="copy()" >リンクをコピーする</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    //copy
    let dom = document.getElementById("invite_url");

    function copy(text) {
        dom.select();
        $(".my-tooltip").fadeIn(1000);
        setTimeout(() => {
            $(".my-tooltip").fadeOut(1000)
        }, 3000);
        navigator.clipboard.writeText(dom.value);
    }
</script>
@endsection