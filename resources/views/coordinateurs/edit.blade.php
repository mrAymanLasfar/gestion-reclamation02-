
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