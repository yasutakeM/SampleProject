@extends('layouts.common')
@section('showブレード', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')

@include('components.head')
@section('header')
<header class="commonHeader">
    <div class="commonHeader--wrap">
        <div class="commonHeader--inner">
            ショップ名
        </div>

        <ul class="commonHeader__menu">
            <li>
                <a href="../admin"class="commonHeader__menu--menuButton" id="show">
                    MENU
                </a>
            </li>

            <li>
                <a href="#">
                    ログアウト
                </a>
            </li>
        </ul>
    </div>
</header>
@endsection


@section('topArea')
SHOWブレードですsu<br><br><br>


<div style="width: 60%; margin: 0 auto;">


@foreach($products as $product)
    {{$products->productName}}<br>
    {{$products->amount}}
@endforeach


<a href="{{ url('/') }}/">トップページに戻る</a>


@endsection