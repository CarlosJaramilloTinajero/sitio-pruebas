@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">
<div class="container">
    <h3 class="tituloCategoria">Posts</h3>
    <div class="contenedor">
        @foreach ($posts as $post)
        <div class="mb-4" style="background-color: rgba(0, 0, 0, 0.2); backdrop-filter: blur(10px); padding: 30px; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
            <h5 class="tituloPost">{{ $post->title }}</h5>
        </div>
        @endforeach

    </div>
</div>
@endsection