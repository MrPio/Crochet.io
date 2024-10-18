@php
    $url = $_SERVER['REQUEST_URI'];
@endphp
@extends('layouts.scaffold')

@section('body')

    {{-- Logo + Navbar --}}
    <div class="padding" style="margin-bottom: 40px">
        <div id="row">

            {{-- Logo --}}
            <div id="logo" class="clickable" onclick="window.location='{{@route('home')}}'">
                <img src="{{asset('images/logo-2.png')}}" alt="website logo" style="width: 4rem">
                <p>Fili di<br>passione</p>
            </div>

            <div style="width: max-content"></div>

            {{-- Navbar --}}
            @include('layouts.navbar')
        </div>
    </div>

    {{--Header--}}
    <div class="padding">
        @yield('header')
    </div>

    <div style="margin-bottom: 100px">
        @yield('content')
    </div>

    {{-- Footer --}}
    {{--@include('layouts.footer')--}}
@endsection
