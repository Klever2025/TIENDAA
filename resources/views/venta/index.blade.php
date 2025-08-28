<!DOCTYPE html>
<html>
<head>
    <title>Ventas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Ventas</h1>
    <a href="{{ route('ventas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nueva Venta</a>
    <table class="w-full mt-4 border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Persona</th>
                <th class="p-2 border">Producto</th>
                <th class="p-2 border">Cantidad</th>
                <th class="p-2 border">Venta</th>
                <th class="p-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td class="p-2 border">{{ $venta->id }}</td>
                <td class="p-2 border">{{ $venta->persona->nombre }}</td>
                <td class="p-2 border">{{ $venta->producto->nombre }}</td>
                <td class="p-2 border">{{ $venta->cantidad }}</td>
                <td class="p-2 border">{{ $venta->venta }}</td>
                <td class="p-2 border flex gap-2">
                    <a href="{{ route('ventas.show',$venta) }}" class="text-blue-500">Ver</a>
                    <a href="{{ route('ventas.edit',$venta) }}" class="text-yellow-500">Editar</a>
                    <form action="{{ route('ventas.destroy',$venta) }}" method="POST" onsubmit="return confirm('¿Eliminar?')">
                        @csrf @method('DELETE')
                        <button class="text-red-500">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
