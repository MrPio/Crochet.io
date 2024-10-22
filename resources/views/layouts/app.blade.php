<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intrecci di Passione | @yield('title', 'Home')</title>

{{--    <script src="{{asset('js/jquery.min.js')}}"></script>--}}
{{--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>--}}

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
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
