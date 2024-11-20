<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use App\Models\Empleado;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    public function index()
    {
        $incidencias = Incidencia::with('empleado')->get();
        $empleados = Empleado::all();
        $estados = ['activo', 'inactivo'];

        return view('incidencias', compact('incidencias', 'empleados', 'estados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empleado_id' => 'required|exists:empleados,id',
            'estado' => 'required|in:activo,inactivo',
        ]);

        Incidencia::create($request->all());

        return redirect()->route('')->with('success', 'Incidencia agregada con éxito');
    }

    // Ya no necesitamos el método edit porque estamos usando modales

    public function update(Request $request, Incidencia $incidencia)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empleado_id' => 'required|exists:empleados,id',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $incidencia->update($request->all());

        return redirect()->route('in')->with('success', 'Incidencia actualizada con éxito');
    }

    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete();

        return redirect()->route('incidencias.index')->with('success', 'Incidencia eliminada con éxito');
    }
}
