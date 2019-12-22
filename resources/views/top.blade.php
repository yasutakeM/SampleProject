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
            <a class="topArea--logo" href="{{ url('/') }}">
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
                <a class="article-link js-gtm-click-sender" href="{{ url('/') }}/{{ $product->id }}/detail">
                <div class="topProductImage">
                <img class="article-eyecatch" src="{{ asset('/images/products/item01.jpg') }}">
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




@endsection


@section('pagenation')
    @include('components.pagenation')
@endsection


@include('components.aside')