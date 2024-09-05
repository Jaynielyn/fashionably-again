@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<h1 class="thanks__back">Thank you</h1>
<div class="thanks__inner">
    <h2 class="thanks__text">お問い合わせありがとうございました</h2>
    <form class="thanks__form" action="/" method="get">
        <button class="thanks__btn">HOME</button>
    </form>
</div>
@endsection