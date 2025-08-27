<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Persona</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Crear Persona</h1>

    <form action="{{ route('persona.store') }}" method="POST" class="space-y-4">
      @csrf
      <!-- Nombre -->
      <div>
        <label class="block">Nombre</label>
        <input type="text" name="nombre" class="w-full border rounded p-2">
      </div>

      <!-- Apellido -->
      <div>
        <label class="block">Apellido</label>
        <input type="text" name="apellido" class="w-full border rounded p-2">
      </div>

      <!-- Email -->
      <div>
        <label class="block">Email</label>
        <input type="email" name="email" class="w-full border rounded p-2">
      </div>

      <!-- Teléfono -->
      <div>
        <label class="block">Teléfono</label>
        <input type="text" name="telefono" class="w-full border rounded p-2">
      </div>

      <!-- Botón -->
      <button type="submit"
        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-xl 
               shadow-md hover:bg-blue-700 transition">
        Guardar
      </button>
    </form>
  </div>

</body>
</html>
