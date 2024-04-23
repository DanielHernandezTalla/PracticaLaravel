<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <x-slot name="header">
        <div class="flex align-items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800">
                {{ __('Usuarios') }}
            </h2>
            <a href={{ route('usuarios.create') }} type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Agregar
                Usuario</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="relative overflow-x-auto mb-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        nombre de usuario
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Correo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha registro
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hash
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td scope="row"
                                            class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $usuario->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $usuario->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ ucfirst(\Carbon\Carbon::parse($usuario->created_at)->locale('es')->isoFormat('H:m:s dddd D \d\e MMMM \d\e\l Y')) }}
                                        </td>
                                        <td class="px-6 py-4 max-w-48 overflow-hidden text-ellipsis">
                                            {{ $usuario->password }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href={{ route('usuarios.show', ['id' => $usuario->id]) }}
                                                class="font-medium text-green-600 dark:text-blue-500 hover:underline">Ver</a>
                                            <a href={{ route('usuarios.edit', ['id' => $usuario->id]) }}
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline ms-2">Editar</a>
                                            <form class="inline-block" method="POST"
                                                action="{{ route('usuarios.destroy', ['id' => $usuario->id]) }}">
                                                @method('delete')
                                                @csrf
                                                <button type="button"
                                                    data-modal-target="confirm-delete{{ $usuario->id }}"
                                                    data-modal-toggle="confirm-delete{{ $usuario->id }}"
                                                    class="font-medium text-red-600 dark:text-blue-500 hover:underline ms-2">Eliminar</button>

                                                {{-- Pasar una variable --}}
                                                {{-- <x-modal-confirm usuario="{{$usuario->id}}" /> --}}

                                                {{-- Pasar un objeto --}}
                                                <x-modal-confirm :usuario="$usuario" />
                                            </form>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</x-app-layout>
