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
                <span>優秀な警備員を</span><br>
                <span>家族の一員に</span><br>
                <span>迎えよう</span>
            </div>

            <nav class="topArea__memberResist">
                @if (Route::has('login'))
                        @auth
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">ログイン</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">会員登録</a>
                            @endif
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
    自宅の不甲斐ないセキュリティーに日ごと怯えて過ごす不憫な
    @guest
        あなた
    @else
        <span style="color: red;">{{ Auth::user()->name }} </span>
    @endguest      
と"保護猫警備員"を結ぶ、<span>架空のサイトでございます</span>
    </h2>
    <p>会員登録&警備員の要請を行いますと、近日中に警備員があなたの自宅を訪問します。ご自宅に招き入れていただくことで住み込み警備を開始します。<br><span style="color: #ef6464;">＊実際に警備員が派遣されることはありませんのでご注意ください。</spa></p>
</div>
@endsection

@section('content')

<ul class="contentsArea__contents cats">

@foreach($products as $product)
<li>
    <a href="detail" class="zoomAnimation male">
        <h3 class="catName">{{ $product->productName }}</h3>
        <div class="contentsArea__contents--pcWidth">
            <div class="contentsImage" style="background:url({{ asset('/images/catlist/cat11.jpg') }});background-position: center center;background-size: cover;">&nbsp;</div>
            <div class="contents__details">
                <ul>

                    <li>
                        <div>category</div>
                        <div>{{ $product->category }}</div>
                    </li>

                    <li>
                        <div>残数</div>
                        <div>{{$product->remaining}}</div>
                    </li>
                    <li>
                        <div>価格</div>
                        <div>{{$product->amount}}円</div>
                    </li>
                </ul>
            </div><!--  //.contents__details -->
        </div> <!-- //.pcwidth --> 
        <div class="box">{{$product->explanation}}</div>
    </a>
</li>
@endforeach

            
</ul>



<div class="carousel" data-flickity='{ "freeScroll": true, "pageDots": false, "prevNextButtons": false }'>
<div class="carousel-cell">
<a href="detail" class="zoomAnimation male">
        <h3 class="catName">テスト</h3>
        <div class="contentsArea__contents--pcWidth">
            <div class="contentsImage" style="background:url({{ asset('/images/catlist/cat11.jpg') }});background-position: center center;background-size: cover;">&nbsp;</div>
            <div class="contents__details">
                <ul>
                    <li>
                        <div>掲載</div>
                        <div>2019-10-04</div>
                    </li>

                    <li>
                        <div>性別</div>
                        <div>オス</div>
                    </li>
                    <li>
                        <div>特技</div>
                        <div>情報収集</div>
                    </li>
                </ul>
            </div><!--  //.contents__details -->
        </div> <!-- //.pcwidth --> 
    </a>
</div>

<div class="carousel-cell">
<a href="detail" class="zoomAnimation male">
        <h3 class="catName">テスト</h3>
        <div class="contentsArea__contents--pcWidth">
            <div class="contentsImage" style="background:url({{ asset('/images/catlist/cat11.jpg') }});background-position: center center;background-size: cover;">&nbsp;</div>
            <div class="contents__details">
                <ul>
                    <li>
                        <div>掲載</div>
                        <div>2019-10-04</div>
                    </li>

                    <li>
                        <div>性別</div>
                        <div>オス</div>
                    </li>
                    <li>
                        <div>特技</div>
                        <div>情報収集</div>
                    </li>
                </ul>
            </div><!--  //.contents__details -->
        </div> <!-- //.pcwidth --> 
    </a>
</div>

<div class="carousel-cell">
<a href="detail" class="zoomAnimation male">
        <h3 class="catName">テスト</h3>
        <div class="contentsArea__contents--pcWidth">
            <div class="contentsImage" style="background:url({{ asset('/images/catlist/cat11.jpg') }});background-position: center center;background-size: cover;">&nbsp;</div>
            <div class="contents__details">
                <ul>
                    <li>
                        <div>掲載</div>
                        <div>2019-10-04</div>
                    </li>

                    <li>
                        <div>性別</div>
                        <div>オス</div>
                    </li>
                    <li>
                        <div>特技</div>
                        <div>情報収集</div>
                    </li>
                </ul>
            </div><!--  //.contents__details -->
        </div> <!-- //.pcwidth --> 
    </a>
</div>

<div class="carousel-cell">
<a href="detail" class="zoomAnimation male">
        <h3 class="catName">テスト</h3>
        <div class="contentsArea__contents--pcWidth">
            <div class="contentsImage" style="background:url({{ asset('/images/catlist/cat11.jpg') }});background-position: center center;background-size: cover;">&nbsp;</div>
            <div class="contents__details">
                <ul>
                    <li>
                        <div>掲載</div>
                        <div>2019-10-04</div>
                    </li>

                    <li>
                        <div>性別</div>
                        <div>オス</div>
                    </li>
                    <li>
                        <div>特技</div>
                        <div>情報収集</div>
                    </li>
                </ul>
            </div><!--  //.contents__details -->
        </div> <!-- //.pcwidth --> 
    </a>
</div>
</div>

<ul class="article-cards-col-3">
    <li class="article">
    <a class="article-link js-gtm-click-sender" href="#">
    <div class="topProductImage">
    <img class="article-eyecatch" src="{{ asset('/images/catlist/cat06.jpg') }}">
    </div>
    <div class="article-information">
        <div class="article-top-category-name">あああああうううう猫</div>
        <div class="article-title">
            商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文
        </div>
        <div class="article-ancestor-category-names">この商品のカテゴリ</div>
    </div>
    </a>
    </li>

    <li class="article">
    <a class="article-link js-gtm-click-sender" href="#">
    <div class="topProductImage">
    <img class="article-eyecatch" src="{{ asset('/images/catlist/cat05.jpg') }}">
    </div>
    <div class="article-information">
        <div class="article-top-category-name">あああああおおおお猫</div>
        <div class="article-title">
            商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文
        </div>
        <div class="article-ancestor-category-names">1234円</div>

        <div class="article-ancestor-category-names">この商品のカテゴリ</div>
    </div>
    </a>
    </li>

    <li class="article">
    <a class="article-link js-gtm-click-sender" href="#">
    <div class="topProductImage">
    <img class="article-eyecatch" src="{{ asset('/images/catlist/cat07.jpg') }}">
    </div>
    <div class="article-information">
        <div class="article-top-category-name">あああああええええ猫</div>
        <div class="article-title">
            商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文商品説明文
        </div>
        <div class="article-ancestor-category-names">この商品のカテゴリ</div>
    </div>
    </a>
    </li>
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