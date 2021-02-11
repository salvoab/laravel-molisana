<section class="paste-lunghe">
    <h2>LE CORTE</h2>
    <div class="container">
        @foreach($paste_corte as $pasta)
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