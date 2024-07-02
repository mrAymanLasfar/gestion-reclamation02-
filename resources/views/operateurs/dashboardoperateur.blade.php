
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard operateur') }}
        </h2>
    </x-slot>
    <style>
        .class1{
            margin-bottom: 10px ;
        }
    </style>
    <!-- Your content here -->
    <<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-wrap justify-center gap-4">
                        <!-- Premier bloc -->
                        <div class="flex items-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ route('creerreclamation') }}" class="btn btn-dark underline text-gray-900 dark:text-dark">Voir les réclamations</a>
                            </div>
                        </div>
    
                        <!-- Deuxième bloc -->
                        <div class="flex items-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 01-9-9V4a1 1 0 011-1h12a1 1 0 011 1v8a1 1 0 01-1 1h-2"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ route('creerconversation') }}" class=" btn btn-dark underline text-gray-900 dark:text-dark">Voir les conversations</a>
                            </div>
                        </div>
    
                        <!-- Troisième bloc -->
                        <div class="flex items-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ route('creermessage') }}" class="btn btn-dark underline text-gray-900 dark:text-dark">Voir les messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layouts.app>