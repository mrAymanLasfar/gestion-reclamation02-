<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-2xl font-bold">Societe agriculture</a>
        <div>
            <a href="{{ url('/') }}" class="text-white px-4 py-2">Accueil</a>
            <a href="{{ url('/about') }}" class="text-white px-4 py-2">About</a>
            <a href="{{ url('/contact') }}" class="text-white px-4 py-2">Contactez nous</a>
            @auth
            <a href="{{ url('/logout') }}" class="text-white px-4 py-2">Déconnexion</a>
        @else
            <a href="{{ url('/login') }}" class="text-white px-4 py-2">Connexion</a>
            <a href="{{ url('/register') }}" class="text-white px-4 py-2">Inscription</a>
        @endauth
        </div>
    </div>
</nav>
