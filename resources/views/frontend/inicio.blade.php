@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">

@livewire('slide-category', ['categoryId' => 10])
@livewire('slide-category', ['categoryId' => 1])
<h3 class="tituloSlide">
    Productos inicio
</h3>
<hr style="margin: 0;">
<br>
<br><br>

<section class="productsV2 row">
    @foreach ($products as $product)
    <div class="col-md-4 col-xl-3">
        @php
        $version = 'v2';
        @endphp
        @livewire('product-'.$version, ['product' => $product])
    </div>
    @endforeach
</section>

<!-- <section class="ietmsP1 row" id="ietmsP">
    @foreach ($products as $product)
    <div class="col-md-4 col-xl-3">
    </div>
    @endforeach
</section> -->
<script>
    let ancho = document.documentElement.clientWidth;
    // var categorySlide = document.getElementById('slideCategory');
    var elms = document.getElementsByClassName('splide');
    var pan0 = 1750;
    var pan1 = 900;
    var pan2 = 650;
    var Arreglo = null;
    var splide = new Array(elms.length);
    for (var i = 0; i < elms.length; i++) {
        splide[i] = new Splide(elms[i], {
            perPage: 4,
            perMove: 1,
            drag: 'free',
            autoplay: true,
            type: 'loop',
            // padding: '3rem'
        });


        splide[i].mount();



        splide[i].on('resized', function() {
            var t = true;
            var panActual = 0;
            var pan0 = 1750;
            var pan_1 = 1749;
            var pan1 = 1000;
            var pan2 = 650;
            let ancho = document.documentElement.clientWidth;
            for (var j = 0; j < splide.length; j++) {
                if (ancho > pan0 && t) {
                    splide[j].options.padding = '8rem';
                    splide[j].options.perPage = 4;
                    panActual = pan0;

                } else
                if (ancho > pan1 && ancho < pan0 && t) {
                    splide[j].options.perPage = 4;
                    panActual = pan_1;
                } else
                if (ancho > pan2 && ancho < pan1 && t) {
                    splide[j].options.perPage = 3;

                    panActual = pan1;
                } else
                if (ancho < pan2 && t) {
                    splide[j].options.perPage = 2;
                    panActual = pan2;
                }

                t = false;

                if (ancho > panActual || ancho < panActual) {
                    t = true;
                }
            }
        });

    }
</script>
@endsection