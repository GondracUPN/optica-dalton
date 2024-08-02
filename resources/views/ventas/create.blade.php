<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óptica Dalton - Nueva Venta</title>
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
                <h2>Nueva Venta</h2>
                <form action="{{ route('ventas.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">
                    <div class="mb-3">
                        <label for="cliente_nombre" class="form-label">Nombre del Cliente</label>
                        <input type="text" class="form-control" id="cliente_nombre" value="{{ $cliente->nombre }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="cliente_dni" class="form-label">DNI del Cliente</label>
                        <input type="text" class="form-control" id="cliente_dni" value="{{ $cliente->dni }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="producto" class="form-label">Producto</label>
                        <select class="form-select" id="producto" name="producto" required>
                            <option value="Montura">Montura</option>
                            <option value="Lentes completos">Lentes completos</option>
                            <option value="Traspaso">Traspaso</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_venta" class="form-label">Fecha de Venta</label>
                        <input type="date" class="form-control" id="fecha_venta" name="fecha_venta" required>
                    </div>
                    <div class="mb-3">
                        <label for="monto_total" class="form-label">Monto Total</label>
                        <input type="number" class="form-control" id="monto_total" name="monto_total" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Venta</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
