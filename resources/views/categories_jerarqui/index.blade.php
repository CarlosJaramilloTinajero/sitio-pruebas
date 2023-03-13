@extends('index')

@section('navbar')
    @livewire('navbar')
@endsection


@section('vistaInicio')
    <link rel="stylesheet" href="{{ asset('styleInicio.css') }}">

    <section class="contenedor loading">

        @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
        @endif

        @if (session('error'))
            <h5 class="alert alert-danger">{{ session('error') }}</h5>
        @endif

        <h1 class="tituloCategoria">Lista de jerarquias</h1>
        <hr>

        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('jerarquia.create') }}">Agregar</a>
        </div>
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Triggers</th>
                    <th>Relacion</th>
                    <th>Mostrar productos</th>
                    <th>Busqueda</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ implode(', ', json_decode($item->triger, true)['triggers']) }}</td>
                        <td>{{ $item->getParent != null ? $item->getParent->name : 'Padre' }}</td>
                        <td>{{ $item->show_products }}</td>
                        <td>{{ $item->busqueda }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Acciones
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form action="{{ route('jerarquia.destroy', ['jerarquium' => $item->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Eliminar</button>
                                        </form>
                                    </li>

                                    <li><a class="dropdown-item"
                                            href="{{ route('jerarquia.edit', ['jerarquium' => $item->id]) }}">Editar</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <h5>Arbol</h5>
        <div class="d-flex justify-content-end">
            <a href="/ver-arbol" class="btn btn-primary">Ver Arbol</a>
        </div>
        <br>
        {{-- @foreach ($arbol as $item) --}}
        <p>{{ $arbol }}</p>
        {{-- @endforeach --}}
        <br>

        <br>
    </section>

    <!-- Modal agregar -->
    {{-- <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> --}}

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
