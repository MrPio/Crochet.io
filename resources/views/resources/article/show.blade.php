@props(['article'=>null ])
@extends('layouts.public')
@section('title', $article->title)


@section('content')
    <div class="padding" style="width: auto">

            <div class="row" style="background-color: var(--white)">
                <img src="{{asset('storage/'.$article->photos()[1])}}" alt=""
                     style="height: 42rem; margin: auto; border-radius: 2%"/>
            </div>
            <div style="width: 100%; margin-top: 5rem">
                <h2 style="font-size: xx-large">{{$article->title}}</h2>
                <h4 style="line-height: 1.5; font-size: larger">{{$article->description}}</h4>
{{--                @include('partials/button',['text'=>'Vai al Catalogo', 'route'=>route('articles.index')])--}}
                <h2 style="font-size: xxx-large">€ {{$article->formattedPrice()}}</h2>
            </div>
        <script type="module">
        </script>
@endsection