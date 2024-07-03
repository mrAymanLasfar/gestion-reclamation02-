
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('mess Details') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            message {{$message->id}} Infos
        </div>

        <div class="card-body">
            <h5 class="card-title">ID message: {{$message->id}}</h5>
            <p class="card-text">contenu message: {{$message->contenu_du_message}}</p>
            <p class="card-text">Créé à: {{$message->created_at ? $message->created_at->format('Y-m-d') : 'Unknown'}}</p>
            <p class="card-text">Mis à jour à: {{$message->updated_at ? $message->updated_at->format('Y-m-d') : 'Unknown'}}</p>
        </div>
    </div>
</x-layouts.app>
