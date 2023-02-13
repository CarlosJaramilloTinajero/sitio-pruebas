<div>
    <div class="mb-3 form-check">
        @switch($user->status)
        
        @case(0)
        <input class="form-check-input" type="checkbox" wire:click="changeStaus">
        @break

        @case(1)
        <input class="form-check-input" type="checkbox" wire:click="changeStaus" checked>
        @break

        @endswitch

        <label class="form-check-label" for="flexCheckDefault">
            @switch($user->status)

            @case(0)
            Inactivo
            @break

            @case(1)
            Activo
            @break

            @endswitch
        </label>
    </div>
</div>