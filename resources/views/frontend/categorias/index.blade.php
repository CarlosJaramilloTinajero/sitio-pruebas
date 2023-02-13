@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">

<section class="contenedor">

    <h1 class="tituloCategoria">{{ $categoria->name }}</h1>
    <hr>

    @livewire('products-categoy', ['category' => $categoria])

    <br>

    <br>
</section>
@endsection