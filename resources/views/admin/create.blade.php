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
                <form method="post" action="{{ url('/admin') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <h2 class="title_page">商品情報を入力</h2>
                        <div class="inputCatData">

                            <label>商品名</label>
                            <input type="text" name="productName">

                            <label>商品画像（メイン）</label>
                            <input type="file" name="productImage">

                            <label>商品画像（サブ）</label>
                            <input type="file" name="productSubImage">

                            <label>商品カテゴリ</label>
                            <select name="category" class="selectNormal">
                                <option value="" selected="">選択してください</option>
                                <option value="食品">食品</option>
                                <option value="おもちゃ"">おもちゃ</option>
                                <option value="生活">生活</option>
                            </select>

                            <label>商品説明</label>
                            <textarea style="height: calc( 1.3em * 5 ); line-height: 1.3;"type="text" name="explanation"></textarea>

                            <label>商品残数</label>
                            <input type="number" name="remaining">

                            <label>商品価格</label>
                            <input type="number" name="amount">

                        </div>

                    </div>
                    <input class="button" type="submit" value="登録する">

                </form>
            </div>
        </div>
    </section>
</div>

@endsection