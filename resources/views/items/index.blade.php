<x-app-layout>
    <x-slot name="header" >
        <div class=" flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Artículos</h2>
            </div>
            <div class="flex items-center">
                <a href="{{ route('items.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Agregar Artículo</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're in the items section!") }}
                </div> -->
                
                <div class="p-6 text-gray-900">

                    <table class="table-auto min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Nombre</th>
                                <th class="border px-4 py-2">Descripción</th>
                                <th class="border px-4 py-2">Cantidad</th>
                                <th class="border px-4 py-2">Precio</th>
                                <th class="border px-4 py-2">Creador</th>
                                <th class="border px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="border px-4 py-2">{{ $item->name }}</td>
                                    <td class="border px-4 py-2">{{ $item->description }}</td>
                                    <td class="border px-4 py-2">{{ $item->quantity }}</td>
                                    <td class="border px-4 py-2">${{ $item->price }}</td>
                                    <td class="border px-4 py-2">{{ $item->user->name }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('items.show', $item) }}" class="text-green-500 hover:underline">Ver</a>
                                        @can('edit',$item)
                                            
                                            <a href="{{ route('items.edit', $item) }}" class="text-blue-500 hover:underline">Editar</a>
                                            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
