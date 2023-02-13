<div class="contenedorForm">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <button wire:click="increment" class="btn btn-primary">+</button>
    <button wire:click="decrement" class="btn btn-primary">-</button>

    <h1>{{ $count }}</h1>
</div>
