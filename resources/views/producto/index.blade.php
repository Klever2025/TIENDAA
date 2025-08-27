<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Productos</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Productos</h1>

    <a href="{{ route('producto.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Nuevo Producto</a>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 p-3 mt-4 rounded">
        {{ session('success') }}
      </div>
    @endif

    <table class="w-full mt-6 border-collapse border border-gray-200">
      <thead>
        <tr class="bg-gray-100">
          <th class="border p-2">ID</th>
          <th class="border p-2">Nombre</th>
          <th class="border p-2">Precio</th>
          <th class="border p-2">Categoría</th>
          <th class="border p-2">Stock</th>
          <th class="border p-2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($productos as $producto)
        <tr>
          <td class="border p-2">{{ $producto->id }}</td>
          <td class="border p-2">{{ $producto->nombre }}</td>
          <td
