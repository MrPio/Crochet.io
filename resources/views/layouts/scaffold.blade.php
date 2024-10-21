<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<head>
    @section('script')
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/functions.js')}}"></script>
    @show
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crochet.io | @yield('title', 'Home')</title>
    @vite(['public/css/style.css','resources/js/app.js'])
</head>
<body>

{{--Top Banner--}}
<div id="banner" class="padding">
    <p>HAI QUALCHE DOMANDA? CONTATTAMI SU <a href="//wa.me/393393932405"><strong>WHATSAPP AL 339 3932405</strong></a>
    </p>
</div>

<div id="page">
    @yield('body')
</div>
</body>
</html>
