@extends('index')
@section('content')
<div class="contenedorForm">
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
            <labe class="form-label">Contraseña</labe>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <div class="mb-4">
            <labe class="form-label">Confirmar contraseña</labe>
            <input type="password" name="password-confirm" id="" class="form-control">
        </div>
        <div class="mb-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>
@endsection