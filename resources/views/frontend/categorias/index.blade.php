@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">

<section class="contenedor">

    <h1 class="tituloCategoria loading">{{ $categoria->name }}</h1>
    <hr class="loading">

    @livewire('products-categoy', ['category' => $categoria])

    <br>

    <br>
</section>
@endsection