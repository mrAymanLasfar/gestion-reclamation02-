@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <header class="text-center mb-12">
        <div class="bg-white p-8 rounded-lg shadow-lg mx-auto max-w-4xl">
            <h1 class="text-5xl font-bold mb-4 text-indigo-600">À propos de l'entreprise</h1>
            <p class="text-lg mb-4 text-gray-600">Notre entreprise s'engage à fournir des solutions agricoles innovantes et durables. Découvrez notre histoire, notre mission, et les membres de notre équipe.</p>
        </div>
    </header>

    <!-- Mission -->
    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4 text-indigo-500">Notre Mission</h2>
        <div class="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg p-6">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <img src="{{ asset('images/notre_mission.jpg') }}" alt="Notre Mission" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
            <div class="md:w-1/2 md:pl-6">
                <p class="text-gray-700 leading-relaxed">Nous visons à révolutionner le secteur agricole avec des produits et services qui favorisent la durabilité et l'innovation. Notre mission est de soutenir les agriculteurs avec des solutions adaptées à leurs besoins spécifiques.</p>
            </div>
        </div>
    </section>

    <!-- Historique -->
    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4 text-indigo-500">Notre Historique</h2>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="py-6 border-b border-gray-300">
                <h3 class="text-xl font-semibold mb-2 text-indigo-500">Début de l'aventure</h3>
                <img src="{{ asset('images/Debut_Aventure.png') }}" alt="Début de l'aventure" class="w-full h-80 object-cover mb-4 rounded-lg shadow-md">
                <p class="text-gray-700 leading-relaxed">L'entreprise a été fondée en 2010 avec l'objectif de moderniser les pratiques agricoles. Depuis lors, nous avons continuellement élargi notre gamme de produits et services pour répondre aux besoins croissants du marché.</p>
            </div>
            <div class="py-6">
                <h3 class="text-xl font-semibold mb-2 text-indigo-500">Expansion et Innovations</h3>
                <img src="{{ asset('images/Expansion.jpg') }}" alt="Expansion et Innovations" class="w-full h-[800px] object-cover mb-4 rounded-lg shadow-md">
                <p class="text-gray-700 leading-relaxed">Au fil des ans, nous avons introduit plusieurs innovations majeures et avons élargi nos opérations à l'international. Nous restons engagés dans la recherche et le développement pour offrir des solutions de pointe.</p>
            </div>
        </div>
    </section>

    <!-- Équipe -->
    <section class="mb-12">
        <h2 class="text-3xl font-semibold mb-4 text-indigo-500">Notre Équipe</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Membre 1 -->
            <div class="border rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('images/agriculteur/person1.jpg') }}" alt="Membre de l'équipe" class="w-full h-[500px] object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">Nom du Membre 1</h3>
                    <p class="text-gray-700">Titre du poste ou rôle dans l'entreprise.</p>
                </div>
            </div>
            <!-- Membre 2 -->
            <div class="border rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('images/agriculteur/person2.jpg') }}" alt="Membre de l'équipe" class="w-full h-[500px] object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">Nom du Membre 2</h3>
                    <p class="text-gray-700">Titre du poste ou rôle dans l'entreprise.</p>
                </div>
            </div>
            <!-- Membre 3 -->
            <div class="border rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('images/agriculteur/person3.jpg') }}" alt="Membre de l'équipe" class="w-full h-[500px] object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-semibold mb-2 text-indigo-600">Nom du Membre 3</h3>
                    <p class="text-gray-700">Titre du poste ou rôle dans l'entreprise.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
