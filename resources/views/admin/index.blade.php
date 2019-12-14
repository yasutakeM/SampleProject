@extends('layouts.common')
 

@section('title', '管理者メニュー')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文')
@include('components.head')

@section('header')
<header class="commonHeader">
    <div class="commonHeader--wrap">
        <div class="commonHeader--inner" style="font-weight: bold;color: #876ca9;font-size: 1.8rem;">
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

  <h3 class="page_title"><i class="icon--cat tinRightOut"></i>警備員一覧<span>1ページ目</span></h3>
        <ul class="contentsArea__contents">

@foreach($products as $product)
                <li>
                      <a href="/SampleProject/admin/show?id={{ $product->id }}"class="male toDetail">
                          <h3 class="catName">{{ $product->productName }}</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat-2964869_1920.jpg);background-position: center center;background-size: cover;">&nbsp;{{ $product->productImage }}</div>
                              <div class="contents__details">
                                  <ul>
                                        <li>
                                            <div>登録</div>
                                            <div>{{ $product->update_at }}</div>
                                        </li>
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
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="4">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ネコスケ二世">
                                        <input type="hidden" name ="delete" value="4">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
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