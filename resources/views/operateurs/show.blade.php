
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Operateur Details') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            Operateur {{$operateur->id}} Info
        </div>

        <div class="card-body">
            <h5 class="card-title">ID operateur: {{$operateur->id}}</h5>
            <p class="card-text">Nom operateur: {{$operateur->name}}</p>
            <p class="card-text">Email operateur: {{$operateur->email}}</p>
            <p class="card-text">Password operateur: {{$operateur->password}}</p>
            <p class="card-text">Created At: {{$operateur->created_at ? $operateur->created_at->format('Y-m-d') : 'Unknown'}}</p>
            <p class="card-text">Updated At: {{$operateur->updated_at ? $operateur->updated_at->format('Y-m-d') : 'Unknown'}}</p>
        </div>
    </div>
</x-layouts.app>