@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('link')
<a class="header__link" href="/register">register</a>
@endsection

@section('content')
<h2 class="login__ttl">Login</h2>
<div class="login__inner">
    <form class="login__form" action="/login" method="post">
        @csrf
        <div class="form__email">
            <label class="login_label" for="email">メールアドレス</label>
            <input class="login__email" type="email" placeholder="text@example.com" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__password">
            <label class="login__label" for="password">パスワード</label>
            <input class="login__input" type="password" name="password" id="password" placeholder="例: coachtech1106" />
        </div>
        <input class="login__btn" type="submit" value="ログイン">
    </form>
</div>
@endsection