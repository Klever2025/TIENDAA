<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Persona</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Persona</h1>

    <form action="{{ route('persona.update', $persona->id) }}" method="POST" class="space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="block">Nombre</label>
        <input type="text" name="nombre" value="{{ $persona->nombre }}" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block">Apellido</label>
        <input type="text" name="apellido" value="{{ $persona->apellido }}" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block">Email</label>
        <input type="email" name="email" value="{{ $persona->email }}" class="w-full border rounded p-2">
      </div>
      <div>
        <label class="block">Teléfono</label>
        <input type="text" name="telefono" value="{{ $persona->telefono }}" class="w-full border rounded p-2">
      </div>

      <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Actualizar</button>
      <a href="{{ route('persona.index') }}" class="ml-2 text-gray-600">Cancelar</a>
    </form>
  </div>
</body>
</html>
