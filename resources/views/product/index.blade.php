<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- Encabezado -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">Gestionar Productos</h1>
            <p class="text-gray-600 text-lg">Controla los productos registrados en tu sistema.</p>
        </div>

        <!-- Botón para agregar producto -->
        <div class="flex justify-end mb-6">
            <a href="{{route('product.create')}}" class="bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition">
                + Agregar Producto
            </a>
        </div>

        <!-- Tabla de productos -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nombre</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Categoría</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Precio</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Stock</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Producto 1 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">1</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Smartphone Samsung A34</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Tecnología</td>
                        <td class="px-6 py-4 text-sm text-gray-800">$320.00</td>
                        <td class="px-6 py-4 text-sm text-gray-800">15</td>
                        <td class="px-6 py-4 text-sm space-x-2">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">Editar</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Producto 2 -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">2</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Teclado Mecánico RGB</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Accesorios</td>
                        <td class="px-6 py-4 text-sm text-gray-800">$89.99</td>
                        <td class="px-6 py-4 text-sm text-gray-800">50</td>
                        <td class="px-6 py-4 text-sm space-x-2">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">Editar</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Puedes agregar más productos -->
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
