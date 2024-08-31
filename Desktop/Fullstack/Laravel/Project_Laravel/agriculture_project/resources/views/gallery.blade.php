@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-4xl font-bold mb-8 text-center text-indigo-600">Exposition</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Image 1 -->
        <div class="bg-gray-200 p-6 rounded-lg shadow-md">
            <img src="{{ asset('images/expo1.jpg') }}" alt="Exposition 1" class="w-full h-64 object-cover rounded-lg mb-4">
            <p class="text-gray-700">Description de l'image 1</p>
        </div>

        <!-- Image 2 -->
        <div class="bg-gray-200 p-6 rounded-lg shadow-md">
            <img src="{{ asset('images/expo2.jpg') }}" alt="Exposition 2" class="w-full h-64 object-cover rounded-lg mb-4">
            <p class="text-gray-700">Description de l'image 2</p>
        </div>

        <!-- Image 3 -->
        <div class="bg-gray-200 p-6 rounded-lg shadow-md">
            <img src="{{ asset('images/expo3.jpg') }}" alt="Exposition 3" class="w-full h-64 object-cover rounded-lg mb-4">
            <p class="text-gray-700">Description de l'image 3</p>
        </div>

        <!-- Ajouter plus d'images ici avec une structure similaire -->
    </div>
</div>
@endsection
