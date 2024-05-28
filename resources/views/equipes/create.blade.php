{{-- 
<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>

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
            <th scope="col">actions</th>
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
        {{-- <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" class="form-control"  rows="3">{{old('description')}}</textarea>
        </div> --}}

        {{-- <div class="mb-3">
            <label  class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div> --}}

        <button class="btn btn-success">Submit</button>
    </form>


</x-layouts.app>