<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' ----- ') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            Equipe Info
        </div>
        <div class="card-body">
            <h5 class="card-title">id equipe: {{$equipe->id_equipe}}</h5>
            <p class="card-text">nom equipe: {{$equipe->nom_equipe}}</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Equipe Info
        </div>
        <div class="card-body">
            <h5 class="card-title">nombre maximal users: {{$equipe->nombre_maximal_users ?? 'not found'}}</h5>
            <p class="card-text">Created At: {{$equipe->created_at ?? 'not found'}}</p>
            <p class="card-text">Updated At: {{$equipe->updated_at ?? 'not found'}}</p>
        </div>
    </div>
</x-layouts.app>