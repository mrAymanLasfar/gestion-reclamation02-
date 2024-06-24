
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <a href="{{ route('creerreclamation') }}" class="btn btn-primary class1">Voir les reclamations</a><br>
                        <a href="{{ route('creerconversation') }}" class="btn btn-primary class1">Voir les conversations</a><br>
                        <a href="{{ route('creermessage') }}" class="btn btn-primary">Voir les messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>