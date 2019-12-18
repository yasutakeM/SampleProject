@section('aside')
<aside class="sidebar">
  <div class="memberLink--side">

  @if (Route::has('login'))
                        @auth
                        <a class="dropdown-item button--white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                         
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="button--orange">会員登録</a>
                            @endif
                              <p>会員登録済みの方はこちら</p>
                              <a href="{{ route('login') }}" class="button--white">ログイン</a>

 
                        @endauth
  @endif



        <div class="publicWrap">
        登録警備員総数
            <div class="publicInfomation">
                <span>27匹</span>
            </div>
        </div>
    </div>
    <img src="{{ asset('/images/banner/04.gif') }}" alt="banner">
    <img src="{{ asset('/images/banner/04.gif') }}" alt="banner">
    <img src="{{ asset('/images/banner/04.gif') }}" alt="banner">
    <img src="{{ asset('/images/banner/04.gif') }}" alt="banner">    
  </aside>
@endsection