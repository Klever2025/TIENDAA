<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-8">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Registrar Usuario</h2>

    <form action="#" method="POST" class="space-y-5">
      <!-- Nombre -->
      <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" id="nombre" name="nombre" 
          class="w-full mt-1 p-3 border border-gray-300 rounded-xl shadow-sm 
                 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
          placeholder="Ej: Juan">
      </div>

      <!-- Apellido -->
      <div>
        <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
        <input type="text" id="apellido" name="apellido" 
          class="w-full mt-1 p-3 border border-gray-300 rounded-xl shadow-sm 
                 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
          placeholder="Ej: Pérez">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input type="email" id="email" name="email" 
          class="w-full mt-1 p-3 border border-gray-300 rounded-xl shadow-sm 
                 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
          placeholder="ejemplo@email.com">
      </div>

      <!-- Teléfono -->
      <div>
        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono (opcional)</label>
        <input type="text" id="telefono" name="telefono" 
          class="w-full mt-1 p-3 border border-gray-300 rounded-xl shadow-sm 
                 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
          placeholder="+591 70000000">
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
