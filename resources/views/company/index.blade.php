@extends('layouts.company')

@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/companyMana/list.css') }}">
<main class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="w-100 bordered rounded shadow-sm py-4 px-3">
                    <div class="col-12 px-2 d-flex justify-content-between align-items-center mb-3">
                        <a class="m-0" href="{{ route('home') }}">会社名</a>
                        <p class="text-active m-0">デフォルト <i class="fa fa-solid fa-circle-check"></i></p>
                    </div>
                    <div class="col-12 px-2 d-flex justify-content-between align-items-center">
                        <p class="m-0">求人 0</p>
                        <div class="">
                            <a href="" class="me-2"><i class="fa fa-edit"></i></a>
                            <a href="" class="ms-2"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="w-100 bordered rounded shadow-sm py-4 px-3">
                    <div class="col-12 px-2 d-flex justify-content-between align-items-center mb-3">
                        <a class="m-0" href="{{ route('home') }}">会社名</a>
                        <p class="text-active m-0">デフォルト <i class="fa fa-solid fa-circle-check"></i></p>
                    </div>
                    <div class="col-12 px-2 d-flex justify-content-between align-items-center">
                        <p class="m-0">求人 0</p>
                        <div class="">
                            <a href="" class="me-2"><i class="fa fa-edit"></i></a>
                            <a href="" class="ms-2"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="w-100 bordered rounded shadow-sm py-4 px-3">
                    <div class="col-12 px-2 d-flex justify-content-between align-items-center mb-3">
                        <a class="m-0" href="{{ route('home') }}">会社名</a>
                        <p class="text-active m-0">デフォルト <i class="fa fa-solid fa-circle-check"></i></p>
                    </div>
                    <div class="col-12 px-2 d-flex justify-content-between align-items-center">
                        <p class="m-0">求人 0</p>
                        <div class="">
                            <a href="" class="me-2"><i class="fa fa-edit"></i></a>
                            <a href="" class="ms-2"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <a class="d-flex flex-column align-items-center w-100 bordered rounded shadow-sm py-4 px-3 text-active" href="{{ route('company.create') }}">
                    <i class="fa fa-solid fa-plus fs-2 mb-2"></i>
                    <span>会社の作成</span>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection