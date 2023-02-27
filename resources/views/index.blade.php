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

    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- AOS Animate Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Splide JS -->
    <link rel="stylesheet" href="{{asset('splide-4.1.3/dist/css/splide.min.css')}}">
    <script src="{{asset('splide-4.1.3/dist/js/splide.min.js')}}"></script>

    <!-- Icons google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fonts google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Plus+Jakarta+Sans:ital,wght@1,500&family=Roboto+Flex:opsz,wght@8..144,600&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    @yield('navbar')

    <div class="contenedor">
        @yield('content')
    </div>

    <div class="marginTop">
        @yield('editor')
    </div>

    <div class="marginTop">
        @yield('vistaInicio')
    </div>


    @livewireScripts

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 160
        });
    </script>
</body>

</html>