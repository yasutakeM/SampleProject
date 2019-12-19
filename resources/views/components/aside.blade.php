@section('aside')
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

 <h3>優秀な警備員をお探しの方はこちら</h3> 
     <a href="http://localhost:8888/guardiancat/" class="banner">
      <img src="{{ asset('/images/banner/04.gif') }}" alt="警備員をお探しの方はこちらから">
    </a>

    <a href="http://localhost:8888/guardiancat/" class="banner">
      <img src="{{ asset('/images/banner/06.jpg') }}" alt="警備員をお探しの方はこちらから">
    </a>

    <a href="http://localhost:8888/guardiancat/" class="banner">
      <img src="{{ asset('/images/banner/07.jpg') }}" alt="警備員をお探しの方はこちらから">
    </a>
  
  </aside>
@endsection