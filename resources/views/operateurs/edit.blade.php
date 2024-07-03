
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer Operateur') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('operateurs.update', $operateur->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">ID operateur</label>
            <input name="id" type="text" value="{{ $operateur->id }}" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Nom operateur</label>
            <input name="name" type="text" value="{{ $operateur->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email operateur</label>
            <input name="email" type="email" value="{{ $operateur->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe operateur</label>
            <input name="password" type="password" class="form-control">
        </div>
        <button class="btn btn-secondary"> Mise à jour</button>
    </form>
</x-layouts.app>
