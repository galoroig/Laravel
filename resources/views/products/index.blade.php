<div>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>

<h1>Lista de productos</h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>description</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Descuento</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $producto)
            <tr style= "{{ $producto['stock'] <= 0 ? 'background-color: #f8d7da;' : 'background-color: lime;'}}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $producto['name'] }}</td>
                <td>{{ $producto['description'] }}</td>
                <td>${{ number_format($producto['price'], 0, ',', '.') }}</td>
                <td>
                    @if ($producto['stock'] > 0)
                        En stock ({{ $producto['stock'] }} uds.)
                    @else
                        Sin stock
                    @endif
                </td>
                <td>${{ number_format($producto['price'] * 0.9, 0, ',', '.') }}</td>
                @if ($loop->first)
                    <td>⭐ Nuevo </td>
                @else
                    <td> Viejo </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay productos cargados.</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
</div>
