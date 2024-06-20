
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer message') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('messages.update', $message->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">contenu message</label>
            <input name="contenu_du_message" type="text" value="{{ $message->contenu_du_message}}" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="form-label">conversation</label>
            <select name="id_conversation" class="form-control">
                @foreach($conversations as $conversation)
                    <option value="{{ $conversation->id }}">{{ $conversation->nom_conversations }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</x-layouts.app>
