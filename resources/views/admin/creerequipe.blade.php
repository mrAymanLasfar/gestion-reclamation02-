{{-- @extends('layouts.app')

@section('title') Creer equipe @endsection

@section('content')
    <div class="text-center">
        <a href="{{route('equipes.create')}}" class="btn btn-success">Creer equipe</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">id_equipe</th>
            <th scope="col">nom equipe</th>
            <th scope="col">nombre maximal users</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipes as $equipe)
            <tr>
                <td>{{$equipe->id_equipe}}</td>
                <td>{{$equipe->nom_equipe}}</td>
                <td>{{$equipe->nombre_maximal_users}}</td>
                <td>{{$equipe->created_at ? $equipe->created_at->format('Y-m-d') : 'Unknown'}}</td>
                <td>
                    <a href="{{route('equipes.show', $equipe->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('equipes.edit', $equipe->id)}}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{route('equipe.destroy', $equipe->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection --}}




{{-- @extends('layouts.app')

@section('title') Creer equipe @endsection

@section('content') --}}

<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>


    <div class="text-center">
        <a href="{{ route('equipes.create') }}" class="btn btn-success">Creer equipe</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">id_equipe</th>
            <th scope="col">nom equipe</th>
            <th scope="col">nombre maximal users</th>
            <th scope="col">created_at</th>
            <th scope="col">options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipes as $equipe)
            <tr>
                <td>{{ $equipe->id_equipe }}</td>
                <td>{{ $equipe->nom_equipe }}</td>
                <td>{{ $equipe->nombre_maximal_users }}</td>
                <td>{{ $equipe->created_at ? $equipe->created_at->format('Y-m-d') : 'Unknown' }}</td>
                <td>
                    <a href="{{ route('equipes.show', $equipe->id_equipe) }}" class="btn btn-info">View</a>
                    <a href="{{ route('equipes.edit', $equipe->id_equipe) }}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{ route('equipes.destroy', $equipe->id_equipe) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{-- @endsection --}}

</x-layouts.app>