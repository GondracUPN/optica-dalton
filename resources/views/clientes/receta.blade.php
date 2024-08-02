<!-- resources/views/clientes/receta.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receta del Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybRm7H84DgRt+/IoUOzng0t3zYjz4T+Z5SWFhrp8hbP5p2Ek9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6jvKK1d8r8/4p+e0i5r9j7lmg2GkvKtYfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-4">
        <h2>Receta del Cliente</h2>
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
                        <td>{{ $cliente->od_lejos_esfera ?? 'N/A' }}</td>
                        <td>{{ $cliente->od_lejos_cilindro ?? 'N/A' }}</td>
                        <td>{{ $cliente->od_lejos_eje ?? 'N/A' }}</td>
                        <td>{{ $cliente->oi_lejos_esfera ?? 'N/A' }}</td>
                        <td>{{ $cliente->oi_lejos_cilindro ?? 'N/A' }}</td>
                        <td>{{ $cliente->oi_lejos_eje ?? 'N/A' }}</td>
                        <td>{{ $cliente->dip_lejos ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Cerca</td>
                        <td colspan="3">{{ $cliente->od_cerca_add ?? 'N/A' }}</td>
                        <td colspan="3">{{ $cliente->oi_cerca_add ?? 'N/A' }}</td>
                        <td>{{ $cliente->dip_cerca ?? 'N/A' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('ventas.index') }}" class="btn btn-primary mt-3">Volver a Ventas</a>
    </div>
</body>
</html>
