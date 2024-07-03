
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
                                            <path d="M6.62 10.79a15.08 15.08 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.27 11.48 11.48 0 004.08.78 1 1 0 011 1v3.51a1 1 0 01-.93 1A16.13 16.13 0 012 4.93a1 1 0 011-1H6.5a1 1 0 011 1 11.48 11.48 0 00.78 4.08 1 1 0 01-.27 1.11l-2.2 2.2z"></path>
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <a href="{{ route('creeroperateur') }}" class="underline text-gray-900 dark:text-dark btn btn-dark">Voir les Operateurs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                    <div class="flex items-center">
                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M4 4h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1zm5 2v4H6V6h3zm0 6v4H6v-4h3zm5 0v4h-3v-4h3zm0-6v4h-3V6h3zm5 0v10h-3V6h3z"></path>

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