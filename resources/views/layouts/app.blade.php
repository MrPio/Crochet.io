<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home') | Intrecci di Passione</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body style="background-color: var(--on_background)">

{{--Top Banner--}}
<div id="banner" class="padding">
    <p>HAI QUALCHE DOMANDA? CONTATTAMI SU <a href="//wa.me/393393932405"><strong>WHATSAPP AL 339 3932405</strong></a>
    </p>
</div>

<div style="background-color: var(--background)">
    <div class="page">
        @yield('body')
    </div>
</div>

{{-- Footer --}}
@include('layouts.footer')
</body>
</html>
