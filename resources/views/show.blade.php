@extends('layouts.common')
@section('showブレード', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')

@include('components.head')



@section('topArea')


<style>
.itemDetail{
    /* min-width: 600px; */
    position: relative;
    display: inline-block;
    margin: 60px auto;
    box-shadow: 0 0 12px rgba(0,0,0,.8);
}
.itemDetail h2{

    font-size: 2rem;
    padding: 16px 0;
}
.itemDetail__inner{
    display: flex;
    padding: 24px 16px 16px 16px;
}
.itemDetail__subImage{
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 12px;
    overflow: hidden;
}

.itemDetail__info{
margin-left: 12px;
}
/* 残数表示 */
.itemDetail__remaining{
    position: absolute;
    top: 0;
    left: 0;
    padding: 6px 12px;
    background: #000;
    color: #fff;
    font-size: 1.2rem;
}
.itemDetail__remaining span{
    font-size: 1.8rem;
    color: #ffcc00;
    font-weight: bold;
}

.itemDetail__info--explanation{
    border-radius:4px;
    background: #b1ab9e;
    box-shadow: inset 0 0 16px rgba(54,52,48,.8);
    min-height: 120px;
    min-width: 380px;
    padding: 8px;
    line-height: 1.2;

}

.content{
    display: flex;
    justify-content: center;
}

.price{
    background: #302e2a;
    padding: 4px 16px 4px 4px;
    line-height: 42px;
    position: relative;
    color: #fff;
    margin: 12px 0;
}

.button--product{
    background: #363430;
    padding: 12px;
}

.iconDetail:before {
    content: "";
    position: absolute;
    left: 9px;
    width: 42px;
    height: 42px;
    color: #fff;
    background-image: url(../images/icons/icon_category.png);
    background-size: 210px 42px;
}

.price:before {
    content: "";
    background-position: -168px 0;
}

.button--product li a {
    display: block;
    text-align: center;
    padding: 16px 0;
    border-radius: 4px;
    margin: 6px 0 -1px;
    text-decoration: none;
    color: #fff;
    font-size: 2rem;
}

footer{
    margin-top:0;
}
</style>

<div class="container">
    <div class="content">


<section class="itemFrame itemDetail">
<h2 class="itemInfo__name">{{$product->productName}}</h2>


<div class="itemDetail__inner">

    <div class="itemDetail__subImage">
        <div class="itemDetail__remaining">残り<span>{{$product->remaining}}</span></div>

        <img class="" src="{{ asset('storage/products/') }}/subTest.jpg">
        <?php
        // <img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
        ?>
    </div>


<div class="itemDetail__info">
    <div class="itemDetail__info--explanation">
    {{$product->explanation}}
    </div>


    <div class="iconDetail price">
                                {{$product->amount}}<span>ゴールド</span>
                            </div>



            

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



</div><!-- info -->


</div><!-- inner -->


<ul class="operation button--product">
<li>

                        <a class="blue" href="{{ url('/') }}">戻る</a>
                    </li>
                    <li>
                    <div>
                        <a class="orange" href="{{ url('/') }}/{{ $product->id }}/detail">購入</a>
                        </div>
                    </li>

                </ul>

</section>





</div>
</div>


@endsection