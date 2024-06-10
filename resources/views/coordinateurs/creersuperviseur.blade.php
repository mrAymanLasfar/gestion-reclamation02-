
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>

    <h1>Creer superviseur</h1>
    <div class="text-center">
        <a href="{{ route('superviseurs.create') }}" class="btn btn-success">Creer superviseur</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom superviseur</th>
            <th scope="col">Email superviseur</th>
            <th scope="col">Created At</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($superviseurs as $superviseur)
            <tr>
                <td>{{ $superviseur->id }}</td>
                <td>{{ $superviseur->name }}</td>
                <td>{{ $superviseur->email }}</td>
                <td>{{ $superviseur->created_at ? $superviseur->created_at->format('Y-m-d') : 'Unknown' }}</td>
                <td>
                    <a href="{{ route('superviseurs.show', $superviseur->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('superviseurs.edit', $superviseur->id) }}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{ route('superviseurs.destroy', $superviseur->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layouts.app> 
