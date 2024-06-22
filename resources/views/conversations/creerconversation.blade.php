
<x-layouts.app>
    <style>
        .no-underline {
            text-decoration: none;
        }
</style>
<x-slot name="header">
    <a href="{{ route('dashboardoperateur') }}" class="no-underline">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard operateur') }}
        </h2>
    </a>
</x-slot>

    <h1>Creer conv</h1>
    <div class="text-center">
        <a href="{{ route('conversations.create') }}" class="btn btn-success">Creer conversations</a>
    </div>


        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom conversation</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conversations as $conversation)
                    <tr>
                        <td>{{ $conversation->id }}</td>
                        <td>{{ $conversation->nom_conversations }}</td>
                        <td>{{ $conversation->created_at ? $conversation->created_at->format('Y-m-d') : 'Unknown' }}</td>
                        <td>
                            <a href="{{ route('conversations.show', $conversation->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('conversations.edit', $conversation->id) }}" class="btn btn-primary">Edit</a>
                            <form style="display: inline;" method="POST" action="{{ route('conversations.destroy', $conversation->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    {{-- @endif --}}
</x-layouts.app>