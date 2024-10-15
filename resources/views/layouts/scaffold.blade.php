<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
<head>
    @section('script')
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/functions.js')}}"></script>
    @show
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Crochet.io | @yield('title', 'Home')</title>
</head>
<body>
<div id="page">
    @yield('body')
</div>
</body>
</html>
