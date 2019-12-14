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
                <form method="post" action="confirm_regist.php" enctype="multipart/form-data">

<div class="">
    <h2 class="title_page">管理者情報を入力</h2>
    <div class="inputCatData">

          <label>名前</label>
          <input type="text" name="name" placeholder="例) ネコタロウ">

          <label>パスワード</label>
          <input type="password" name="color" placeholder="例) 茶色">
      </div>

</div>
<input class="button" type="submit" value="確認する">

</form>
                </div>
        </div>
    </section>
</div>

<a href="/SampleProject/admin/{{ $product->id }}" class="btn btn-outline-primary">Show</a>
<a href="/SampleProject/admin/{{ $product->id }}/edit" class="btn btn-outline-primary">Edit</a>

@endsection





