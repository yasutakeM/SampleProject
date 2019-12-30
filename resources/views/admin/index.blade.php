@extends('layouts.common')
 
@section('title', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')
@include('components.head')

@section('header')
<header class="commonHeader">
    <div class="commonHeader--wrap">
        <div class="commonHeader--inner admin">
            管理者用ページ
        </div>

        <ul class="commonHeader__menu">
            <li>
                <a href="/admin/menu"class="commonHeader__menu--menuButton" id="show">
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



<ul class="pagination">
    <li class="previous">
    <span rel="prev" class="off">&nbsp;</span>
    </li>
    <li>
    <a class='now_page' href="?page=1">1</a>
    </li>
    <li>
    <a  href="?page=2">2</a>
    </li>
    <li>
    <a  href="?page=3">3</a>
    </li>
    <li class="next">
    <a href="?page=2" rel="next"></a>
    </li>
</ul>

  <div class="contentsArea" style="margin: 0 auto;">


<a href="{!! action('ProductController@index') !!}/create">
商品登録
</a>

  <h3 class="page_title"><i class="icon--cat tinRightOut"></i>警備員一覧<span>1ページ目</span></h3>
        <ul class="contentsArea__contents">

@foreach($products as $product)
                <li>
                      <section class="male toDetail">
                          <h3 class="catName">{{ $product->productName }}</h3>

                          <div class="contentsArea__contents--pcWidth">
                                <div class="contentsImage">
                                  <img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
                                </div>

                              <div class="contents__details">
                                  <ul>
                                        <li>
                                            <div>登録</div>
                                            <div>{{ $product->created_at }}</div>
                                        </li>
                                      <li>
                                          <div>カテゴリ</div>
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
                          
                          <ul class="operation">
                                <li>
                                <a href="{{ url('/admin') }}/{{$product->id}}/edit" class="button--white">変更</a>

                                <?php
                                //  <a href="{!! action('ProductController@index') !!}/{{$product->id}}/edit" class="button--white">変更
                                //  </a>

                                // <a href="admin/{{ $product->id }}/edit" class="button--white">変更</a>
                                ?>
                                </li>

                                <li>  
                                
                                <a href="{{ url('/admin') }}/delete/{{$product->id}}" class="button--white">削除</a>

                                <?php //<a href="admin/delete/{{ $product->id }}" class="button--white">削除</a> ?>
                                </li>
                          </ul>
</section>
                </li>



@endforeach




</ul>


  </div><!-- //.contentsArea -->

<ul class="pagination">
    <li class="previous">
    <span rel="prev" class="off">&nbsp;</span>
    </li>
    <li>
    <a class='now_page' href="?page=1">1</a>
    </li>
    <li>
    <a  href="?page=2">2</a>
    </li>
    <li>
    <a  href="?page=3">3</a>
    </li>
    <li class="next">
    <a href="?page=2" rel="next"></a>
    </li>
</ul>
@endsection