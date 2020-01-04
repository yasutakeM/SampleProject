<!DOCTYPE html>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
@yield('header')

@yield('topArea')
<div class="contentsWrap">
    <div class="contentsArea">

        @yield('catch')

        @yield('content')

        @yield('pagenation')
    </div>  
    @yield('aside')
</div>

    @include('components.footer')

</body>
</html>