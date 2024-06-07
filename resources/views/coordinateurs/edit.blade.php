{{-- 
<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer Coordinateurs') }}
        </h2>
    </x-slot>


    <form method="POST" action="{{route('coordinateurs.update' , $coordinateur->id_coordinateur)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">id coordinateur</label>
            <input name="id_coordinateur" type="text" value="{{$coordinateur->id_coordinateur}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">nom </label>
            <input name="nom_coordinateur" type="text" value="{{$coordinateur->nom_coordinateur}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">email </label>
            <input name="email_coordinateur" type="text" value="{{$coordinateur->email_coordinateur}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">password </label>
            <input name="password_coordinateur" type="text" value="{{$coordinateur->password_coordinateur}}" class="form-control">
        </div>
        
        <button class="btn btn-primary">Update</button>
    </form>


</x-layouts.app> --}}


{{-- 
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer Coordinateurs') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('coordinateurs.update', $coordinateur->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom Coordinateur</label>
            <input name="nom_coordinateur" type="text" value="{{ $coordinateur->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email Coordinateur</label>
            <input name="email_coordinateur" type="email" value="{{ $coordinateur->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Password Coordinateur</label>
            <input name="password_coordinateur" type="password" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</x-layouts.app> --}}








<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer Coordinateur') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('coordinateurs.update', $coordinateur->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">ID Coordinateur</label>
            <input name="id" type="text" value="{{ $coordinateur->id }}" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Nom Coordinateur</label>
            <input name="name" type="text" value="{{ $coordinateur->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email Coordinateur</label>
            <input name="email" type="email" value="{{ $coordinateur->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Password Coordinateur</label>
            <input name="password" type="password" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</x-layouts.app>
