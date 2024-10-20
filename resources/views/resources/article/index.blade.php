@props(['articles'=>[],
     'search_string'=>'',
 ])
@php use App\Models\Article; @endphp
@extends('layouts.public')
@section('title', 'Catalogo')

@section('header')

@endsection


@section('content')
    <div class="row padding" style="width: auto">

        {{--Filtering--}}
        <div class="sidebar">
            <div class="filter--item">
                <h3> Vendita </h3>
                <div data-role="content" class="filter-options-content" role="tabpanel" aria-hidden="false" style="">
                    <form autocomplete="off">
                        <ol class="">
                            <li class="item">
                                <a class="clickable"
                                   href="https://www.manidifata.it/it/mondo-fai-da-te/uncinetto/creazioni-uncinetto.html?sale=1">
                                    Si
                                </a>
                        </ol>
                    </form>
                </div>
            </div>
        </div>

        {{--Catalogue Grid--}}
        @if($articles->isEmpty())
            <h1 style="margin-top: 60px; opacity: 0.25; text-align: center">Nessun risultato.</h1>
        @endif
        <div style="width: 100%">
            <input id="search" onkeyup="search(event.key)"
                   placeholder="Nome articolo"
                   value="{{$search_string}}" style="margin-bottom: 34px;">

            <div class="grid_responsive"
                 style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); row-gap: 40px; ">
                @foreach ($articles as $article)
                    @include('partials.article',['$article'=>$article])
                    @include('partials.article',['$article'=>$article])
                    @include('partials.article',['$article'=>$article])
                @endforeach
            </div>
        </div>
        <script>
            function search(key) {
                if (key == null || key === 'Enter') {
                    const search = document.getElementById('search').value;
                    let url = '{!! route('articles.index',[
                        'name'=>'param_name',
                    ])!!}';
                    url = url.replace('param_name', search);
                    window.location = url;
                }
            }

            function reset() {
                window.location = "{{route('articles.index')}}";
            }

            window.onload = function () {
                const input = document.getElementById('search');
                const length = input.value.length;
                input.selectionStart = 0;
                input.selectionEnd = length;
                input.focus();
            }
        </script>

@endsection
