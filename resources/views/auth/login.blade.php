@extends('layouts.auth')

@section('content')
<main>
    <section class="main-visual w-100 p-0 vh-100 background-position-top">
        <div class="container d-flex justify-content-center align-items-start flex-column vh-100 pt-4">
            <form class="w-100 w-md-75 max-w-450 px-2 px-md-0" action="{{ route('login') }}" method="post">
                @csrf
                <div class="row mb-4">
                    <label for="" class="p-md-0">メールアドレス</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mb-4">
                    <label for="" class="p-md-0">パスワード</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mb-4">
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </div>
                <div class="row">
                    <a href="{{ route('register') }}" class="p-md-0">新しくアカウントを作成する</a>
                </div>
            </form>
        </div>
    </section>
</main>
<script src="{{ asset('/assets/js/top/auth.js') }}"></script>
@endsection