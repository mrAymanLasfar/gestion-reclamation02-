@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <!-- Section principale -->
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-3xl mx-auto">
        <!-- En-tête de la section -->
        <div class="relative mb-6">
            <!-- Image de couverture -->
            <img src="{{ asset('images/Services/' . $service->image) }}" alt="{{ $service->nom }}" class="w-full h-64 object-cover rounded-t-lg">
            <!-- Titre -->
            <h1 class="absolute inset-0 flex items-center justify-center text-4xl font-bold text-white bg-black bg-opacity-50 rounded-t-lg">{{ $service->nom }}</h1>
        </div>

        <!-- Contenu du service -->
        <div class="p-6">
            <!-- Description -->
            <p class="text-gray-700 leading-relaxed mb-6">{{ $service->description }}</p>
            
            <!-- Points forts du service -->
            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-4">Points Forts</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                    <li><i class="fas fa-check-circle mr-2 text-green-500"></i> Point fort 1</li>
                    <li><i class="fas fa-check-circle mr-2 text-green-500"></i> Point fort 2</li>
                    <li><i class="fas fa-check-circle mr-2 text-green-500"></i> Point fort 3</li>
                </ul>
            </div>

            <!-- Carte de localisation -->
            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-4">Localisation</h2>
                <iframe class="w-full h-64 border-0 rounded-lg" src="https://www.google.com/maps/embed?pb={{ $service->map_embed_code }}" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Bouton de retour -->
            <div class="text-center mt-8">
                <a href="{{ url()->previous() }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-600 transition duration-300">Retour aux Services</a>
            </div>
        </div>
    </div>
</div>
@endsection
