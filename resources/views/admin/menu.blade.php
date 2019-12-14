@extends('common')
 
@section('title', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')
@include('components.head')

@section('topArea')
<div class="managementMenu">
    <h2>管理者メニュー</h2>
    <ul class="checkList">
        <li>
            <a href="admin/regist">登録</a>
            新ネコ情報を登録
        </li>
        <li>

        <a href="admin/products">
            更新/削除
        </a>
        登録情報の更新、削除
        </li>
    </ul>
</div>
@endsection