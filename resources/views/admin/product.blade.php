@extends('common')
 
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
                <a href="../admin"class="commonHeader__menu--menuButton" id="show">
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

                              <li>
                      <a class="male toDetail">
                          <h3 class="catName">ネコスケ二世</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat-2964869_1920.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              鳥取県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>4歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        オス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>茶白</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>夜間警備</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">夜行性で朝は苦手。警戒薄れる夜間の警備活動に勤しみます。</div>
                          
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
                              <li>
                      <a class="femail toDetail">
                          <h3 class="catName">ネコキャット</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/KAZUP1080833_TP_V.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              静岡県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>3歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        メス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>白黒茶</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>妨害</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">泥棒の逃走手段をテキパキ破壊</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="5">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ネコキャット">
                                        <input type="hidden" name ="delete" value="5">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="femail toDetail">
                          <h3 class="catName">シャケ茶漬け</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat15.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              埼玉県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>5歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        メス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>グレー</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>物理</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">床の摩擦係数を激減させて自宅侵入者の足元を狂わせます</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="6">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="シャケ茶漬け">
                                        <input type="hidden" name ="delete" value="6">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="male toDetail">
                          <h3 class="catName">ネコゴロウ</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat-2539225_1920.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              茨城県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>2歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        オス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>白黒</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>億劫</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">害虫や不審者を気怠そうに睨むが手は出さない</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="7">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ネコゴロウ">
                                        <input type="hidden" name ="delete" value="7">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="femail toDetail">
                          <h3 class="catName">ネコ魔王</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/topImage.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              愛知県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>1歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        メス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>グレー</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>潜伏</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">こっそり潜伏こっそり接近こっそり撃退</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="8">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ネコ魔王">
                                        <input type="hidden" name ="delete" value="8">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="femail toDetail">
                          <h3 class="catName">ネコキチ</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/topImage2.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              京都府                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>6歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        メス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>白</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>猫背</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">青と緑のオッドアイ。窓の外の異常は見逃さない。</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="34">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ネコキチ">
                                        <input type="hidden" name ="delete" value="34">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="male toDetail">
                          <h3 class="catName">ねこやろう</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat01.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              愛媛県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>5歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        オス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>白黒</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>反復横跳び</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">ごはんの気配を素早くキャッチ。迅雷の如く駆けつける瞬発力が魅力</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="35">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ねこやろう">
                                        <input type="hidden" name ="delete" value="35">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="femail toDetail">
                          <h3 class="catName">ねこすけ</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat12.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              埼玉県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>4歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        メス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>黒</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>暗黒</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">闇夜に紛れて警備をサボる</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="40">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ねこすけ">
                                        <input type="hidden" name ="delete" value="40">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="male toDetail">
                          <h3 class="catName">ネコヒコ</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/cat06.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              青森県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>2歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        オス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>白と黒</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>爪を隠す</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">爪を隠すが顔に出てしまうタイプ</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="45">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="ネコヒコ">
                                        <input type="hidden" name ="delete" value="45">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
                              <li>
                      <a class="male toDetail">
                          <h3 class="catName">政宗</h3>

                          <div class="contentsArea__contents--pcWidth">
                              <div class="contentsImage" style="background:url(../assets/images/catlist/HIRAyamatoneko_TP_V.jpg);background-position: center center;background-size: cover;">&nbsp;</div>
                              <div class="contents__details">
                                  <ul>



                                      <li>
                                          <div>地域</div>
                                          <div>                                      
                                              秋田県                                          </div>
                                    </li>

                                    <li>
                                          <div>年齢</div>
                                          <div>1歳</div>
                                    </li>

                                    <li>
                                        <div>性別</div>
                                        <div>
                                        オス                                      </div>
                                    </li>
                                    <li>
                                          <div>色</div>
                                          <div>白黒</div>
                                      </li>
                                    <li>
                                        <div>特技</div>
                                        <div>宅配</div>
                                    </li>

                                  </ul>
  
                              </div><!--  //.contents__details -->
                          </div> <!-- //.pcwidth -->
                        
                          <div class="box">成りすまし系男子</div>
                          
                          <ul class="operation">
                                <li>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name ="id" value="47">
                                        <input type="submit" value="変更" class="button--white">
                                    </form>
                                </li>
                                <li>                                
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="name" value="政宗">
                                        <input type="hidden" name ="delete" value="47">
                                        <input type="submit" value="削除" class="button--white">
                                    </form>
                                </li>
                          </ul>

                      </a>
                  </li>
            
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