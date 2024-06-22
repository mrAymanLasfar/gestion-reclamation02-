
<x-layouts.app>
    <style>
        .no-underline {
            text-decoration: none;
        }
</style>
<x-slot name="header">
    <a href="{{ route('dashboardcoordinateur') }}" class="no-underline">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard coordinateur') }}
        </h2>
    </a>
</x-slot>

    <h1>Creer operateur</h1>
    <div class="text-center">
        <a href="{{ route('operateurs.create') }}" class="btn btn-success">Creer operateur</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom operateur</th>
            <th scope="col">Email operateur</th>
            <th scope="col">Created At</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($operateurs as $operateur)
            <tr>
                <td>{{ $operateur->id }}</td>
                <td>{{ $operateur->name }}</td>
                <td>{{ $operateur->email }}</td>
                <td>{{ $operateur->created_at ? $operateur->created_at->format('Y-m-d') : 'Unknown' }}</td>
                <td>
                    <a href="{{ route('operateurs.show', $operateur->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('operateurs.edit', $operateur->id) }}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{ route('operateurs.destroy', $operateur->id) }}">
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
