@extends('common')
 
@section('title', '詳細ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')



@section('script')
<script src="{{ asset('/js/flickity-docs.min.js') }}"></script>
@endsection

@include('components.head')


@section('header')
@include('components.header')
@endsection

@section('topArea')
<div class="topImg" style="background-image: url({{ asset('/images/catlist/cat05.jpg') }});">
<div class="bg-mask">
  <img src="{{ asset('/images/catlist/cat05.jpg') }}">
</div>
</div>
@endsection


@section('content')
<div class="catDetails">
    <p>詳細情報</p>
    <table class="tbl-r02">
        <tr>
            <th>名前</th>
            <td>ネコスケ二世</td>
        </tr>

        <tr>
            <th>色</th>
            <td>茶白</td>
        </tr>
        <tr>
            <th>掲載日</th>
            <td>2019-09-08</td>
        </tr>
        <tr>
            <th>地域</th>
            <td>鳥取県</td>
        </tr>

        <tr>
            <th>年齢</th>
            <td>4歳</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>オス</td>
        </tr>

        <tr class="last">
            <th>特技</th>
            <td>夜間警備</td>
        </tr>
    </table>

    <div class="comment">
        <p>ネコスケ二世の特徴</p>
        夜行性で朝は苦手。警戒薄れる夜間の警備活動に勤しみます。
    </div>



</div>


<ul class="checkList">
    <li>
        <button onclick="history.back()">戻る</button>
    </li>
    <li>
        <form method="post" action="#">

            <input class="button" type="submit" value="注文する">
        </form>

    </li>
</ul>

@endsection







