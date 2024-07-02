
<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard coordinateur') }}
        </h2>
    </x-slot>
    <style>
        .class1{
            margin-bottom: 10px ;
        }
    </style>
    <!-- Your content here -->
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
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 11a4 4 0 100-8 4 4 0 000 8z"></path>
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <a href="{{ route('creeroperateur') }}" class="underline text-gray-900 dark:text-dark btn btn-dark">Voir les Operateurs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 11a4 4 0 100-8 4 4 0 000 8z"></path>
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <a href="{{ route('creersuperviseur') }}" class="underline text-gray-900 dark:text-dark btn btn-dark">Voir les Superviseurs</a>
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
</x-layouts.app>