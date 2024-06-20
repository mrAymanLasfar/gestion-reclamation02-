
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer rec') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('reclamations.update', $reclamation->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom reclamation</label>
            <input name="nom_reclamations" type="text" value="{{ $reclamation->nom_reclamations }}" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</x-layouts.app>
