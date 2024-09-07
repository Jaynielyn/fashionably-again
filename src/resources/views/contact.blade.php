@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="top">
    <h1 class="contact__ttl">Contact</h1>
</div>
<div class="contact__inner">
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="contact__form name__group">
            <label class="form__label name__label">
                お名前<span class="red">※</span>
            </label>
            <div class="form__inputs">
                <input class="first__name" type="text" name="first_name" id="name" value="{{ old('first_name') }}" placeholder="例:山田">
                <input class="last__name" type="text" name="last_name" id="name" value="{{ old('last_name') }}" placeholder="例:太郎">
            </div>
        </div>

        <div class="contact__form gender__group">
            <label class="form__label gender__label">
                性別<span class="red">※</span>
            </label>
            <div class="form__inputs">
                <input class="gender" type="radio" name="gender" value="男性"><label class="gender-male">男性</label>
                <input class="gender" type="radio" name="gender" value="女性"><label class="gender-female">女性</label>
                <input class="gender" type="radio" name="gender" value="その他"><label class="gender-someone">その他</label>
            </div>
        </div>

        <div class="contact__form email__group">
            <label class="form__label email__label">
                メールアドレス<span class="red">※</span>
            </label>
            <div class="form__inputs">
                <input class="email" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="例:text@example.com">
            </div>
        </div>

        <div class="contact__form tell__group">
            <label class="form__label tell__label">
                電話線号<span class="red">※</span>
            </label>
            <div class="form__inputs">
                <input class="contact__input tell_input" type="tel" name="tel_1" id="tel">
                <input class="contact__input tell_input" type="tel" name="tel_2">
                <input class="contact__input tell_input" type="tel" name="tel_3">
            </div>
        </div>

        <div class="contact__form address__group">
            <label class="form__label add__label">
                住所<span class="red">※</span>
            </label>
            <div class="form__inputs">
                <input class="contact__input address" type="text" name="address" id="address" value="{{ old('address') }}" placeholder="例:東京都渋谷区千駄々谷1-2-3">
            </div>
        </div>

        <div class="contact__form building__group">
            <label class="form__label building__label">
                建物名
            </label>
            <div class="form__inputs">
                <input class="contact__input building" type="text" name="building" id="building" value="{{ old('building') }}" placeholder="例:千駄々谷マンション101">
            </div>
        </div>

        <div class="contact__form select__group">
            <label class="form__label select__label">
                お問い合わせの種類<span class="red">※</span>
            </label>
            <div class="form__inputs">
                <select class="contact__select" name="category_id" id="">
                    <option class="select__option" disabled selected>選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" id="select">{{ $category->content }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="contact__form detail__group">
            <label class="form__label detail">
                お問い合わせ内容<span class="red">※</span>
            </label>
            <textarea class="form__inputs contact__form-detail" name="detail" id="" placeholder="お問い合わせ内容をご記載ください">
            </textarea>
        </div>

        <input class="confirm__btn" type="submit" value="確認画面">
    </form>
</div>
@endsection