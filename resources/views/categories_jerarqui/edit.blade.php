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

        <h1 class="tituloCategoria">Editar categoria #{{ $category->id }}</h1>
        <hr>

        <form action="{{ route('jerarquia.update', ['jerarquium' => $category->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input required type="text" name="name" id="" value="{{ $category->name }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Trigerrs (Separados por un '-')</label>
                <input required type="text" name="triggers" id="" value="{{ $category->triger }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Relacion</label>
                <select name="relacion_id" id="" class="form-control">
                    <option value="null">Jerarquia padre</option>
                    @foreach ($categories as $item)
                        <option @if ($category->relation_id == $item->id) selected @endif value="{{ $item->id }}">
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Mostrar productos</label>
                <select name="show_products" id="" class="form-control">
                    <option value="0" @if ($category->show_products == 0) selected @endif>No</option>
                    <option value="1" @if ($category->show_products == 1) selected @endif>Si</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Busqueda (Tiene que tener el nombre de un
                    trigger)</label>
                <input required type="text" name="busqueda" id="" value="{{ $category->busqueda }}"
                    class="form-control">
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
