
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('rec Details') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            rec {{$reclamation->id}} Info
        </div>

        <div class="card-body">
            <h5 class="card-title">ID reclamation: {{$reclamation->id}}</h5>
            <p class="card-text">Nom reclamation: {{$reclamation->nom_reclamations}}</p>
            <p class="card-text">Created At: {{$reclamation->created_at ? $reclamation->created_at->format('Y-m-d') : 'Unknown'}}</p>
            <p class="card-text">Updated At: {{$reclamation->updated_at ? $reclamation->updated_at->format('Y-m-d') : 'Unknown'}}</p>
        </div>
    </div>
</x-layouts.app>
