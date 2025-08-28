<!DOCTYPE html>
<html>
<head>
    <title>Nueva Venta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Registrar Venta</h1>
    <form action="{{ route('ventas.store') }}" method="POST" class="space-y-4">
        @csrf
        <select name="persona_id" class="border p-2 w-full">
            <option value="">Seleccione Persona</option>
            @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
            @endforeach
        </select>
        <select name="producto_id" class="border p-2 w-full">
            <option value="">Seleccione Producto</option>
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
            @endforeach
        </select>
        <input type="number" name="cantidad" placeholder="Cantidad" class="border p-2 w-full">
        <input type="number" step="0.01" name="venta" placeholder="Venta" class="border p-2 w-full">
        <button class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>
</body>
</html>
