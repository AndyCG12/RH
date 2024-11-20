<?php

namespace App\Http\Controllers;

use App\Models\Bono;
use App\Models\Empleado; // Asegúrate de tener el modelo de Empleado
use Illuminate\Http\Request;

class BonoController extends Controller
{
    // Mostrar lista de bono
    public function index()
    {
        $bono = Incidencia::with('empleado')->get(); // Carga la relación con empleados
        $empleados = Empleado::all(); // Obtener todos los empleados para el modal de agregar/editar

        return view('bono', compact('bono', 'empleados'));
    }

    // Guardar una nueva incidencia
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empleado_id' => 'required|exists:empleados,id',
            'estado' => 'required|in:activo,inactivo',
        ]);

        Incidencia::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'empleado_id' => $request->empleado_id,
            'estado' => $request->estado,
        ]);

        return redirect()->route('bono')->with('success', 'Incidencia agregada con éxito');
    }

    // Mostrar el formulario para editar una incidencia
    public function edit(Incidencia $incidencia)
    {
        $empleados = Empleado::all();

        return view('bono.edit', compact('incidencia', 'empleados'));
    }

    // Actualizar una incidencia
    public function update(Request $request, Incidencia $incidencia)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empleado_id' => 'required|exists:empleados,id',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $incidencia->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'empleado_id' => $request->empleado_id,
            'estado' => $request->estado,
        ]);

        return redirect()->route('bono')->with('success', 'Incidencia actualizada con éxito');
    }

    // Eliminar una incidencia
    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete();

        return redirect()->route('bono')->with('success', 'Incidencia eliminada con éxito');
    }
}
