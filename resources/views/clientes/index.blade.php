<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óptica Dalton - Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
                <h2>Clientes</h2>
                <div class="d-flex mb-3">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary me-2">Nuevo Cliente</a>
                    <input type="text" id="buscar-dni" class="form-control" placeholder="Buscar por DNI" style="max-width: 150px;">
                </div>
                <table class="table table-bordered" id="clientes-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Edad</th>
                            <th>Distrito</th>
                            <th>Teléfono</th>
                            <th>OD - Lejos (Esfera, Cilindro, Eje)</th>
                            <th>OD - Cerca (ADD)</th>
                            <th>OI - Lejos (Esfera, Cilindro, Eje)</th>
                            <th>OI - Cerca (ADD)</th>
                            <th>DIP - Lejos</th>
                            <th>DIP - Cerca</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->dni }}</td>
                                <td>{{ $cliente->edad }}</td>
                                <td>{{ $cliente->distrito }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->od_lejos_esfera }}, {{ $cliente->od_lejos_cilindro }}, {{ $cliente->od_lejos_eje }}</td>
                                <td>{{ $cliente->od_cerca_add }}</td>
                                <td>{{ $cliente->oi_lejos_esfera }}, {{ $cliente->oi_lejos_cilindro }}, {{ $cliente->oi_lejos_eje }}</td>
                                <td>{{ $cliente->oi_cerca_add }}</td>
                                <td>{{ $cliente->dip_lejos }}</td>
                                <td>{{ $cliente->dip_cerca }}</td>
                                <td>
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning mb-1">Editar</a>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mb-1">Eliminar</button>
                                    </form>
                                    <a href="{{ route('ventas.create', $cliente->id) }}" class="btn btn-success mb-1">Agregar Compra</a>
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
