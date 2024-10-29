@php use App\Models\Article; @endphp
@extends('layouts.app')
@section('title', 'Home')



@section('content')
    <div class="row">
        <div style="width: 48%; min-width: 38rem">
            <h1>Il Made-in-Italy<br>Fatto a Mano,<br>con Amore.</h1>
            <h4>Progetti creativi studiati con cura e attenzione.<br>
                Disponibilità per lavori su commissione.<br>
                Dedizione ai dettagli e alla scelta dei materiale.<br>
                Rigorosamente Made in Italy.</h4>
            @include('partials/button',['text'=>'Vai al Catalogo', 'route'=>route('articles.index')])
        </div>
        <div style="width: 48%; display: flex; margin-left: auto;">
            <img src="{{asset('storage/owl_2.jpg')}}" alt=""
                 style="max-width:100%;max-height:34rem; margin-left: auto; border-radius: 12% 2% 12% 2%"/>
        </div>
    </div>

    <div style="margin-top: 8rem">
        <div class="row" style="align-items: end">
            <h2>Nuovi articoli</h2>
            <h3 class="clickable" style="margin-left: auto" onclick="window.location='{{route('articles.index')}}'">Vedi
                tutta la merce</h3>
        </div>
        <span class="line"></span>
    </div>

    {{--Nuovi articoli grid--}}
    @php
        $articles=Article::all()
    @endphp
    <div class="grid_responsive"
         style="margin-top: 1rem;    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); row-gap: 40px;">
    @foreach ($articles as $article)
        @include('partials.card',['$article'=>$article])
    @endforeach
@endsection
