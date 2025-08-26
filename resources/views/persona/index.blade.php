<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Persona</title>
    <!-- Vinculación de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Contenedor principal -->
    <div class="max-w-6xl mx-auto px-4 py-8">

        <!-- Título principal -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-semibold text-gray-800">Gestionar Personas</h1>
            <p class="text-lg text-gray-600">Administra los registros de las personas.</p>
        </div>

        <!-- Barra de acciones -->
        <div class="flex justify-end mb-6">
            <a href="{{route('persona.create')}}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">Agregar Persona</a>
        </div>

        <!-- Tabla de personas -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <div class="w-full max-w-5xl bg-white shadow-lg rounded-2xl p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Listado de Personas</h1>

        <!-- Botón Crear Persona -->
        <div class="mb-4">
            <a href="{{ route('persona.create') }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
               ➕ Nueva Persona
            </a>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nombre</th>
                        <th class="px-4 py-2 border">Apellido</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Teléfono</th>
                        <th class="px-4 py-2 border">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($personas as $persona)
                        <tr class="text-center border-b hover:bg-gray-100">
                            <td class="px-4 py-2 border">{{ $persona->id }}</td>
                            <td class="px-4 py-2 border">{{ $persona->nombre }}</td>
                            <td class="px-4 py-2 border">{{ $persona->apellido }}</td>
                            <td class="px-4 py-2 border">{{ $persona->email }}</td>
                            <td class="px-4 py-2 border">{{ $persona->telefono ?? 'No registrado' }}</td>
                            <td class="px-4 py-2 border space-x-2">
                                <a href="{{ route('persona.show', $persona->id) }}" 
                                   class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition">Ver</a>
                                <a href="{{ route('persona.edit', $persona->id) }}" 
                                   class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">Editar</a>
                                <form action="{{ route('persona.destroy', $persona->id) }}" 
                                      method="POST" class="inline-block"
                                      onsubmit="return confirm('¿Estás seguro de eliminar esta persona?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                                No hay personas registradas todavía.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

        </div>

    </div>

</body>
</html>
