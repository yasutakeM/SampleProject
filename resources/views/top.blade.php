@extends('layouts.common')
 
@section('title', 'トップです')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/flickity-docs.css') }}" media="screen">
@endsection

@section('script')
<script src="{{ asset('/js/flickity-docs.min.js') }}"></script>
@endsection

@include('components.head')
 
@section('topArea')

<section class="topAreaWrap">
    <div class="topArea">
        <div class="topArea--inner">
            <a class="topArea--logo" href="index.php">
                <h1><img src="{{ asset('/images/logo_white.svg') }}" alt="保護猫があなたの自宅を厳重警備"></h1>
            </a>

            <div class="topArea__catch">
                <span>優秀な警備員の</span><br>
                <span>ご機嫌を</span><br>
                <span>伺おう</span>
            </div>

            <nav class="topArea__memberResist">
                @if (Route::has('login'))
                        @auth
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            <a href="{{ url('/home') }}">Home</a>
                        @else                            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">会員登録</a>
                            @endif
                            <a href="{{ route('login') }}">ログイン</a>
                        @endauth
                @endif
            </nav>
        </div>
    </div>
</section>
@endsection

@section('catch')
<div class="caption"  name="viewArea" id="viewArea">
    <h2>
    警備員がご機嫌になるアイテム盛り沢山の<span>架空ECサイトでございます</span>
    </h2>
    <p>警備員のご機嫌を取ることが家内安全への近道となります。<br><span style="color: #ef6464;">＊実際に商品を購入することは出来ませんのでご注意ください。</spa></p>
</div>
@endsection

@section('content')

        @guest
            未ログイン
        @else
            <span style="color: red;">{{ Auth::user()->name }} </span>としてログイン中
        @endguest 
<br>
カテゴリで絞る
<select>
    <option>選択する</option>
    <option>グルメ</option>
    <option>休暇</option>
    <option>健康</option>
</select>
<br><br><br>







<ul class="article-cards-col-3">
@foreach($products as $product)

<li class="article">
    <a class="article-link js-gtm-click-sender" href="#">
    <div class="topProductImage">
    <img class="article-eyecatch" src="{{ asset('/images/products/p001.png') }}">
    </div>
    <div class="article-information">
        <div class="article-top-category-name">{{ $product->productName }}</div>
        <div class="article-title">
        {{ $product->explanation }}
        </div>
        <div class="article-ancestor-category-names">{{$product->amount}}円</div>

        <div class="article-ancestor-category-names">{{ $product->category }}</div>
    </div>
    </a>
    </li>
    
@endforeach            
</ul>







<section class="products">
<div class="item">
<div class="center">
<div class="thumb">
<a href="#"><img src="{{ asset('/images/catlist/cat05.jpg') }}" alt="" class="thumbnail"></a>
</div>
<h2 class="group">
<a href="#">
SR猫じゃらし
</a>
</h2>


<p class="priceWrap">
    <span class="price">
    <span class="num">¥7,000</span>
    <span class="tax">＋税</span>
    </span>
    <span class="stock">＜残り＞×15</span>

</p>
<div class="article-ancestor-category-names">おもちゃ</div>
</div>
</div>


<div class="item">
<div class="center">
<div class="thumb">
<a href="#"><img src="{{ asset('/images/catlist/cat05.jpg') }}" alt="" class="thumbnail"></a>
</div>
<h2 class="group">
<a href="#">
SR猫じゃらし
</a>
</h2>


<p class="priceWrap">
    <span class="price">
    <span class="num">¥7,000</span>
    <span class="tax">＋税</span>
    </span>
    <span class="stock">＜残り＞×15</span><br>
    <span class="flavor">＜クリア＞×15包<br>＜エナジー＞×15包</span>
</p>
</div>
</div>

</section>






<ul class="categories">
    <li class="category">
        <a class="category-link" href="#">カテゴリ01</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ02</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ03</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ04</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ05</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ0006</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ00000007</a>
    </li>
    <li class="category">
        <a class="category-link" href="#">カテゴリ00000000008</a>
    </li>
</ul>
@endsection


@section('pagenation')
    @include('components.pagenation')
@endsection


@include('components.aside')