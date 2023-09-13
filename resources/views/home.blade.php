@extends('layouts.company')

@section('content')
<link rel="stylesheet" href="./assets/css/collection/style.css">
<main>
    <!-- CARD BOX -->
    <section id="card-box">
        <div class="container">
            <div class="card position-relativer mt-5">
                <a class="close position-absolute fs-4" href="javascript:;"><i class="fa-regular fa-plus cursor-pointer"></i></a>
                <h4 class="mb-3">こんにちは、始めましょう...</h4>
                <p class="mb-2">次の手順に従って 3 分以内に面接を開始するか、ビデオをご覧ください
                </p>
                <p class="mb-2">
                    <a href="{{ route('company.create') }}"><span class="text-primary fs-4 align-middle"><i class="fa-regular fa-circle-check"></i></span>
                        会社概要を設定しましょう</a>
                </p>
                <p class="mb-2">
                    <a href="{{ route('myjob.create') }}"><span class="text-primary fs-4 align-middle"><i class="fa-regular fa-circle-check"></i></span>
                        最初のインタビューを作成しましょう</a>
                </p>
                <p class="mb-2">
                    <a href="{{ route('invite-people') }}"><span class="text-primary fs-4 align-middle"><i class="fa-regular fa-circle-check"></i></span>
                        インタビューに人々を招待しましょう</a>
                </p>
            </div>
        </div>

    </section>
    <!-- END CARD BOX -->
    <!-- DASHBOARD -->
    <section id="sec-dashboard">
        <div class="container pt-4">
            <div class="state px-3 d-flex justify-content-around justify-content-lg-between align-items-center mb-2">
                <div class="value d-flex gap-5">
                    <div class="pe-2">
                        <span class="text-primary">開始</span>
                        0人
                    </div>
                    <div class="pe-2">
                        <span class="text-primary">回答した</span>
                        0人(0.00%)
                    </div>
                </div>
                <div class="w-auto">

                </div>
                <select type="text" class="form-select rounded-pill w-auto fs-6" id="input1" placeholder="">
                    <option value="1">本日</option>
                    <option value="2">昨日</option>
                    <option value="3">過去7日</option>
                    <option value="4">過去30日</option>
                    <option value="4">今月</option>
                    <option value="5">先月</option>
                </select>
            </div>
            <div id="dashboard">
                <canvas id="chart" style="width:100%; height: 300px;"></canvas>
            </div>
        </div>

    </section>
    <!-- END DASHBOARD -->
    <!-- CARD BOX -->
    <section id="sec-card-box">
        <div class="container pt-5">
            <div class="d-flex justify-content-around justify-content-xxl-between gap-2 fs-14 flex-wrap">
                <div class="card w-25">
                    <p class="mb-4">すべてのアクティブなインタビュー</p>
                    <p class="fs-4">0</p>
                    <p class="mt-4 pt-3">
                        <a href="{{ route('myjob.index') }}">アクティブなインタビューを見る</a>
                    </p>
                    <p>
                        <a href="{{ route('myjob.index') }}">新しいインタビューをリストする</a>
                    </p>
                </div>
                <div class="card w-25">
                    <p class="mb-4">回答率</p>
                    <p class="fs-4">0.00%</p>
                </div>
                <div class="card w-25">
                    <p class="mb-4">現在の計画</p>
                    <p class="fs-4">成長</p>
                    <p class="mt-4 pt-3">反応</p>
                    <div class="mb-2 d-flex align-items-center gap-2">
                        <div>0</div>
                        <div class="flex-grow-1">
                            <div style="width: 50%;" class="bg-primary border border-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="card w-25">
                    <p class="mb-4">質問がありますか?</p>
                    <p class="fs-4"></p>
                    <p class="mt-4 pt-3"> </p>
                    <a href="/contact" class="btn mt-5 mx-4 text-center px-4 rounded-5 text-white fw-bold fs-14" id="job_add">
                        サポート問い合わせ先
                    </a>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- CARD BOX -->
</main>

<script src="./assets/js/collection/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
    $(document).ready(function() {

        $("#chart").width($("#dashboard").width())
        const xValues = ["6/1", "6/2", "6/3", "6/4", "6/5", "6/6", "6/7", "6/8", "6/9", "6/10"];

        new Chart("chart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [0, 1, 1, 3, 4, 3, 5, 2, 2, 4],
                    borderColor: "#FF33FF",
                    fill: false
                }, {
                    data: [0, 1, 2, 2, 3, 2, 2, 4, 3, 3],
                    borderColor: "#15D1F8",
                    fill: false
                }]
            },
            options: {

                responsive: true, // Adjust based on parent container size
                maintainAspectRatio: false, // Chart will not take in aspect ratio, allowing full customisability.
                legend: {
                    display: false
                }
            }
        });

    })
</script>
@endsection