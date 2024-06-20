

<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create rec') }}
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

    <form method="POST" action="{{ route('reclamations.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="nom_reclamations" type="text" class="form-control" value="{{ old('nom_reclamations') }}">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</x-layouts.app>
