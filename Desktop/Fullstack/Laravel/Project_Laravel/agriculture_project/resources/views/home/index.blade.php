@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <!-- En-tête avec Image -->
    <header class="text-center mb-12 relative h-96">
        <!-- Image d'en-tête -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/imageHome.jpg') }}" alt="Agriculture" class="w-full h-full object-cover opacity-70">
        </div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full p-4 bg-opacity-50 rounded-lg">
            <h1 class="text-5xl font-bold mb-4 text-black">Bienvenue sur notre site d'Agriculture</h1>
            <p class="text-xl mb-6 text-black">Découvrez nos produits, services et engagements envers l'agriculture durable.</p>
            <a href="{{ route('gallery') }}" class="bg-yellow-500 text-white px-6 py-3 rounded-lg text-lg">Voir la galerie</a>
        </div>
    </header>
    
    
 <!-- Nos Produits -->
<section class="mb-12 mt-8 relative">
    <h2 class="text-3xl font-semibold mb-6 text-center">Nos Produits</h2>
    <div class="relative">
        <button id="prevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-r-lg z-20">◀</button>
        <div class="overflow-hidden">
            <div class="flex space-x-6 transition-transform duration-300" id="produitsContainer">
                @foreach($produits as $produit)
                    <a href="{{ route('produits.show', $produit->id) }}" id="produit" class="border rounded-lg overflow-hidden w-80 flex-shrink-0 hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{ asset('images/Produits/' . $produit->image) }}" alt="{{ $produit->nom }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $produit->nom }}</h3>
                            <p class="text-gray-900 font-bold">{{ $produit->prix }} DH</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <button id="nextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-l-lg z-20">▶</button>
    </div>
</section>






   <!-- Nos Services -->
<section class="mb-12 mt-8">
    <h2 class="text-3xl font-semibold mb-6">Nos Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($services as $service)
        <a href="{{ route('services.show', $service->id) }}" class="block border rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('images/Services/' . $service->image) }}" alt="{{ $service->nom }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">{{ $service->nom }}</h3>
                <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($service->description, 100) }}</p> <!-- Limiter la description affichée -->
            </div>
        </a>
        @endforeach
    </div>
</section>


    <!-- À Propos de Nous -->
    <section class="mb-12 mt-8"> <!-- Ajout de mt-8 pour l'espacement au-dessus -->
        <h2 class="text-3xl font-semibold mb-6">À Propos de Nous</h2>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <img src="{{ asset('images/about_us.jpeg') }}" alt="À Propos de Nous" class="w-full h-64 object-cover rounded-lg">
            </div>
            <div class="md:w-1/2 md:pl-6">
                <p class="text-gray-700">Nous sommes une entreprise dédiée à fournir les meilleurs produits et services agricoles. Notre mission est de soutenir l'agriculture durable et d'aider nos clients à atteindre leurs objectifs grâce à des solutions innovantes.</p>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('js/scroll.js') }}"></script>
@endsection
