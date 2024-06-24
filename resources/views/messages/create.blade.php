

<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create message') }}
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

    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">contenu</label>
            {{-- <input name="contenu_du_message" type="textarea" class="form-control" value="{{ old('contenu_du_message') }}"> --}}
            <textarea name="contenu_du_message" class="form-control" value="{{ old('contenu_du_message') }}" rows="2" cols="10">
               
            </textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">conversation</label>
            <select name="id_conversation" class="form-control">
                @foreach($conversations as $conversation)
                    <option value="{{ $conversation->id }}">{{ $conversation->nom_conversations }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</x-layouts.app>
