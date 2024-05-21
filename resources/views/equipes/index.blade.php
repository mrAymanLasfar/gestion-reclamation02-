{{-- @extends('layouts.app')

@section('title') Creer equipe @endsection

@section('content') --}}
    <div class="text-center">
        <a href="{{route('equipes.create')}}" class="btn btn-success">Creer equipe</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipes as $equipe)
            <tr>
                <td>{{$equipe->id}}</td>
                <td>{{$equipe->title}}</td>
                <td>{{$equipe->user ? $equipe->user->name : 'not found'}}</td>
                <td>{{$equipe->created_at ? $equipe->created_at->format('Y-m-d') : 'Unknown'}}</td>
                <td>
                    <a href="{{route('equipes.show', $equipe->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('equipes.edit', $equipe->id)}}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{route('equipes.destroy', $equipe->id)}}">
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
