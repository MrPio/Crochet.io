@props([
    'article'=>null,
])

@vite('resources/css/partials/card.css')

<div class="card clickable shadow"
     onclick="window.location='{{route('articles.show',$article->id)}}'"
     style="background-image: url({{asset('storage/'.$article->thumbnail)}});">
    <div class="card--overlay">
        <div class="card--content">
            <h2 style="overflow: clip !important; text-overflow: ellipsis; white-space: nowrap;">{{$article->title}}</h2>
            <p class="overflow" style="margin-top: 10px">{{$article->description}}</p>
            {{--            @include('partials/button',['text'=>'Vedi i dettagli'])--}}
        </div>
    </div>
</div>

