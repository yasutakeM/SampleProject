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

<style>
    td{
        padding: 4px;
        color: #fff;
    }
    
    tr> td:first-child{
        text-align: right;
        background:#333;
        vertical-align: top;
    }
</style>

<div style="width: 60%; margin: 0 auto;">
<div style="background: #ccc;color: #333;padding: 5px;text-align: center;">登録内容</div>
<table style="width: 100%;">
    <tr>
        <td>商品名</td>
        <td>{{$product->productName}}</td>
    </tr> 
    <tr>
        <td>カテゴリ</td>
        <td>{{$product->category}}</td>
    </tr>
    <tr>
        <td>メイン画像</td>
        <td>
        <img src="{{ asset('storage/products') }}/{{$product->productImage}}" width="580" height="370" alt="guardian shop">
        </td>
    </tr>
    <tr>
        <td>サブ画像</td>
        <td>
        <img src="{{ asset('storage/products') }}/{{$product->productSubImage}}" width="580" height="370" alt="guardian shop"></td>
    </tr>
    <tr>
        <td>商品説明</td>
        <td>{{$product->explanation}}</td>
    </tr>
    <tr>
        <td>残り</td>
        <td>{{$product->remaining}}</td>
    </tr>
    <tr>
        <td>商品価格</td>
        <td>{{$product->amount}}</td>
    </tr>
</table>
</div>
<br><br>

<a href="{{ url('/admin') }}/{{$product->id}}/edit">登録内容の変更</a>
<a href="{{ url('/admin/create') }}">新規商品登録</a>
<a href="{{ url('/admin') }}/">登録商品一覧へ</a>


@endsection