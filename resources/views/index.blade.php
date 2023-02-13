<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas LiveWare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @livewireStyles

    <!-- AOS Animate Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Splide JS -->
    <link rel="stylesheet" href="{{asset('splide-4.1.3/dist/css/splide.min.css')}}">
    <script src="{{asset('splide-4.1.3/dist/js/splide.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@1,500&family=Roboto+Flex:opsz,wght@8..144,600&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        /* ::-webkit-scrollbar {
            display: none;
        } */

        .tabla-users {
            width: 95%;
            max-width: 1000px;
            margin: 20px auto;
        }

        .marginTop {
            margin-top: 57px;
        }

        .contenedorForm {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>

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

    <div class="contenedor">
        @yield('content')
    </div>

    <div class="marginTop">
        @yield('vistaInicio')
    </div>

    @livewireScripts

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>