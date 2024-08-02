<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óptica Dalton - Editar Cliente</title>
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
                <h2>Editar Cliente</h2>
                <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="dni" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="dni" name="dni" pattern="\d{8}" maxlength="8" value="{{ $cliente->dni }}" required title="Ingrese dni valido" oninput="this.value = this.value.replace(/\D/g, '')">
                        </div>
                        <div class="col-md-4">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="text" class="form-control" id="edad" name="edad" pattern="\d{1,3}" maxlength="3" value="{{ $cliente->edad }}" required title="Ingrese una edad válida" oninput="this.value = this.value.replace(/\D/g, '')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="distrito" class="form-label">Distrito</label>
                            <select id="distrito" name="distrito" class="form-control" required>
                                <option value="">Seleccione un distrito</option>
                                <option value="Ate" {{ $cliente->distrito == 'Ate' ? 'selected' : '' }}>Ate</option>
                                <option value="Barranco" {{ $cliente->distrito == 'Barranco' ? 'selected' : '' }}>Barranco</option>
                                <option value="Breña" {{ $cliente->distrito == 'Breña' ? 'selected' : '' }}>Breña</option>
                                <option value="Carabayllo" {{ $cliente->distrito == 'Carabayllo' ? 'selected' : '' }}>Carabayllo</option>
                                <option value="Chorrillos" {{ $cliente->distrito == 'Chorrillos' ? 'selected' : '' }}>Chorrillos</option>
                                <option value="La Molina" {{ $cliente->distrito == 'La Molina' ? 'selected' : '' }}>La Molina</option>
                                <option value="La Victoria" {{ $cliente->distrito == 'La Victoria' ? 'selected' : '' }}>La Victoria</option>
                                <option value="Lince" {{ $cliente->distrito == 'Lince' ? 'selected' : '' }}>Lince</option>
                                <option value="Magdalena del Mar" {{ $cliente->distrito == 'Magdalena del Mar' ? 'selected' : '' }}>Magdalena del Mar</option>
                                <option value="Miraflores" {{ $cliente->distrito == 'Miraflores' ? 'selected' : '' }}>Miraflores</option>
                                <option value="Pueblo Libre" {{ $cliente->distrito == 'Pueblo Libre' ? 'selected' : '' }}>Pueblo Libre</option>
                                <option value="San Borja" {{ $cliente->distrito == 'San Borja' ? 'selected' : '' }}>San Borja</option>
                                <option value="San Isidro" {{ $cliente->distrito == 'San Isidro' ? 'selected' : '' }}>San Isidro</option>
                                <option value="San Juan de Lurigancho" {{ $cliente->distrito == 'San Juan de Lurigancho' ? 'selected' : '' }}>San Juan de Lurigancho</option>
                                <option value="San Juan de Miraflores" {{ $cliente->distrito == 'San Juan de Miraflores' ? 'selected' : '' }}>San Juan de Miraflores</option>
                                <option value="San Luis" {{ $cliente->distrito == 'San Luis' ? 'selected' : '' }}>San Luis</option>
                                <option value="San Martin de Porres" {{ $cliente->distrito == 'San Martin de Porres' ? 'selected' : '' }}>San Martin de Porres</option>
                                <option value="San Miguel" {{ $cliente->distrito == 'San Miguel' ? 'selected' : '' }}>San Miguel</option>
                                <option value="Santiago de Surco" {{ $cliente->distrito == 'Santiago de Surco' ? 'selected' : '' }}>Santiago de Surco</option>
                                <option value="Surquillo" {{ $cliente->distrito == 'Surquillo' ? 'selected' : '' }}>Surquillo</option>
                                <option value="Ventanilla" {{ $cliente->distrito == 'Ventanilla' ? 'selected' : '' }}>Ventanilla</option>
                                <option value="Villa El Salvador" {{ $cliente->distrito == 'Villa El Salvador' ? 'selected' : '' }}>Villa El Salvador</option>
                                <option value="Villa María del Triunfo" {{ $cliente->distrito == 'Villa María del Triunfo' ? 'selected' : '' }}>Villa María del Triunfo</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" pattern="\d{9}" maxlength="9" value="{{ $cliente->telefono }}" required title="Ingrese un telefono basico" oninput="this.value = this.value.replace(/\D/g, '')">
                        </div>
                    </div>
                    <h3>Receta</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th colspan="3" class="text-center">OD</th>
                                    <th colspan="3" class="text-center">OI</th>
                                    <th rowspan="2" class="text-center">Distancia Interpupilar</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Esfera</th>
                                    <th class="text-center">Cilindro</th>
                                    <th class="text-center">Eje</th>
                                    <th class="text-center">Esfera</th>
                                    <th class="text-center">Cilindro</th>
                                    <th class="text-center">Eje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lejos</td>
                                    <td><input type="text" class="form-control" name="od_lejos_esfera" value="{{ $cliente->od_lejos_esfera }}" required></td>
                                    <td><input type="text" class="form-control" name="od_lejos_cilindro" value="{{ $cliente->od_lejos_cilindro }}" required></td>
                                    <td><input type="text" class="form-control" name="od_lejos_eje" value="{{ $cliente->od_lejos_eje }}" required></td>
                                    <td><input type="text" class="form-control" name="oi_lejos_esfera" value="{{ $cliente->oi_lejos_esfera }}" required></td>
                                    <td><input type="text" class="form-control" name="oi_lejos_cilindro" value="{{ $cliente->oi_lejos_cilindro }}" required></td>
                                    <td><input type="text" class="form-control" name="oi_lejos_eje" value="{{ $cliente->oi_lejos_eje }}" required></td>
                                    <td><input type="text" class="form-control" name="dip_lejos" value="{{ $cliente->dip_lejos }}" required></td>
                                </tr>
                                <tr>
                                    <td>Cerca</td>
                                    <td colspan="3"><input type="text" class="form-control" name="od_cerca_add" value="{{ $cliente->od_cerca_add }}" required></td>
                                    <td colspan="3"><input type="text" class="form-control" name="oi_cerca_add" value="{{ $cliente->oi_cerca_add }}" required></td>
                                    <td><input type="text" class="form-control" name="dip_cerca" value="{{ $cliente->dip_cerca }}" required></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
