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
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nombre</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Correo</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Persona 1 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-700">1</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Carlos Mendoza</td>
                        <td class="px-6 py-4 text-sm text-gray-700">carlos.mendoza@example.com</td>
                        <td class="px-6 py-4 text-sm">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">Editar</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Persona 2 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-700">2</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Ana Ruiz</td>
                        <td class="px-6 py-4 text-sm text-gray-700">ana.ruiz@example.com</td>
                        <td class="px-6 py-4 text-sm">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">Editar</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Persona 3 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-700">3</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Luis García</td>
                        <td class="px-6 py-4 text-sm text-gray-700">luis.garcia@example.com</td>
                        <td class="px-6 py-4 text-sm">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">Editar</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Puedes añadir más filas según sea necesario -->
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
