@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">

<section class="contenedor">

    <h1 class="tituloCategoria">Productos</h1>
    <hr>

    @livewire('products-search')

    <br>

    <br>
</section>
@endsection