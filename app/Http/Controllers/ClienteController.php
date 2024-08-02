<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'dni' => 'required|unique:clientes',
            'edad' => 'required|integer',
            'distrito' => 'required',
            'telefono' => 'required',
            'od_lejos_esfera' => 'required',
            'od_lejos_cilindro' => 'required',
            'od_lejos_eje' => 'required',
            'od_cerca_add' => 'required',
            'oi_lejos_esfera' => 'required',
            'oi_lejos_cilindro' => 'required',
            'oi_lejos_eje' => 'required',
            'oi_cerca_add' => 'required',
            'dip_lejos' => 'required',
            'dip_cerca' => 'required',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente creado exitosamente.');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'dni' => 'required|unique:clientes,dni,' . $cliente->id,
            'edad' => 'required|integer',
            'distrito' => 'required',
            'telefono' => 'required',
            'od_lejos_esfera' => 'required',
            'od_lejos_cilindro' => 'required',
            'od_lejos_eje' => 'required',
            'od_cerca_add' => 'required',
            'oi_lejos_esfera' => 'required',
            'oi_lejos_cilindro' => 'required',
            'oi_lejos_eje' => 'required',
            'oi_cerca_add' => 'required',
            'dip_lejos' => 'required',
            'dip_cerca' => 'required',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente actualizado exitosamente.');
    }
    public function showReceta(Cliente $cliente)
    {
        return view('clientes.receta', compact('cliente'));
    }
   // En app/Http/Controllers/ClienteController.php
public function receta($id)
{
    $cliente = Cliente::findOrFail($id);

    return response()->json([
        'od_lejos_esfera' => $cliente->od_lejos_esfera,
        'od_lejos_cilindro' => $cliente->od_lejos_cilindro,
        'od_lejos_eje' => $cliente->od_lejos_eje,
        'oi_lejos_esfera' => $cliente->oi_lejos_esfera,
        'oi_lejos_cilindro' => $cliente->oi_lejos_cilindro,
        'oi_lejos_eje' => $cliente->oi_lejos_eje,
        'dip_lejos' => $cliente->dip_lejos,
        'od_cerca_add' => $cliente->od_cerca_add,
        'oi_cerca_add' => $cliente->oi_cerca_add,
        'dip_cerca' => $cliente->dip_cerca,
    ]);
    
}

    

}
