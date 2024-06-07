{{-- <x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer equipes') }}
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




    <form method="POST" action="{{route('equipes.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">id equipe</label>
            <input name="id_equipe" type="text" class="form-control" value="{{old('id_equipe')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">nom equipe</label>
            <input name="nom_equipe" type="text" class="form-control" value="{{old('nom_equipe')}}">
        </div>
        <div class="mb-3">
            <label class="form-label"> nombre maximal users</label>
            <input name="nombre_maximal_users" type="number" class="form-control" value="{{old('nombre_maximal_users')}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Coordinateur</label>
            <select name="coordinateur_d_equipe" class="form-control">
                @foreach($coordinateurs as $coordinateur)
                    <option value="{{ $coordinateur->id }}">{{ $coordinateur->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>


</x-layouts.app> --}}




<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer equipes') }}
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

    <form method="POST" action="{{ route('equipes.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">id equipe</label>
            <input name="id_equipe" type="text" class="form-control" value="{{ old('id_equipe') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">nom equipe</label>
            <input name="nom_equipe" type="text" class="form-control" value="{{ old('nom_equipe') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">nombre maximal users</label>
            <input name="nombre_maximal_users" type="number" class="form-control" value="{{ old('nombre_maximal_users') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Coordinateur</label>
            <select name="id_coordinateur" class="form-control">
                @foreach($coordinateurs as $coordinateur)
                    <option value="{{ $coordinateur->id }}">{{ $coordinateur->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</x-layouts.app>
