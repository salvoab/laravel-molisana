@extends('layouts.app')

@section('title')
    Prodotti
@endsection

@section('content')
    <!-- <img src="{{ $paste[0]->src }}" alt=""> -->
    @php
        $paste_lunghe = Arr::where($paste, function($pasta, $chiave) {
            return $pasta->tipo == 'lunga';
        });

        $paste_corte = Arr::where($paste, function($pasta, $chiave) {
            return $pasta->tipo == 'corta';
        });

        $paste_cortissime = Arr::where($paste, function($pasta, $chiave) {
            return $pasta->tipo == 'cortissima';
        });
    @endphp

    <div class="prodotti">
        <!-- {{ var_dump($paste_lunghe['0']) }}   -->
        <section class="paste-lunghe">
            <h2>LE LUNGHE</h2>
            <div class="container">
                @foreach($paste_lunghe as $pasta)
                    <div class="pasta">
                        <img class="pasta-img" src="{{ $pasta->src }}" alt="{{ $pasta->titolo }}">
                        <div class="overlay">
                            <h3>{{ $pasta->titolo }}</h3>
                            <img class="icon" src="{{ asset('img/icon.svg') }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection