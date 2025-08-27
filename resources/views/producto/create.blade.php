<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Producto</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Crear Producto</h1>

    <form action="{{ route('producto.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block">Nombre</label>
        <input type="text" name="nombre" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block">Precio</label>
        <input type="number" step="0.01" name="precio" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block">Categoría</label>
        <input type="text" name="categoria" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block">Stock</label>
        <input type="number" name="stock" class="w-full border rounded p-2">
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar</button>
      <a href="{{ route('producto.index') }}" class="ml-2 text-gray-600">Cancelar</a>
    </form>
  </div>
</body>
</html>
