@extends('layouts.app')

@section('title', 'details')

@section('content')

<div class="details">
    <img src="{{ $formato['src'] }}" alt="">
    <div class="info_details">
        <h1>{{ $formato['titolo'] }}</h1>
        <div class="i_d_product">
            <h3>Tipo:</h3>
            <p>{{ $formato['tipo'] }}</p>
        </div>
        <div class="i_d_product">
            <h3>Cottura:</h3>
            <p>{{ $formato['cottura'] }}</p>
        </div>
        <div class="i_d_product">
            <h3>Peso netto:</h3>
            <p>{{ $formato['peso'] }}</p>
        </div>
        <div class="i_d_product">
            <h3>Descrizione:</h3>
            <div class="descrizione">{!! $formato['descrizione'] !!}</div>
        </div>
    </div>
</div>

@endsection