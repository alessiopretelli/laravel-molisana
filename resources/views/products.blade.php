@extends('layouts.app')

@section('title', 'products')

@section('content')

    @foreach ($formati as $tipo => $formato)
    <h1>{{ $tipo }}</h1>

    <div class="products">
        @foreach ($formato as $key => $prodotto)
            <div class="card">
                <img src="{{ $prodotto['src'] }}" alt="">
                <div class="layover">
                    <a href="{{ route('details_product', ['id' => $key]) }}">
                        <h3>{{ $prodotto['titolo'] }}</h3>
                        <i class="fas fa-utensils"></i>
                    </a>
                </div> 
            </div>
        @endforeach
    </div>

    @endforeach

@endsection