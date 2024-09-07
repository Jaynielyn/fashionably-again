@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('link')
<a class="header__link" href="/login">login</a>
@endsection

@section('content')
<h2 class="register__ttl">Register</h2>
<div class="register__inner">
    <form class="register__form" action="/register" method="post">
        @csrf
        <div class="form__name">
            <label class="register__label">お名前</label>
            <input class="register__input" type="text" placeholder="例:山田 太郎" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form__email">
            <label class="register__label">メールアドレス</label>
            <input class="register__input" type="email" placeholder="例:text@example.com" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__password">
            <label class="register__label">パスワード</label>
            <input class="register__input" type="password" placeholder="coachtech1106" name="password" />
        </div>
        <input class="register__btn" type="submit" value="登録">
    </form>
</div>
@endsection