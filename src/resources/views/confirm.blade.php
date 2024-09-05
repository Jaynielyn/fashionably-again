@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__top">
    <h2 class="confirm__ttl">
        Confirm</h2>
</div>

<div class="confirm__content">
    <form class="" action="/thanks" method="post">
        @csrf
        <table class="confirm__table">
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">お名前</th>
                <td class="confirm_td name__td">
                    <input type="text" name="first_name" class="first-name" value="{{ $contact['first_name'] }}" readonly />
                    <input type="text" name="last_name" class="last-name" value="{{ $contact['last_name'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th gender__th">性別</th>
                <td class="confirm_td gender__td">
                    <input class="gender" type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">メールアドレス</th>
                <td class="confirm_td name__td">
                    <input class="email" type="email" name="email" value="{{ $contact['email'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">電話番号</th>
                <td class="confirm_td name__td">
                    <input class="tel" type="tel" name="tel_1" value="{{ $contact['tel_1'] }}" readonly />
                </td>
                <td class="confirm_td name__td">
                    <input class="tel" type="tel" name="tel_2" value="{{ $contact['tel_1'] }}" readonly />
                </td>
                <td class="confirm_td name__td">
                    <input class="tel" type="tel" name="tel_3" value="{{ $contact['tel_1'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">住所</th>
                <td class="confirm_td name__td">
                    <input class="address" type="text" name="address" value="{{ $contact['address'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">建物名</th>
                <td class="confirm_td name__td">
                    <input class="building" type="text" name="building" value="{{ $contact['building'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">お問い合わせの種類</th>
                <td class="confirm_td name__td">
                    <input class="select" type="text" name="select" value="{{ $contact['select'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">お問い合わせ内容</th>
                <td class="confirm_td name__td">
                    <input class="detail" type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                </td>
            </tr>
        </table>
        <div class="buttons">
            <input class="confirm__btn" type="submit">
            <a class="confirm__edit">
        </div>
    </form>
</div>
@endsection