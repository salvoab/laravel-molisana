@extends('layouts.app')

@section('title')
    Prodotti
@endsection

@section('content')
    <!-- {{var_dump($paste[0]->src)}} -->
    <img src="{{ $paste[0]->src }}" alt="">
@endsection