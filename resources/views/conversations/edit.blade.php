
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer conv') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('conversations.update', $conversation->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom conversation</label>
            <input name="nom_conversations" type="text" value="{{ $conversation->nom_conversations}}" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="form-label">reclamation</label>
            <select name="id_reclamation" class="form-control">
                @foreach($reclamations as $reclamation)
                    <option value="{{ $reclamation->id }}">{{ $reclamation->nom_reclamations }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</x-layouts.app>
