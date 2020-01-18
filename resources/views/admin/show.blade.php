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

<span style="color: #fff;">
views/admin/show.blade.php です
</span>



<br><br>
<a href="admin/create">新規商品登録</a>
<a href="admin">登録商品一覧へ</a>



@endsection