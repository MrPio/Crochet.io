@props([
    'article'=>null,
])
@vite('resources/css/partials/article.css')

<div class="clickable" onclick="window.location='{{route('articles.show',$article->id)}}'">
    <div class="article"
         @if(isset($route)) onclick="window.location='{{route('articles.show')}}/{{$article->id}}'" @endif
         style="background-image: url({{asset('storage/'.$article->thumbnail)}});">
    </div>
    <div class="article--content">
        <h4 style="text-transform: uppercase; margin: 10px 0">{{$article->category->name}}</h4>
        <h3>{{$article->title}}</h3>
        <p class="price">€ {{$article->formattedPrice()}}</p>
    </div>
</div>

