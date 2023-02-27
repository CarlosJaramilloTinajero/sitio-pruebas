@extends('index')

@section('navbar')
<header>
    <nav class="loading navbar navbar-expand-lg bg-body-tertiary fixed-top" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);">
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

@section('vistaInicio')

<div style="max-width: 1700px; margin-left: auto; margin-right: auto;">
    @livewire('inicio-'. $version, ['products' => $products])
</div>

<script>
    var elms = document.getElementsByClassName('splide');

    for (var i = 0; i < elms.length; i++) {
        new Splide(elms[i], {
            type: 'loop',
            autoplay: true,
        }).mount();
    }
</script>
@endsection