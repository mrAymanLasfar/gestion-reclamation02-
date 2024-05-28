
<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer equipes') }}
        </h2>
    </x-slot>


    <form method="POST" action="{{route('equipes.update' , $equipe->id_equipe)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">id equipe</label>
            <input name="id_equipe" type="text" value="{{$equipe->id_equipe}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">nom equipe</label>
            <input name="nom_equipe" type="text" value="{{$equipe->nom_equipe}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label"> nombre maximal users</label>
            <input name="nombre_maximal_users" type="number" value="{{$equipe->nombre_maximal_users}}" class="form-control">
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

        <button class="btn btn-primary">Update</button>
    </form>


</x-layouts.app>