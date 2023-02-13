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
    <form action="{{ route('user.update',['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <labe class="form-label">Nombre</labe>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <labe class="form-label">Apellido</labe>
            <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control">
        </div>
        <div class="mb-4">
            <labe class="form-label">Email</labe>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>
        @livewire('change-status', ['user' => $user])
        <div class="mb-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
</div>
@endsection