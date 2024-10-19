@props([
    'article'=>null,
])

@php
    $photos=explode(':',$article->photo);
    $photo=asset('storage/'.$photos[0]);
    $formattedPrice = number_format($article->price, 2, ',', '.'); // Format the number with 2 decimal places and commas
@endphp

<link rel="stylesheet" href="{{asset('css/partials/article.css')}}">

<div class="clickable">
    <div class="article"
         @if(isset($route)) onclick="window.location='{{route('articles.show')}}/{{$article->id}}'" @endif
         style="background-image: url({{$photo}});">
    </div>
    <div class="article--content">
        <h4 style="text-transform: uppercase; margin: 10px 0">{{$article->category->name}}</h4>
        <h3 >{{$article->title}}</h3>
        <p class="price">€ {{$formattedPrice}}</p>
    </div>
</div>

