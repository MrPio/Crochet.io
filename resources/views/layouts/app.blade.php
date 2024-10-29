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
    {{-- Logo + Navbar --}}
    <div class="page padding">
        <div id="row">

            {{-- Logo --}}
            <div id="logo" class="clickable" onclick="window.location='{{@route('home')}}'" style="min-width: 11rem">
                <img src="{{asset('images/logo-2.png')}}" alt="website logo" style="width: 4rem">
                <p>Intrecci di<br>passione</p>
            </div>

            <div style="width: max-content"></div>

            {{-- Navbar --}}
            @include('layouts.navbar')
        </div>
    </div>

    {{--Header--}}
    <div>
        @yield('header')
    </div>

    <div class="page padding" style="margin-top: 40px">
        @yield('content')
    </div>

    <div>
        @yield('header2')
    </div>
    <div class="page padding" style="margin-top: 40px">
        @yield('content2')
    </div>
</div>

{{-- Footer --}}
@include('layouts.footer')

</body>
</html>
