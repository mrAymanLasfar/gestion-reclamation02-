

<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create conversation') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('conversations.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom conversation</label>
            <input name="nom_conversations" type="text" class="form-control" value="{{ old('nom_conversations') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Reclamation</label>
            <select name="id_reclamation" class="form-control">
                @foreach($reclamations as $reclamation)
                    <option value="{{ $reclamation->id }}">{{ $reclamation->nom_reclamations }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</x-layouts.app>
