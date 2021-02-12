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
                <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
                <a href="{{ route('prodotti') }}" class="{{ Route::currentRouteName() === 'prodotti' ? 'active' : '' }}">PRODOTTI</a>
                <a href="{{ route('contatti') }}" class="{{ Route::currentRouteName() === 'contatti' ? 'active' : '' }}">CONTATTI</a>
            </nav>
        </header>
        
        @yield('content')

        <footer>
            <div class="container">
                <div class="footer-logo col">
                    <img src="{{asset('img/logo.png') }}" alt="Logo Molisana">
                </div>
                <div class="col">
                    <h3>PASTIFICIO</h3>
                    <ul>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <h3>PRODOTTI</h3>
                    <ul>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>COLLEZIONE DA CHEF</h3>
                    <ul>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <h3>NEWS</h3>
                    <ul>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="info">
                        <li> <strong>RAGIONE SOCIALE:</strong> LA MOLISANA S.P.A.</li>
                        <li> <strong>SEDE LEGALE:</strong> CONTRADA DELLE API</li>
                        <li> <strong>PEC:</strong> LAMOLISANA@PEC.IT</li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>