@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
@endsection

@section('link')
<form action="/logout" method="post">
    @csrf
    <input class="header__link" type="submit" value="logout">
</form>
@endsection

@section('content')
<h2>admin</h2>
<div class="admin__inner">
    <form class="search__form">
        <input class="search__keyword" type="text" placeholder="名前やメールアドレスを入力してください">

        <div class="search__gender">
            <select class="gender__select">
                <option disabled selected>性別</option>
                <option>男性</option>
                <option>女性</option>
                <option>その他</option>
            </select>
        </div>

        <div class="form__category">
            <select class="category__select">
                <option></option>
            </select>
        </div>

        <input class="search__date">

        <div class="search__buttons">
            <input class="search__btn" type="submit" value="検索">
            <input class="reset__btn" type="submit" value="リセット">
        </div>
    </form>

    <form class="export__form">
        @csrf
        <input class="export__btn btn" type="submit" value="エクスポート">
    </form>

    <table class="admin__table">
        <tr class="admin__row">
            <th class="admin__label">お名前</th>
            <th class="admin__label">性別</th>
            <th class="admin__label">メールアドレス</th>
            <th class="admin__label">お問い合わせの種類</th>
            <th class="admin__label"></th>
        </tr>
        <tr class="admin__row">
            <td class="admin__data"></td>
            <td class="admin__data">
            </td>
            <td class="admin__data"></td>
            <td class="admin__data"></td>
            <td class="admin__data">
                <a class="admin__detail-btn" href="">詳細</a>
            </td>
        </tr>
    </table>
</div>
@endsection