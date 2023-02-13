<div>
    <div class="contenedorForm">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="mb-3">
            <label for="" class="form-label">Buscar usuarios</label>
            <input wire:model="search" type="text" id="search" class="form-control" placeholder="Nombre, email ó Apellido">
        </div>
    </div>

    <div class="tabla-users">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @livewire('change-status', ['user' => $user])
                    </td>
                    <td>
                        <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acciones
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a></li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>