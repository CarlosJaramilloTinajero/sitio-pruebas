<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Marcas
    </a>
    <ul class="dropdown-menu">
        @foreach ($marcas as $marca)
        @if (count($marca->products) > 0)
        <li><a class="dropdown-item" href="">{{ $marca->name }}</a></li>
        @endif
        @endforeach
    </ul>
</li>