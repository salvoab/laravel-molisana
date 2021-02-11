<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Molisana | @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <div class="logo-wrapper">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Molisana">
            </div>
            <nav>
                <a href="/">HOME</a>
                <a href="prodotti">PRODOTTI</a>
                <a href="contatti">CONTATTI</a>
            </nav>
        </header>
        
        @yield('content')

    </body>
</html>