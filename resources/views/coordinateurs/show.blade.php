<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' ----- ') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            Coordinateur {{$coordinateur->id_coordinateur}} Info
        </div>

        <div class="card-body">
            <h5 class="card-title">id_coordinateur: {{$coordinateur->id_coordinateur}}</h5>
            <p class="card-text">nom_coordinateur: {{$coordinateur->nom_coordinateur}}</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Coordinateur {{$coordinateur->id_coordinateur}} Info
        </div>
        <div class="card-body">
            {{-- <h5 class="card-title">nombre maximal users: {{$equipe->nombre_maximal_users ?? 'not found'}}</h5> --}}
            <p class="card-text">email_coordinateur: {{$coordinateur->email_coordinateur ?? 'not found'}}</p>
            <p class="card-text">password_coordinateur: {{$coordinateur->password_coordinateur ?? 'not found'}}</p>
            <p class="card-text">Created At: {{$coordinateur->created_at ?? 'not found'}}</p>
            <p class="card-text">Updated At: {{$coordinateur->updated_at ?? 'not found'}}</p>
        </div>
    </div>
</x-layouts.app>