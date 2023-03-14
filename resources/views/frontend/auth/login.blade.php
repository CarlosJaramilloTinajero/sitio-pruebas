@extends('index')
@section('navbar')
    @livewire('navbar')
@endsection
@section('content')
    <div class="contenedorForm loading">

        @if (session()->exists('error'))
            <h6 class="alert alert-danger">{{ session('error') }}</h6>
        @endif

        @if (count($errors->all()) > 0)
            <h6 class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    - {{ $error }} <br>
                @endforeach
            </h6>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Login</button>
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
