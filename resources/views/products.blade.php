@extends('layouts.app')

@section('title', 'products')

@section('content')

<div class="products">

    @foreach ($pasta as $element)
    <div class="card">
        <img src="{{ $element['src'] }}" alt="">
        <div class="layover">
            <h3>Tipo: {{ $element['tipo'] }}</h3>
            <h3>Cottura: {{ $element['cottura'] }}</h3>
            <h3>Descrizione:</h3>
            <p>{{ $element['descrizione'] }}</p>
        </div>
    </div>
    @endforeach

</div>

@endsection