<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestionar Ventas</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-7xl mx-auto px-4 py-10">

    <!-- Encabezado -->
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-gray-800">Gestionar Ventas</h1>
      <p class="text-gray-600 text-lg">Listado de ventas registradas.</p>
    </div>

    <!-- Botón para nueva venta -->
    <div class="flex justify-end mb-6">
      <a href="{{route('venta.create')}}" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
        + Registrar Venta
      </a>
    </div>

    <!-- Tabla de ventas -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-200">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Cliente</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Fecha</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Total</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Estado</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Venta 1 -->
          <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-800">1001</td>
            <td class="px-6 py-4 text-sm text-gray-800">Juan Pérez</td>
            <td class="px-6 py-4 text-sm text-gray-800">2025-08-20</td>
            <td class="px-6 py-4 text-sm text-gray-800">$450.00</td>
            <td class="px-6 py-4 text-sm">
              <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">Pagada</span>
            </td>
            <td class="px-6 py-4 text-sm space-x-2">
              <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 transition">Ver Detalle</button>
              <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Eliminar</button>
            </td>
          </tr>
          <!-- Venta 2 -->
          <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-800">1002</td>
            <td class="px-6 py-4 text-sm text-gray-800">Ana Gómez</td>
            <td class="px-6 py-4 text-sm text-gray-800">2025-08-21</td>
            <td class="px-6 py-4 text-sm text-gray-800">$320.00</td>
            <td class="px-6 py-4 text-sm">
              <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-medium">Pendiente</span>
            </td>
            <td class="px-6 py-4 text-sm space-x-2">
              <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 transition">Ver Detalle</button>
              <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Eliminar</button>
            </td>
          </tr>
          <!-- Agrega más ventas aquí -->
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
