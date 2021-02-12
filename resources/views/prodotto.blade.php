@extends('layouts.app')

@section('title')
    Prodotto
@endsection

@section('content')
    <section class="singolo-prodotto">
        <h2>{{ $pasta->titolo }}</h2>
        <div class="container">
            <div class="img-wrapper">
                <img src="{{ $pasta->src }}" alt="{{ $pasta->titolo }}">
            </div>
            <h2>Descrizione</h2>
            <div class="descrizione">{!! $pasta->descrizione !!}</div>
            <h2>Cottura</h2>
            <p class="cottura">{{ $pasta->cottura }}</p>
        </div>
    </section>
@endsection