@extends('common_entry')
@section('title', 'ログイン')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')
@include('components.head')



@section('content')

<section class="loginForm">
    <div class="loginForm__image login__image">
        <h2 class="singleLogo--sp"><img src="{{ asset('/images/logo_white.svg') }}" alt="保護猫"/></h2>
    </div>

    <div class="loginForm__input">
        <div class="loginForm__input--inner">
            <h2 class="title_page">ログイン情報を入力</h2>
            <small>ログイン機能は未実装</small>
            <form method="post" action="#">
                    <div class="checkList">

                    <label>ユーザー名</label>
                    <input name="name" type="text" placeholder="例) ネコタロウ">

                    <label>パスワード</label>
                    <input type="password" id="pass" name="password" minlength="4" placeholder="例) sample123" required>
                    </div>

                <input class="button" type="submit" value="ログインする" name="login">
            </form>
        </div><!--login inner-->
    </div>
</section>


@endsection