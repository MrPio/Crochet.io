@extends('layouts.public')
@section('title', 'Home')

@section('header')
    <div class="row">
        <div>
            <h1>Il Made-in-Italy<br>Fatto a Mano,<br>con Amore.</h1>
            <h4>Progetti creativi esclusivi,<br>
                disponibilità per lavori su commissione,<br>
                attenzione ai dettagli e qualità,<br>
                rigorosamente Made in Italy.</h4>
            @include('partials/button',['text'=>'Vai al Catalogo'])
        </div>
        <div style="width: 0rem"></div>
        <img src="{{asset('images/owl_1.jpg')}}" alt="" style="height: 30rem;"/>
    </div>
@endsection


@section('content')

@endsection
