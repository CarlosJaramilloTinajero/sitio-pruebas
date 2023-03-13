@extends('index')

@section('navbar')
    @livewire('navbar')
@endsection


@section('vistaInicio')
    <link rel="stylesheet" href="{{ asset('styleInicio.css') }}">

    <section class="contenedor loading" style="max-width: 600px;">

        @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
        @endif

        @if (session('error'))
            <h5 class="alert alert-danger">{{ session('error') }}</h5>
        @endif

        @if ($errors->has('name'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="tituloCategoria">Agergar categoria</h1>
        <hr>

        <form action="{{ route('jerarquia.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input required type="text" name="name" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Trigerrs (Separados por un '-')</label>
                <input required type="text" name="triggers" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Relacion</label>
                <select name="relacion_id" id="" class="form-control">
                    <option value="null">Jerarquia padre</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Mostrar productos</label>
                <select name="show_products" id="" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Busqueda (Tiene que tener el nombre de un
                    trigger)</label>
                <input required type="text" name="busqueda" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

        <br>
    </section>

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
        }, 200);
    </script>
@endsection
