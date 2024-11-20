<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos', compact('equipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|in:Laptop,PC de Escritorio',
            'cantidad_total' => 'required|integer|min:1',
        ]);

        Equipo::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'cantidad_total' => $request->cantidad_total,
            'cantidad_disponible' => $request->cantidad_total,
        ]);

        return redirect()->back()->with('success', 'Equipo de cómputo agregado correctamente.');
    }
}
