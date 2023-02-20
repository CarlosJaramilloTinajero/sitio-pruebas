<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Categorias
    </a>
    <ul class="dropdown-menu">
        @foreach ($categorias as $categoria)
        @if (count($categoria->products) > 0)
        <li><a class="dropdown-item" href="{{ route('category.show', ['id' => $categoria->id]) }}">{{ $categoria->name }}</a></li>
        @endif
        @endforeach
    </ul>
</li>