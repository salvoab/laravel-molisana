<section class="paste-lunghe">
    <h2>LE CORTISSIME</h2>
    <div class="container">
        @foreach($paste_cortissime as $indice => $pasta)
            @include('partials.pasta')
        @endforeach
    </div>
</section>