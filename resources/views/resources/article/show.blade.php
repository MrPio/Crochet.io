@php use App\Models\Article; @endphp
@props(['article'=>null ])
@extends('layouts.app')
@section('title', $article->title)

@section('header')
    {{--Images carousel--}}
    <div style="background-color: var(--white)">
        <div class="page padding" style="background: none; padding: 3rem 0">
            @include('partials/carousel',['images'=>$article->photos(),'height'=>'44rem'])
        </div>
    </div>
@endsection


@section('content')
    {{--Title + Description + Price--}}
    <div style="width: 100%; margin-top: 3rem">
        <h2 style="font-size: xx-large">{{$article->title}}</h2>
        <h4 style="line-height: 1.5; font-size: larger">{{$article->description}}</h4>
        {{--                @include('partials/button',['text'=>'Vai al Catalogo', 'route'=>route('articles.index')])--}}
        <div class="row">
            <h2 style="font-size: xxx-large">€ {{$article->formattedPrice()}}</h2>
            <p style="margin-left: 2rem">Tasse incluse</p>
        </div>


    </div>
@endsection

@section('header2')
    <div style="margin-top:4rem; background-color: var(--white)">
        <div class="page padding" style="background-color: transparent">
            <div class="row" style=" padding:4rem 0 2rem 0; justify-content: space-between; ">
                <div style="">
                    <h2>Dimensioni</h2>
                    <h4 style="font-size: larger">{{$article->size}}</h4>
                </div>
                <div style="">
                    <h2>Tecnica</h2>
                    <h4 style="font-size: larger">{{$article->tool->name}}</h4>
                </div>
                <div style="">
                    <h2>Disponibilità</h2>
                    <h4 style="font-size: larger">{{$article->availability}}</h4>
                </div>
                <div style="">
                    <h2>Categoria</h2>
                    <h4 style="font-size: larger">{{$article->category->name}}</h4>
                </div>
                <div style="">
                    <h2>Composizione</h2>
                    <h4 style="font-size: larger">{{$article->composition}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content2')
    {{--Colors--}}
    <h2 style="margin-top: 3rem">Colori disponibili</h2>
    @if(isset($article->_colours))
        <div class="grid_responsive"
             style="margin-top: 2rem; grid-template-columns: repeat(auto-fill, minmax(58px, 1fr)); row-gap: 20px;">
            @foreach($article->colours() as $colour)
                <div style="align-items: center;">
                    <span class="clickable"
                          style="background-color: {{\App\Models\Colour::find($colour)->hex}}; margin:auto; cursor: pointer;  border-radius: 22%; height: 70px;width: 70px; display: flex;">
            </span>
                    <h4 class="overflow" style="margin-top: 1rem; text-align: center">{{$colour}}</h4>
                </div>
            @endforeach
        </div>
    @else
        <h4 style="font-size: larger">A scelta</h4>
    @endif

    {{--Suggested--}}
    @php
        $articles=Article::all()->random(min(6, Article::count()))->shuffle();
        @endphp
    <h2 style="margin-top: 6rem">Articoli suggeriti</h2>
    <div class="grid_responsive"
         style="margin-top: 2rem;    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); row-gap: 40px;">
        @foreach ($articles as $article)
            @include('partials.card',['$article'=>$article])
        @endforeach
@endsection

<script type="module">
</script>
