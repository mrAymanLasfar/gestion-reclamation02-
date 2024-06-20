
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('conv Details') }}
        </h2>
    </x-slot>
    <div class="card mt-4">
        <div class="card-header">
            rec {{$conversation->id}} Info
        </div>

        <div class="card-body">
            <h5 class="card-title">ID conversation: {{$conversation->id}}</h5>
            <p class="card-text">Nom conversation: {{$conversation->nom_conversations}}</p>
            {{-- <p class="card-text"> appartient au reclamat: {{$conversation->nom_conversations}}</p> --}}
            <p class="card-text">Created At: {{$conversation->created_at ? $conversation->created_at->format('Y-m-d') : 'Unknown'}}</p>
            <p class="card-text">Updated At: {{$conversation->updated_at ? $conversation->updated_at->format('Y-m-d') : 'Unknown'}}</p>
        </div>
    </div>
</x-layouts.app>
