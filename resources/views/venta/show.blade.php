<!DOCTYPE html>
<html>
<head>
    <title>Detalle Venta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Detalle de Venta</h1>
    <p><strong>ID:</strong> {{ $venta->id }}</p>
    <p><strong>Persona:</strong> {{ $venta->persona->nombre }}</p>
    <p><strong>Producto:</strong> {{ $venta->producto->nombre }}</p>
    <p><strong>Cantidad:</strong> {{ $venta->cantidad }}</p>
    <p><strong>Venta:</strong> {{ $venta->venta }}</p>
    <a href="{{ route('ventas.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4 inline-block">Volver</a>
</body>
</html>
