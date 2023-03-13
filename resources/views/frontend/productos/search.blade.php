@extends('index')

@section('navbar')
    @livewire('navbar', ['resultado' => $resultado])
@endsection


@section('vistaInicio')
    {{-- <link rel="stylesheet" href="{{ asset('styleInicio.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('styleSearch.css') }}">


    <section class="contenedorSearch loading">

        @if ((!$resultado && !$category) || !$category->getChilds || $category->show_products == 1)
            <h1 class="tituloSearch">Productos</h1>
            <hr>
        @endif

        @if ($resultado && $category && count($category->getChilds) > 0)
            <h1 class="tituloSearch">Hijos</h1>
            <hr>

            <div class="childs row">
                @foreach ($category->getChilds as $item)
                    <div class="col col-2 col-lg-3">
                        <div class="child" onclick="location.href='/search/{{ $item->busqueda }}'">
                            <div class="title-div">
                                <p>{{ $item->name }}</p>
                            </div>
                            <div class="imagen">
                                <img src="https://media.mervins.com.mx/images/products/asus/rog-strix-rtx3050-o8g-gaming/96806505_3897592059.jpg"
                                    alt="">
                            </div>
                            @if (count($item->getChilds) > 0)
                                <div class="relations">
                                    @foreach ($item->getChilds as $item)
                                        <a href="{{ $item->busqueda }}">{{ $item->name }}</a>
                                        <br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </section>

    <div class="animacionCarga" id="animacionCarga">
    </div>

    {{-- Cambiamos la url --}}
    <script>
        let path = "{{ $url }}";
        console.log(path);
        history.pushState(null, null, path);
    </script>

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
        }, 200);
    </script>
@endsection
