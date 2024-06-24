{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <a href="{{ route('creerequipe') }}" class="btn btn-primary">Créer Équipe</a> <br>
                        <a href="{{ route('creercoordinateur') }}" class="btn btn-primary">Créer Coordinateur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard admin') }}
        </h2>
    </x-slot>
    <style>
        .class1{
            margin-bottom: 10px ;
        }
    </style>

    <!-- Your content here -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        
                        <a href="{{ route('creerequipe') }}" class="btn btn-primary class1">Voir les Équipe</a> <br> 
                        <a href="{{ route('creercoordinateur') }}" class="btn btn-primary">Voir les Coordinateur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>



  
