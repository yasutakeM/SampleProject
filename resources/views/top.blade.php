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


                <h1><img src="{{ asset('storage/logo_white.svg') }}" alt="保護猫があなたの自宅を厳重警備"></h1>
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

<section class="itemWrap">




    <ul class="items">
    @foreach($products as $product)
            <li class="">
                
                <article class="itemFrame">
                    <h3 class="itemInfo__name">{{ $product->productName }}</h3>
                        <div class="itemImage">
                        <img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
                        </div>

                    <div class="itemInfo">
                        <div class="itemInfo__inner">
                            
                            <span>残数：{{$product->remaining}}</span>
                            <div class="icon price">
                                {{$product->amount}}<span>ゴールド</span>
                            </div>

                            <ul class="operation button--product">
                                <li>
                                    <a class="orange" href="{{ url('/') }}/{{ $product->id }}/detail">購入</a>
                                </li>
                                <li>
                                    <a class="blue" href="{{ url('/') }}/{{ $product->id }}/detail">詳細</a>
                                </li>
                            </ul>

                                @if($product->category =="おもちゃ")
                                    <div class="icon toy">
                                        <a href="#">
                                            {{ $product->category }}

                                @elseif($product->category =="食品")
                                    <div class="icon food">
                                        <a href="#">
                                            {{ $product->category }}

                                @elseif($product->category =="ファッション")
                                    <div class="icon fashion">
                                        <a href="#">
                                            {{ $product->category }}

                                @else
                                    <div class="icon uncategorize">
                                        <a href="#">
                                            未分類

                                @endif
                                        </a>
                                    </div>

                        </div><!--inner-->
                    </div>
                </article>

            </li>        
    @endforeach            
    </ul>
</section>
@endsection


@section('pagenation')
    @include('components.pagenation')
@endsection


@include('components.aside')