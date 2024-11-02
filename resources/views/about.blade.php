@extends('layouts.app')
@section('title', 'Chi sono')



@section('content')
    <div class="row">
        {{--Picture--}}
        <div style="width: 48%; display: flex; margin-right: auto;">
            <img src="{{asset('storage/who.png')}}" alt="author"
                 style="max-width:100%;max-height:42rem; margin-left: auto; border-radius: 12% 2% 12% 2%"/>
        </div>

{{--Title + description--}}
        <div style=" width: 48%; min-width: 38rem">
            <h1 style="text-align: right">Chi c'è<br>dietro le quinte?</h1>

            <h4 style="text-align: right;font-size: larger">Da sempre appassionata dei lavori del fatto a mano, Da sempre appassionata dei lavori del fatto
                a mano, Da sempre appassionata dei lavori del fatto a mano, Da sempre appassionata dei lavori del fatto a mano, Da sempre
                appassionata dei lavori del fatto a mano, Da sempre appassionata dei lavori del fatto a mano, Da sempre appassionata dei
                lavori del fatto a mano, </h4>

            <div style="display:flex; justify-content: end">
            @include('partials/button',['text'=>'Vedi i miei lavori', 'route'=>route('articles.index')])
            </div>
        </div>
    </div>
@endsection
