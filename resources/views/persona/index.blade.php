<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Personas</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Personas</h1>

<a href="{{ route('persona.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Nueva Persona</a>
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
          <th class="border p-2">Apellido</th>
          <th class="border p-2">Email</th>
          <th class="border p-2">Teléfono</th>
          <th class="border p-2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($personas as $persona)
        <tr>
          <td class="border p-2">{{ $persona->id }}</td>
          <td class="border p-2">{{ $persona->nombre }}</td>
          <td class="border p-2">{{ $persona->apellido }}</td>
          <td class="border p-2">{{ $persona->email }}</td>
          <td class="border p-2">{{ $persona->telefono }}</td>
          <td class="border p-2 flex gap-2">
            <a href="{{ route('persona.show', $persona) }}" class="bg-green-600 text-white px-2 py-1 rounded">Ver</a>
            <a href="{{ route('persona.edit', $persona) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
            <form action="{{ route('persona.destroy', $persona) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
