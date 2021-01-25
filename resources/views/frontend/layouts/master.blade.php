<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Modern Business - Start Bootstrap Template</title>

<!-- Bootstrap core CSS -->

<link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->

<link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
</head>

</head>
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')
</body>
