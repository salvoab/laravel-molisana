@extends('layouts.app')

@section('title')
    Prodotti
@endsection

@section('content')
    
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
        @include('partials.paste_lunghe')
        @include('partials.paste_corte')
        @include('partials.paste_cortissime')
    </div>
@endsection