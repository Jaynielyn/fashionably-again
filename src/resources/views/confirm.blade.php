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
                    {{ $contacts['first_name'] }}&nbsp;{{ $contacts['last_name'] }}
                </td>
                <input type="hidden" name="first_name" class="first_name" value="{{ $contacts['first_name'] }}" readonly />
                <input type="hidden" name="last_name" class="last_name" value="{{ $contacts['last_name'] }}" readonly />
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th gender__th">性別</th>
                <td class="confirm_td gender__td">
                    <input class="gender" type="hidden" name="gender" value="{{ $contacts['gender'] }}">
                </td>
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">メールアドレス</th>
                <td class="confirm_td name__td">
                    {{ $contacts['email'] }}
                </td>
                <input class="email" type="hidden" name="email" value="{{ $contacts['email'] }}">
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">電話番号</th>
                <td class="confirm_td name__td">
                    {{ $contacts['tel_1'] }}{{ $contacts['tel_2'] }}{{ $contacts['tel_3'] }}
                </td>
                <input type="hidden" name="tel_1" value="{{ $contacts['tel_1'] }}">
                <input type="hidden" name="tel_2" value="{{ $contacts['tel_2'] }}">
                <input type="hidden" name="tel_3" value="{{ $contacts['tel_3'] }}">
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">住所</th>
                <td class="confirm_td name__td">
                    {{ $contacts['address'] }}
                </td>
                <input class="address" type="hidden" name="address" value="{{ $contacts['address'] }}">
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">建物名</th>
                <td class="confirm_td name__td">
                    {{ $contacts['building'] }}
                </td>
                <input class="building" type="hidden" name="building" value="{{ $contacts['building'] }}">
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">お問い合わせの種類</th>
                <td class="confirm_td name__td">{{ $category->content }}</td>
                <input class="select" type="hidden" name="category_id" value="{{ $contacts['category_id'] }}">
            </tr>
            <tr class="confirm__tr name__tr">
                <th class="confirm__th name__th">お問い合わせ内容</th>
                <td class="confirm_td name__td">
                    {{ $contacts['detail'] }}
                </td>
                <input class="detail" type="hidden" name="detail" value="{{ $contacts['detail'] }}">
            </tr>
        </table>
        <div class="buttons">
            <input class="confirm__btn" type="submit">
            <input class="edit__btn" type="submit" name="back" value="修正">
        </div>
    </form>
</div>
@endsection