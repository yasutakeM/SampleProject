@extends('layouts.common')
@section('title', '管理者メニュー')
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
    <div class="loginContainer">
    <h2 class="singleLogo--pc"><img src="{{ asset('/images/logo2.svg') }}" alt="保護猫があなたの自宅を厳重警備"/></h2>
    <section class="loginForm">
        <div class="loginForm__image">
            <h2 class="singleLogo--sp"><img src="{{ asset('/images/logo_white.svg') }}" alt="保護猫"/></h2>
        </div>

        <div class="loginForm__input">
            <div class="loginForm__input--inner">
                <form method="post" action="/SampleProject/admin/update/{{ $product->id }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <h2 class="title_page">商品情報を更新</h2>
                        <div class="inputCatData">

                            <label>商品名</label>
                            <input type="text" name="productName" value="{{ old('productName', $product->productName) }}">

                            <label>商品画像（メイン）</label>
                            <input type="text" name="productImage" value="{{ old('productImage', $product->productImage) }}">

                            <label>商品画像（サブ）</label>
                            <input type="text" name="productSubImage" value="{{ old('productSubImage', $product->productSubImage) }}">

                            <label>商品カテゴリ</label>
                            <select name="category" class="selectNormal">
                                <option value="{{ old('category', $product->category) }}" selected="">
                                {{ old('category', $product->category) }}
                                </option>
                                <option value="カテゴリ1">カテゴリ1</option>
                                <option value="カテゴリ2">カテゴリ2</option>
                                <option value="カテゴリ3">カテゴリ3</option>
                            </select>

                            <label>商品説明</label>
                            <textarea style="height: calc( 1.3em * 5 ); line-height: 1.3;"type="text" name="explanation" value="{{ old('explanation', $product->explanation) }}">{{ old('explanation', $product->explanation) }}</textarea>

                            <label>商品残数</label>
                            <input type="number" name="remaining" value="{{ old('remaining', $product->remaining) }}">

                            <label>商品価格</label>
                            <input type="number" name="amount" value="{{ old('amount', $product->amount) }}">

                        </div>

                    </div>
                    <input class="button" type="submit" value="登録する">

                </form>
            </div>
        </div>
    </section>
</div>

@endsection