<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óptica Dalton - Ventas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybRm7H84DgRt+/IoUOzng0t3zYjz4T+Z5SWFhrp8hbP5p2Ek9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6jvKK1d8r8/4p+e0i5r9j7lmg2GkvKtYfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    </head>
<body>
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('img/logo.jpg') }}" alt="Óptica Dalton Logo" class="logo">
            <h2 class="sidebar-title">Óptica Dalton</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="{{ route('clientes.index') }}" class="nav-link">
                <i class="bi bi-person-circle nav-icon"></i>
                <span>Clientes</span>
            </a>
            <a href="{{ route('productos.index') }}" class="nav-link">
                <i class="bi bi-box nav-icon"></i>
                <span>Productos</span>
            </a>
            <a href="{{ route('ventas.index') }}" class="nav-link">
                <i class="bi bi-cart-check nav-icon"></i>
                <span>Ventas</span>
            </a>
        </nav>
    </aside>
    <div class="content-wrapper">
        <button class="toggle-btn" id="toggle-btn">&#9776;</button>
        <main class="main-content">
            <div class="container mt-4">
                <h2>Ventas</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre del Cliente</th>
                            <th>DNI del Cliente</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Fecha de Venta</th>
                            <th>Monto Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->cliente->nombre }}</td>
                                <td>{{ $venta->cliente->dni }}</td>
                                <td>{{ $venta->producto }}</td>
                                <td>{{ $venta->precio }}</td>
                                <td>{{ $venta->descripcion }}</td>
                                <td>{{ $venta->fecha_venta }}</td>
                                <td>{{ $venta->monto_total }}</td>
                                <td>
                                    <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-warning mb-1">Editar</a>
                                    <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mb-1">Eliminar</button>
                                    </form>
                                    <button class="btn btn-info mb-1">
    <a href="{{ route('clientes.receta', $venta->cliente->id) }}" class="text-white text-decoration-none">Ver Receta</a>
</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    
</body>
</html>