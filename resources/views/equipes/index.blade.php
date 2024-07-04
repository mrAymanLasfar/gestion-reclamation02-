<x-app-layout>
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
                    
                        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-gray-500 " fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M17 20h5v-2a3 3 0 00-5.89-1H5.89A3 3 0 000 18v2h5v-2a3 3 0 015.89-1h4.22A3 3 0 0017 20zM7 14a3 3 0 100-6 3 3 0 000 6zm10-3a3 3 0 110-6 3 3 0 010 6z"></path>
                                        </svg>
        
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <a href="{{ route('creerequipe') }}" class="underline text-gray-900 dark:text-dark btn btn-dark">Voir les Équipes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M9.75 9a4.25 4.25 0 108.5 0 4.25 4.25 0 00-8.5 0zM19.25 22.5v-2.875a2.875 2.875 0 00-2.875-2.875h-8.75A2.875 2.875 0 004.75 22.5V24h14.5v-1.5z"></path>

                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <a href="{{ route('creercoordinateur') }}" class="underline text-gray-900 dark:text-dark btn btn-dark">Voir les Coordinateurs</a>
                                        </div>
                                    </div>
                                </div>
                                
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




 
