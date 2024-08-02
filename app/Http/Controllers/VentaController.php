<?php

// app/Http/Controllers/VentaController.php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create($clienteId)
    {
        $cliente = Cliente::findOrFail($clienteId);
        return view('ventas.create', compact('cliente'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'producto' => 'required|string',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'fecha_venta' => 'required|date',
            'monto_total' => 'required|numeric',
        ]);

        Venta::create($request->all());

        return redirect()->route('ventas.index');
    }

    public function edit(Venta $venta)
    {
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'producto' => 'required|string',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'fecha_venta' => 'required|date',
            'monto_total' => 'required|numeric',
        ]);

        $venta->update($request->all());

        return redirect()->route('ventas.index');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index');
    }

    
}
