@section('header')
<header class="commonHeader">
    <div class="commonHeader--wrap">
        <div class="commonHeader--inner">
            <a href="top">ロゴエリア：to top</a>
        </div>

        <ul class="commonHeader__menu">
        @if (Route::has('login'))

        @auth

            <li>
                {{ Auth::user()->name }}<span>さん</span>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    ログアウト
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

            <li>
                <a href="{{ route('register') }}">
                    <i>3</i>
                    カート
                </a>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}" class="commonHeader__menu--menuButton" id="show">
                    ログイン
                </a>
            </li>

            <li>
                <a href="{{ route('register') }}">
                    会員登録
                </a>
            </li>
        @endauth
        @endif
        </ul>
    </div>
</header>
@endsection

