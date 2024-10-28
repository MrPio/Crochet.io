@props([
    'article'=>null,
])

@php
    $photos=explode(':',$article->photo);
    $photo=asset('storage/'.$photos[0]);
@endphp

@vite('resources/css/partials/card.css')

<div class="card clickable shadow"
     @if(isset($route)) onclick="window.location='{{route('articles.show')}}/{{$article->id}}'" @endif
     style="background-image: url({{$photo}});">
    <div class="card--overlay">
        <div class="card--content">
            <h2 style="overflow: clip !important; text-overflow: ellipsis; white-space: nowrap;">{{$article->title}}</h2>
            <p class="overflow" style="margin-top: 10px">{{$article->description}}</p>
            {{--            @include('partials/button',['text'=>'Vedi i dettagli'])--}}
        </div>
    </div>
</div>

