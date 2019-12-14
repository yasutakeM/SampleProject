@section('header')
<header class="commonHeader">
    <div class="commonHeader--wrap">
        <div class="commonHeader--inner">
            <a href="top"><img src="{{ asset('/images/logo2.svg') }}"></a>
        </div>

        <ul class="commonHeader__menu">
            <li>
                <a href="login" class="commonHeader__menu--menuButton" id="show">
                    <i class="">&nbsp;</i>
                    ログイン
                </a>
            </li>

            <li>
                <a href="regist"><i>&nbsp;</i>
                    会員登録
                </a>
            </li>
        </ul>
    </div>
</header>
@endsection