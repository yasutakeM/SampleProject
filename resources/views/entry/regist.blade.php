@extends('common_entry')
@section('title', '会員登録')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')
@include('components.head')



@section('content')

<section class="loginForm">
    <div class="loginForm__image login__image entry">
        <h2 class="singleLogo--sp"><img src="{{ asset('/images/logo_white.svg') }}" alt="保護猫"/></h2>
    </div>

    <div class="loginForm__input">
        <div class="loginForm__input--inner">
            <h2 class="title_page">会員登録</h2>
            <small>会員登録機能は未実装</small>
                <form method="post" action="confirm_entry_regist.php" enctype="multipart/form-data" autocomplete="off">

                    <div class="inputCatData">

                            <label>ユーザー名</label>
                            <input name="name" type="text" autocomplete="off" placeholder="例) ネコタロウ">

                            <label>パスワード</label>
                            <input name="password" type="password" autocomplete="off" placeholder="半角英数4文字以上">

                    </div>
                    <input class="button" type="submit" value="確認する">
                </form>
        </div><!--login inner-->
    </div>
</section>


@endsection