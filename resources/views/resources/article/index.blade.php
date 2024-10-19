@php use App\Models\Article; @endphp
@extends('layouts.public')
@section('title', 'Catalogo')

@section('header')

@endsection


@section('content')
    @php
        $articles=Article::all()
    @endphp
    <div class="grid_responsive padding"
         style="    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); row-gap: 40px;">
    @foreach ($articles as $article)
        @include('partials.article',['$article'=>$article])
    @endforeach

@endsection
