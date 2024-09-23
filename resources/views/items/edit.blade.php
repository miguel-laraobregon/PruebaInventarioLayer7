<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Artículo: {{$item->name}}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                You're in the edit item section!
                </div> -->
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('items.update', $item) }}" class="mt-6 space-y-6">
                    
                        @csrf
                        @method('PATCH')

                        <div>
                            <x-input-label for="name" :value="__('Nombre')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $item->name) }}" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Descripción')" />
                            <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >{{ old('description', $item->description) }}</textarea>

                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="quantity" :value="__('Cantidad')" />
                            <x-text-input id="quantity" name="quantity" type="number" class="mt-1 block w-full" value="{{ old('quantity', $item->quantity) }}" />
                            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="price" :value="__('Precio')" />
                            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" value="{{ old('price', $item->price) }}" step="0.01" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                    
                        <div class="flex justify-end gap-4">
                            <x-href-button href="/items">Cancelar</x-secondary-button>
                            <x-primary-button>Guardar</x-primary-button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
