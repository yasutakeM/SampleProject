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
SHOWブレードです<br><br><br>

<style>
    td{
        padding: 8px 0;
        vertical-align: top;
    }
    
    tr> td:first-child{
        text-align: center;
        background:#333;
        color: #fff;
    }
    tr> td:last-child{
        text-align: left;
        background:#fff;
        color: #333;
    }
</style>

<div style="width: 60%; margin: 0 auto;">
<div style="background: #ccc;color: #333;padding: 5px;text-align: center;">{{$product->productName}}の詳細</div>

<table style="width: 100%;">

    <tr>
        <td>カテゴリ</td>
        <td>{{$product->category}}</td>
    </tr>
    <tr>
        <td>メイン画像</td>
        <td>
            <div style="width: 100px;">
            <img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
</div>
        </td>
    </tr>
    <tr>
        <td>サブ画像</td>
        <td>{{$product->productSubImage}}</td>
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


<div style="padding: 8px; background: #ccc; color: #333; margin: 8px auto; width: 90%; border-radius: 8px;">
    {{$product->explanation}}
</div>

</div>
<br><br>



<a href="{{ url('/') }}/">トップページに戻る</a>


@endsection