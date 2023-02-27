@extends('index')

@section('navbar')
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);">
        <div class="container-fluid" style="max-width: 1000px; position: relative;">
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @livewire('menu-categorias')
                    @livewire('marcas-dropdown')

                    <div style="position: absolute; right: 0;">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/registro">Salir</a>
                        </li>
                        @endauth

                    </div>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos catalogos
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="/productos-catalogo/v2">version 2</a></li>
                            <li><a class="dropdown-item" href="/productos-catalogo/v3">version 3</a></li>
                            <li><a class="dropdown-item" href="/productos-catalogo/v4">version 4</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Editores blog
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="/editor-quill">Quill</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vistas inicio
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="/vistas-inicio/v1">version 1</a></li>
                        </ul>
                    </li>
                    <!-- 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                API JsonPlaceHolder
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="/PruenasGuzzle/posts">Posts</a></li>

                            </ul>
                        </li> -->
                </ul>
                <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
            </div>
        </div>
    </nav>
</header>
@endsection


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