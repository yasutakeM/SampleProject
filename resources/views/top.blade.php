@extends('layouts.common')

@section('title', 'GUARDIAN SHOP')
@section('keywords', '警備員','ご機嫌','アイテム')
@section('description', '警備員がご機嫌になるアイテム盛り沢山！')

@section('script')
<script src="{{ asset('js/tab.js') }}"></script>
@endsection

@include('components.head')


@section('topArea')
<style>
.pagination{
    background: #333;
}
</style>


<div class="container">
    <div class="content">

        <div class="content__header">

            <div class="content__header__social clearfix">
                <div class="social social_plugin_bt_box clearfix">


                </div>
            </div>

            <h1 class="content__header__logo">
                    <img src="{{ asset('storage/logo_shop.png') }}" width="580" height="370" alt="guardian shop">
			</h1>

        </div>
@endsection

@section('catch')
<div class="caption"  name="viewArea" id="viewArea">
    <h2>
    警備員がご機嫌になるアイテム盛り沢山！<span>架空のゲーム内ショップでございます</span>
    </h2>
    <p>警備員のご機嫌を取ることが家内安全への近道となります。<br><span style="color: #ef6464;">＊実際に商品を購入することは出来ませんのでご注意ください。</spa></p>
</div>
@endsection

@section('content')


    <?php
        // <h3 class="itemInfo__name title_box">
        //     @guest
        //         おすすめ商品
        //     @else
        //         <span style="color: red;">{{ Auth::user()->name }}</span>さんにおすすめの商品
        //     @endguest 
        // </h3>
    ?>


<section class="itemWrap">

<div class="testwrap">


<script type="text/javascript">
$(function($){
    //クリックしたときの関数
    $('.tab').click(function(){
        // 〜〜コンテンツについての処理〜〜
        //クリックされたタブの番号をindexに格納。
        const index = $(this).index();
        $('input:hidden[name="tabNo"]').val(index);

        //alert($('input:hidden[name="tabNo"]').val(index));

    });
});
</script>

<div class="tab-panel">
	<!--タブ-->
	<ul class="tab-group">
		<li class="tab tab-A is-active">
            <div>
                食品                
            </div>
        </li>
		<li class="tab tab-B">
            <div>
                生活  
            </div>
        </li>
		<li class="tab tab-C">
            <div>
                ファッション               
            </div>
        </li>
		<li class="tab tab-D">
            <div>
                おもちゃ
            </div>
        </li>
        <li class="tab tab-E">
            <div>
                その他
            </div>
        </li>
	</ul>

    <input type="hidden" name="tabNo" value="">

    <div class="panel-group">
		<div class="panel tab-A is-show">

            <ul class="items">
            @foreach($foods as $product)
                    <li class="">
                        
                        <article class="itemFrame">
                            <h3 class="itemInfo__name">{{ $product->productName }}</h3>
                                <div class="itemImage">
                                <?php
                                //<img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
                                ?>
                                </div>

                            <div class="itemInfo">
                                <div class="itemInfo__inner">
                                    
                                    <span>残数：{{$product->remaining}}</span>
                                    <div class="icon price">
                                        {{$product->amount}}<span>ゴールド</span>
                                    </div>

                                    <ul class="operation button--product">

                                        <li>
                                            <a class="blue" href="{{ url('/') }}/show/{{ $product->id }}">詳細</a>
                                        </li>
                                        <li>
                                        <div>
                                            <a class="orange" href="{{ url('/') }}/{{ $product->id }}/detail">購入</a>


                                            <?php
                                            //元々157行目にあった
                                            //data-key="{{ env('STRIPE_KEY') }}"
                                            ?>
                                            <form action="{{ asset('pay') }}" method="POST">
                                                {{ csrf_field() }}
                                            <script
                                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                data-key="pk_test_rpO1vmdYNmhgLs9wsXCzHUpg00uuBcThXP"
                                                data-amount="100"
                                                data-name="Stripe決済デモ"
                                                data-label="決済をする"
                                                data-description="これはデモ決済です"

                                                data-locale="auto"
                                                data-currency="JPY">
                                                
                                            </script>
                                            </form>

                                            </div>
                                        </li>
                                    </ul>

                                    <div class="icon food">
                                        <a href="#">
                                            {{ $product->name }}
                                        </a>
                                    </div>

                                </div><!--inner-->
                            </div>
                        </article>
                    </li>
            @endforeach            
            </ul>


             

<a href="#">もっと見る</a>


    </div><!-- end食品パネル -->

	<div class="panel tab-B">
        <ul class="items">
        @foreach($lives as $product)
                <li class="">
                    
                    <article class="itemFrame">
                        <h3 class="itemInfo__name">{{ $product->productName }}</h3>
                            <div class="itemImage">
                            <?php
                                //<img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
                                ?>
                            </div>

                        <div class="itemInfo">
                            <div class="itemInfo__inner">
                                
                                <span>残数：{{$product->remaining}}</span>
                                <div class="icon price">
                                    {{$product->amount}}<span>ゴールド</span>
                                </div>

                                <ul class="operation button--product">

                                    <li>
                                        <a class="blue" href="{{ url('/') }}/show/{{ $product->id }}">詳細</a>
                                    </li>
                                    <li>
                                    <div>
                                        <a class="orange" href="{{ url('/') }}/{{ $product->id }}/detail">購入</a>
                                        </div>
                                    </li>
                                </ul>

                                <div class="icon life">
                                    <a href="#">
                                        {{ $product->name }}
                                    </a>
                                </div>

                            </div><!--inner-->
                        </div>
                    </article>
                </li>
        @endforeach            
        </ul>

        {{ $lives->links() }}
    </div><!-- end生活パネル -->

    <div class="panel tab-C">

    <ul class="items">        
        </ul>

    </div><!--end fashion-->

    <div class="panel tab-D">

    <ul class="items">      
        </ul>    

    </div><!--end toy-->
        

    <div class="panel tab-E">
    <ul class="items">         
        </ul>    

    </div><!--end その他-->


	</div>

    </div><!-- tab-panel -->



        <aside class="sidebar">
        <div class="memberLink--side">

        @if (Route::has('login'))
                    @auth
                    <a class="dropdown-item button--white" href="#">
                        {{ __('カートを見る') }}
                    </a>
                    <div class="publicWrap">
                    カート内商品
                    <div class="publicInfomation">
                        <span>9999円</span>
                    </div>
                    <a href="#" class="button--orange">レジへ</a>
                    </div>
                    
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button--orange">会員登録</a>
                        @endif
                        <p>会員登録済みの方はこちら</p>
                        <a href="{{ route('login') }}" class="button--white">ログイン</a>
                    @endauth
        @endif
        </div>


            

            <h3>イベント情報</h3> 
            <a href="http://localhost:8888/guardiancat/" class="banner">
            <img src="{{ asset('storage/banner/event01.png') }}" alt="警備員をお探しの方はこちらから">
            </a>

            <h3>優秀な警備員をお探しの方はこちら</h3> 

            <a href="http://localhost:8888/guardiancat/" class="banner">
            <img src="{{ asset('storage/banner/04.gif') }}" alt="警備員をお探しの方はこちらから">
            </a>

            <a href="http://localhost:8888/guardiancat/" class="banner">
            <img src="{{ asset('storage/banner/06.jpg') }}" alt="警備員をお探しの方はこちらから">
            </a>

            <a href="http://localhost:8888/guardiancat/" class="banner">
            <img src="{{ asset('storage/banner/07.jpg') }}" alt="警備員をお探しの方はこちらから">
            </a>
        </aside>


</div>
</section>

    
    </div><!-- //.content -->
</div><!-- .container -->







@endsection


