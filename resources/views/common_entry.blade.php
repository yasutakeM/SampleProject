<!DOCTYPE html>
<html lang="ja">
<head>
@yield('head')
</head>
<body>


@yield('topArea')
<div class="loginContainer">
<h2 class="singleLogo--pc">
    <img src="{{ asset('/images/logo2.svg') }}" alt="保護猫"/>
</h2>


        @yield('content')


</div>

<ul class="memberLink">
    <li>
        <a href="reset.php">パスワードを忘れた方</a>
    </li>
    <li>
        <a href="entry.php">会員登録はこちら</a>
    </li>
</ul>

    @include('components.footer')

</body>
</html>