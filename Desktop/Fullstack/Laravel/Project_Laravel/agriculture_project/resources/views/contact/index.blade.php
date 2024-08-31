@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 bg-gray-100 min-h-screen flex flex-col gap-12">
    <!-- Formulaire de Contact -->
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-center text-blue-600">Contactez-nous</h1>
        
        <!-- Afficher le message de succès -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nom</label>
                <input type="text" id="name" name="name" class="border border-gray-300 rounded-lg p-4 w-full focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required>
            </div>

            <div>
                <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" class="border border-gray-300 rounded-lg p-4 w-full focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required>
            </div>

            <div>
                <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Message</label>
                <textarea id="message" name="message" rows="6" class="border border-gray-300 rounded-lg p-4 w-full focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" required></textarea>
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-3 rounded-lg w-full hover:from-blue-600 hover:to-blue-800 transition duration-300">Envoyer</button>
            </div>
        </form>
    </div>
    
    <!-- Politique de Confidentialité et Conditions Générales -->
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-3xl w-full mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-center text-black-600">Politique de Confidentialité et Conditions Générales</h1>
        
        <!-- Politique de Confidentialité -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-black-500">Politique de Confidentialité</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ipsa inventore dolor esse tempora sint, rerum odit asperiores veniam cum praesentium deserunt similique ipsam consequuntur voluptate corporis numquam nobis beatae?.</p>
            <!-- Ajoutez le contenu détaillé de votre politique de confidentialité -->
        </section>

        <!-- Conditions Générales -->
        <section>
            <h2 class="text-3xl font-semibold mb-6 text-black-500">Conditions Générales</h2>
            <p class="text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic omnis incidunt sed impedit tenetur qui magnam quae cumque, necessitatibus aspernatur delectus quisquam iusto quam voluptatibus suscipit atque veritatis officia id..</p>
            <!-- Ajoutez le contenu détaillé de vos conditions générales -->
        </section>
    </div>
</div>
@endsection
