
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

    <h1>Creer une reclamation</h1>
    <div class="text-center">
        <a href="{{ route('reclamations.create') }}" class="btn btn-dark">Creer reclamation</a>
    </div>


        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom reclamation</th>
                    <th scope="col">
                        Créé à</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reclamations as $reclamation)
                    <tr>
                        <td>{{ $reclamation->id }}</td>
                        <td>{{ $reclamation->nom_reclamations }}</td>
                        <td>{{ $reclamation->created_at ? $reclamation->created_at->format('Y-m-d') : 'Unknown' }}</td>
                        <td>
                            <a href="{{ route('reclamations.show', $reclamation->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('reclamations.edit', $reclamation->id) }}" class="btn btn-secondary">Modifier</a>
                            <form style="display: inline;" method="POST" action="{{ route('reclamations.destroy', $reclamation->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    {{-- @endif --}}
</x-layouts.app>