{{-- <x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer coordinateur') }}
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

    <form method="POST" action="{{route('coordinateurs.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">id coordinateur</label>
            <input name="id_coordinateur" type="text" class="form-control" value="{{old('id_coordinateur')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">nom coordinateur</label>
            <input name="nom_coordinateur" type="text" class="form-control" value="{{old('nom_coordinateur')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">email coordinateur</label>
            <input name="email_coordinateur" type="text" class="form-control" value="{{old('email_coordinateur')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">password coordinateur</label>
            <input name="password_coordinateur" type="text" class="form-control" value="{{old('password_coordinateur')}}">
        </div>

        <button class="btn btn-success">Submit</button>
    </form>


</x-layouts.app> --}}



<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Coordinateur') }}
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

    <form method="POST" action="{{ route('coordinateurs.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</x-layouts.app>
