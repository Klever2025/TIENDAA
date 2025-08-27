<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalle Persona</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Detalle Persona</h1>

    <p><strong>Nombre:</strong> {{ $persona->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $persona->apellido }}</p>
    <p><strong>Email:</strong> {{ $persona->email }}</p>
    <p><strong>Teléfono:</strong> {{ $persona->telefono }}</p>

    <div class="mt-4">
      <a href="{{ route('persona.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Volver</a>
    </div>
  </div>
</body>
</html>
