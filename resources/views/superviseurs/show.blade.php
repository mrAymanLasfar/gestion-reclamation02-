
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Superviseur Details') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            Superviseur {{$superviseur->id}} Info
        </div>

        <div class="card-body">
            <h5 class="card-title">ID superviseur: {{$superviseur->id}}</h5>
            <p class="card-text">Nom superviseur: {{$superviseur->name}}</p>
            <p class="card-text">Email superviseur: {{$superviseur->email}}</p>
            <p class="card-text">Password superviseur: {{$superviseur->password}}</p>
            <p class="card-text">Created At: {{$superviseur->created_at ? $superviseur->created_at->format('Y-m-d') : 'Unknown'}}</p>
            <p class="card-text">Updated At: {{$superviseur->updated_at ? $superviseur->updated_at->format('Y-m-d') : 'Unknown'}}</p>
        </div>
    </div>
</x-layouts.app>