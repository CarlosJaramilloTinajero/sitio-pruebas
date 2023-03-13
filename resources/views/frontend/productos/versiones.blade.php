@extends('index')
@section('content')

<!-- <script>
    window.onresize = function() {
        var names = document.getElementsByClassName('nameProduct');
        for (let i = 0; names < array.length; i++) {
            names[i].style.fontSize = "font-size: calc(12px + 6 * ((100vw - 200px) / 800));";
        }
    };
</script> -->
<link rel="stylesheet" href="{{asset('styleInicio.css')}}">
<h3 class="tituloSlide">
    Productos version {{$version}}
</h3>
<hr style="margin: 0;">
<br>
<br><br>

<section class="productsVersions row">
    @foreach ($products as $product)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        @livewire('product-'.$version, ['product' => $product])
    </div>
    @endforeach
</section>

<!-- <script>
    function namesEvent() {
        alert("sdfds");
        var names = document.getElementsByClassName('nameProduct');
        for (let i = 0; names < array.length; i++) {
            names[i].style.fontSize = "font-size: calc(12px + 6 * ((100vw - 200px) / 800));";
        }
    }
</script> -->


@endsection