@extends('index')
@section('vistaInicio')

<div style="max-width: 1700px; margin-left: auto; margin-right: auto;">
@livewire('inicio-'. $version, ['products' => $products])
</div>
<script>
    var elms = document.getElementsByClassName('splide');

    for (var i = 0; i < elms.length; i++) {
        new Splide(elms[i], {
            type: 'loop',
            autoplay: true,
        }).mount();
    }
</script>
@endsection