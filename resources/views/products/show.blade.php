<div>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>

<h1>Producto</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>description</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Descuento</th>
            </tr>
        </thead>
        <tbody>
                <tr style= "{{ $product['stock'] <= 0 ? 'background-color: #f8d7da;' : 'background-color: lime;'}}">
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>${{ number_format($product['price'], 0, ',', '.') }}</td>
                    <td>
                        @if ($product['stock'] > 0)
                            En stock ({{ $product['stock'] }})
                        @else
                            Sin stock
                        @endif
                    </td>
                    <td>${{ number_format($product['price'] * 0.9, 0, ',', '.') }}</td>
                    <td>
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <button type="submit">Actualizar</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        @if (session('success'))
                            <div class="alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </td>
                </tr>
        </tbody>
    </table>

</body>
</html>
</div>
