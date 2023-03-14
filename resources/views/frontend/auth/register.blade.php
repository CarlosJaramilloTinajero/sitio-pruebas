@extends('index')
@section('navbar')
    @livewire('navbar')
@endsection
@section('content')
    <div class="contenedorForm loading">
        @if (count($errors->all()) > 0)
            <h6 class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    - {{ $error }} <br>
                @endforeach
            </h6>
        @endif
        <form action="{{ route('registro') }}" method="post">
            @csrf
            <div class="mb-3">
                <labe class="form-label">Nombre</labe>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="mb-3">
                <labe class="form-label">Apellido</labe>
                <input type="text" name="lastname" id="" class="form-control">
            </div>
            <div class="mb-3">
                <labe class="form-label">Email</labe>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="status" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Estatus
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label">Confirmar contraseña</label>
                <input type="password" name="password-confirm" id="" class="form-control">
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>

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
