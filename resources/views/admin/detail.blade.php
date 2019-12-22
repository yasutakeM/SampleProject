@extends('layouts.common')
@section('showブレード', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')

@include('components.head')
@section('header')
<header class="commonHeader">
    <div class="commonHeader--wrap">
        <div class="commonHeader--inner" style="font-weight: bold;color: #876ca9;font-size: 1.8rem;">
            管理者用ページ
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
detailブレードです<br><br><br>


<div style="background: #ccc;color: #333;padding: 5px;text-align: center;">登録内容</div>
        <small>商品名:{{$product->productName}}</small><br>
        <small>カテゴリ:{{$product->category}}</small><br>
        <small>メイン画像:{{$product->productImage}}</small><br>
        <small>サブ画像:{{$product->productSubImage}}</small><br>
        <small>商品説明:{{$product->explanation}}</small><br>
        <small>商品価格:{{$product->amount}}円</small><br>
        <small>残り:{{$product->remaining}}</small>
<br><br>

<a href="{{ url('/admin') }}/{{$product->id}}/edit">登録内容の変更</a>
<a href="{{ url('/admin/create') }}">新規商品登録</a>
<a href="{{ url('/admin') }}/">登録商品一覧へ</a>


@endsection