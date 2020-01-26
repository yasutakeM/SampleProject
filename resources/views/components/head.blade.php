@section('head')
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
<link rel="stylesheet" href="{{ asset('/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@yield('css')

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/icons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="64x64" href="{{ asset('/images/icons/favicon-64x64.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/icons/favicon-96x96.png') }}">
<link rel="apple-touch-icon" href="{{ asset('/images/icons/fapple-touch-icon.png') }}">

<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
@yield('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@endsection