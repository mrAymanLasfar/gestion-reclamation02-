<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Agricole</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.navbar')
    
    <div class="min-h-screen">
        @yield('content')
    </div>
    @include('partials.footer')
    @vite('resources/js/app.js')
</body>
</html>
