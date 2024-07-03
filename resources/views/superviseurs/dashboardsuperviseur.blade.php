
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard superviseur') }}
        </h2>
    </x-slot>

    <h1>les messages</h1>


        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">messages</th>
                    <th scope="col">
                        Créé à</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->contenu_du_message }}</td>
                        <td>{{ $message->created_at ? $message->created_at->format('Y-m-d') : 'Unknown' }}</td>
                        <td>
                            <a href="{{ route('messagescree.show', $message->id) }}" class="btn btn-info">Voir</a>
                            {{-- <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-primary">Edit</a> --}}
                            <form style="display: inline;" method="POST" action="{{ route('messages.destroy', $message->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table> 
    {{-- @endif--}}
</x-layouts.app>