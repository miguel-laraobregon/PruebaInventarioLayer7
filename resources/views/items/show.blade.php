<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Artículo: {{ $item->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're in the show item section!") }}
                </div> -->
                <div class="p-6 text-gray-900">
                    <h4 class="text-lg font-bold">{{ $item->name }}</h4>
                    <h3>Descripción: {{ $item->description }}</h3>
                    <h3>Cantidad: {{ $item->quantity }}</h3>
                    <h3>Precio: ${{ $item->price }}</h3>
                    <h3>Creador: {{ $item->user->name }}</h3>
                </div>
                <div class="p-6">
                    <a href="{{ route('items.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
