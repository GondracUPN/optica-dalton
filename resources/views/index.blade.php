<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óptica Dalton - Página Principal</title>
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
            
        <div class="intro">
                    <h2>Bienvenido a Óptica Dalton</h2>
                    <p>Explora nuestras secciones para conocer más sobre nuestros servicios y productos. Elige una de las opciones a continuación:</p>
                </div>
            <div class="container">
                <div class="button-container">
                    <a href="{{ route('clientes.index') }}" class="feature-button">
                        <i class="bi bi-person-circle feature-icon"></i>
                        <span>Clientes</span>
                    </a>
                    <a href="{{ route('productos.index') }}" class="feature-button">
                        <i class="bi bi-box feature-icon"></i>
                        <span>Productos</span>
                    </a>
                    <a href="{{ route('ventas.index') }}" class="feature-button">
                        <i class="bi bi-cart-check feature-icon"></i>
                        <span>Ventas</span>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
