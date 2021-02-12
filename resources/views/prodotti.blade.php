@extends('layouts.app')

@section('title')
    Prodotti
@endsection

@section('content')
    
    @php
        $paste_lunghe = Arr::where($paste, function($pasta) {
            return $pasta->tipo == 'lunga';
        });

        $paste_corte = Arr::where($paste, function($pasta) {
            return $pasta->tipo == 'corta';
        });

        $paste_cortissime = Arr::where($paste, function($pasta) {
            return $pasta->tipo == 'cortissima';
        });

        $tipi_di_pasta = ["LE LUNGHE" => $paste_lunghe, "LE CORTE" => $paste_corte, "LE CORTISSIME" => $paste_cortissime];
        
    @endphp

    <div class="prodotti">
        @foreach($tipi_di_pasta as $chiave => $tipo)
            <section>
                <h2>{{ $chiave }}</h2>
                <div class="container">
                    @foreach($tipo as $indice => $pasta)
                        @include('partials.pasta')
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
    
@endsection