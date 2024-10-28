@php
    $url = $_SERVER['REQUEST_URI'];
@endphp
@extends('layouts.app')

@section('body')

    {{-- Logo + Navbar --}}
    <div class="padding" style="margin-bottom: 40px">
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
    <div class="padding">
        @yield('header')
    </div>

    <div>
        @yield('content')
    </div>
@endsection