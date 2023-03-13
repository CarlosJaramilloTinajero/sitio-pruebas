@extends('index')
@section('content')
    <link rel="stylesheet" href="{{ asset('styleInicio.css') }}">

    <section class="contenedor loading">

        <h1 class="tituloCategoria loading">{{ $categoria->name }}</h1>
        <hr class="loading">

        @livewire('products-categoy', ['category' => $categoria])
        <div class="animacionCarga" id="animacionCarga">
        </div>

        <script>
            window.onload = () => {
                window.scroll(0, 0);
            };
            let loadings = document.getElementsByClassName('loading');
            let id = setTimeout(() => {
                let animacion = document.getElementById('animacionCarga');
                animacion.style.opacity = 0;
                for (let i = 0; i < loadings.length; i++) {
                    loadings[i].style.opacity = "1";
                }
                window.clearInterval(id);
            }, 2000);
        </script>
        <br>

        <br>
    </section>
@endsection
