@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">

<section class="contenedor">

    <h1 class="tituloCategoria">{{ $marca->nombre }}</h1>
    <hr>

    @livewire('products-marca', ['marca' => $marca])

    <br>

    <br>
</section>
@endsection