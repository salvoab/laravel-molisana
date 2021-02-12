<section class="paste-lunghe">
    <h2>LE LUNGHE</h2>
    <div class="container">
        @foreach($paste_lunghe as $indice => $pasta)
            @include('partials.pasta')
        @endforeach
    </div>
</section>