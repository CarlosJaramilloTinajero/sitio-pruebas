@extends('index')
@section('content')
<div class="contenedorForm">

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
            <labe class="form-label">Email</labe>
            <input type="email" name="email" id="" class="form-control">
        </div>
        <div class="mb-3">
            <labe class="form-label">Contraseña</labe>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <div class="mb-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection