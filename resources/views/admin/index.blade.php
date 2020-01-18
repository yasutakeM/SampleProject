@extends('layouts.common')
 
@section('title', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')

@section('css')
<!-- bootstrap -->
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@include('components.head')

@section('header')
<div class="memberLink--side">

@if (Route::has('login'))
            @auth
                <a href="{{ route('admin.logout') }}" class="button--white">
                    ログアウトする
                </a>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('admin.register') }}" class="button--orange">会員登録</a>
                @endif
                <p>会員登録済みの方はこちら</p>
                <a href="{{ route('admin.login') }}" class="button--white">ログイン</a>
            @endauth
@endif
</div>
@endsection


@section('topArea')




<div class="contentsArea" style="margin: 0 auto;">


<a class="button--orange" href="{!! action('ProductController@index') !!}/create" style="width: 120px; margin: 24px auto 48px">
商品登録
</a>

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
                                          <div>{{ $product->name }}</div>
                                    </li>

                                    <li>
                                          <div>残数</div>
                                          <div>{{$product->remaining}}</div>
                                    </li>

                                    <li>
                                        <div>価格</div>
                                        <div>{{$product->amount}}ゴールド</div>
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

                                <a class="button--white" type="button" data-toggle="modal" data-target="#modal{{$product->id}}">削除</a>

                                <?php 
                                // <a href="{{ url('/admin') }}/delete/{{$product->id}}" class="button--white">削除</a>
                                
                                //<a href="admin/delete/{{ $product->id }}" class="button--white">削除</a> 
                                ?>
                                </li>
                          </ul>

                            <!-- Modal -->
                            <div class="modal fade" id="modal{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">削除しますか？</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="text-align: center;font-size:1.6rem; color: red;">
                                            {{$product->productName}}
                                            <div class="contentsImage">
                                                <img class="" src="{{ asset('storage/products/') }}/{{ $product->productImage }}">
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                            <button type="button" class="btn btn-primary"
                                                onclick="location.href='{{ route('delete', ['id' => $product->id])}}'">
                                                削除
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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