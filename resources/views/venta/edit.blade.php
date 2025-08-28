<!DOCTYPE html>
<html>
<head>
    <title>Editar Venta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Venta</h1>
    <form action="{{ route('ventas.update',$venta) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <select name="persona_id" class="border p-2 w-full">
            @foreach($personas as $persona)
                <option value="{{ $persona->id }}" @if($venta->persona_id == $persona->id) selected @endif>
                    {{ $persona->nombre }}
                </option>
            @endforeach
        </select>
        <select name="producto_id" class="border p-2 w-full">
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}" @if($venta->producto_id == $producto->id) selected @endif>
                    {{ $producto->nombre }}
                </option>
            @endforeach
        </select>
        <input type="number" name="cantidad" value="{{ $venta->cantidad }}" class="border p-2 w-full">
        <input type="number" step="0.01" name="venta" value="{{ $venta->venta }}" class="border p-2 w-full">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
    </form>
</body>
</html>
