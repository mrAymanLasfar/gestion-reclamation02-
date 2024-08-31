@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <!-- Section principale -->
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-3xl mx-auto">
        <!-- Image du produit -->
        <div class="relative mb-6">
            <img src="{{ asset('images/Produits/' . $produit->image) }}" alt="{{ $produit->nom }}" class="w-full h-64 object-cover rounded-t-lg">
        </div>
        
        <!-- Contenu du produit -->
        <div class="p-6">
            <!-- Titre -->
            <h1 class="text-4xl font-bold mb-4">{{ $produit->nom }}</h1>
            <!-- Description -->
            <p class="text-gray-700 mb-4">{{ $produit->description }}</p>
            <!-- Prix -->
            <p class="text-gray-900 text-lg font-bold mb-6">{{ $produit->prix }} DH</p>
            
            <!-- Bouton de retour -->
            <div class="text-center mt-8">
                <a href="{{ route('home') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-600 transition duration-300">Retour à l'Accueil</a>
            </div>
        </div>
    </div>
</div>
@endsection
