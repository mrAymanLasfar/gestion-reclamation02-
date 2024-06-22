{{-- 
<x-layouts.app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>

    <h1>creer coordinateur</h1>
    <div class="text-center">
        <a href="{{ route('coordinateurs.create') }}" class="btn btn-success">Creer coordinateur</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">id_coordinateur</th>
            <th scope="col">nom coordinateur</th>
            <th scope="col">email coordinateur</th>
            <th scope="col">password coordinateur</th>
            <th scope="col">created_at</th>
            <th scope="col">options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coordinateurs as $coordinateur)
            <tr>
                <td>{{ $coordinateur->id_coordinateur }}</td>
                <td>{{ $coordinateur->nom_coordinateur }}</td>
                <td>{{ $coordinateur->email_coordinateur }}</td>
                <td>{{ $coordinateur->password_coordinateur }}</td>
                <td>{{ $coordinateur->created_at ? $coordinateur->created_at->format('Y-m-d') : 'Unknown' }}</td>
                <td>
                    <a href="{{ route('coordinateurs.show', $coordinateur->id_coordinateur) }}" class="btn btn-info">View</a>
                    <a href="{{ route('coordinateurs.edit', $coordinateur->id_coordinateur) }}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{ route('coordinateurs.destroy', $coordinateur->id_coordinateur) }}">
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


 --}}








{{-- 



 <x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>

    <h1>Creer Coordinateur</h1>
    <div class="text-center">
        <a href="{{ route('coordinateurs.create') }}" class="btn btn-success">Creer Coordinateur</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom Coordinateur</th>
            <th scope="col">Email Coordinateur</th>
            <th scope="col">Created At</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coordinateurs as $coordinateur)
            <tr>
                <td>{{ $coordinateur->id }}</td>
                <td>{{ $coordinateur->name }}</td>
                <td>{{ $coordinateur->email }}</td>
                <td>{{ $coordinateur->created_at ? $coordinateur->created_at->format('Y-m-d') : 'Unknown' }}</td>
                <td>
                    <a href="{{ route('coordinateurs.show', $coordinateur->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('coordinateurs.edit', $coordinateur->id) }}" class="btn btn-primary">Edit</a>

                    <form style="display: inline;" method="POST" action="{{ route('coordinateurs.destroy', $coordinateur->id) }}">
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
 --}}




 <x-layouts.app>
    <style>
            .no-underline {
                text-decoration: none;
            }
    </style>
    <x-slot name="header">
        <a href="{{ route('dashboardadmin') }}" class="no-underline">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard admin') }}
            </h2>
        </a>
    </x-slot>

    <h1>Creer Coordinateur</h1>
    <div class="text-center">
        <a href="{{ route('coordinateurs.create') }}" class="btn btn-success">Creer Coordinateur</a>
    </div>

    {{-- @if ($coordinateurs->isEmpty())
        <p>No coordinateurs found.</p>
    @else --}}
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom Coordinateur</th>
                    <th scope="col">Email Coordinateur</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coordinateurs as $coordinateur)
                    <tr>
                        <td>{{ $coordinateur->id }}</td>
                        <td>{{ $coordinateur->name }}</td>
                        <td>{{ $coordinateur->email }}</td>
                        <td>{{ $coordinateur->created_at ? $coordinateur->created_at->format('Y-m-d') : 'Unknown' }}</td>
                        <td>
                            <a href="{{ route('coordinateurs.show', $coordinateur->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('coordinateurs.edit', $coordinateur->id) }}" class="btn btn-primary">Edit</a>

                            <form style="display: inline;" method="POST" action="{{ route('coordinateurs.destroy', $coordinateur->id) }}">
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





