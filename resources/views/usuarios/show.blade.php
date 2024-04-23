<x-app-layout>
    <x-slot name="header">
        <div class="flex align-items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800">
                {{ __('Usuario') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <ul>
                                <li class="font-bold mb-1">Error al insertar los datos.</li>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form>
                        <div class="mb-5">
                            <label for="name" class="block mb-2 font-medium text-gray-900 text-sm">Nombre de
                                usuario</label>
                            <input type="text" id="name" name="name" autofocus
                                class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 w-full p-2.5"
                                placeholder="Escribe tu nombre..." title="Escribe tu nombre"
                                value="{{ old('name', $usuario->name) }}">
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 font-medium text-gray-900 text-sm">Correo</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 w-full p-2.5"
                                placeholder="Escribe tu correo..." title="Escribe tu correo"
                                value="{{ old('email', $usuario->email) }}">
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1 mb-5">
                                <label for="password"
                                    class="block mb-2 font-medium text-gray-900 text-sm">Contraseña</label>
                                <input type="password" id="password" name="password"
                                    class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 w-full p-2.5"
                                    placeholder="**************" title="Escribe tu contraseña">
                            </div>
                            <div class="flex-1 mb-5">
                                <label for="password_confirmation"
                                    class="block mb-2 font-medium text-gray-900 text-sm">Confirmar
                                    contraseña</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 w-full p-2.5"
                                    placeholder="**************" title="Escribe la confirmación de tu contraseña">
                            </div>
                        </div>
                        <a href="{{ route('usuarios.index') }}"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:ring-gray-100">Regresar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
