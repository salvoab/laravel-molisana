<div class="pasta">
    <img class="pasta-img" src="{{ $pasta->src }}" alt="{{ $pasta->titolo }}">
    <div class="overlay">
        <a href="{{ Route::currentRouteName().'/'.$indice}}">{{ $pasta->titolo }}</a>
        <img class="icon" src="{{ asset('img/icon.svg') }}" alt="">
    </div>
</div>