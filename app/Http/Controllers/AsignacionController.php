<?php

// app/Http/Controllers/AsignacionController.php
namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Empleado;
use App\Models\Asignacion;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function index()
    {
        $asignaciones = Asignacion::with('empleado', 'equipo')->get();
        $equipos = Equipo::where('cantidad_disponible', '>', 0)->get();
        $empleados = Empleado::all();

        return view('asignar_equipo', compact('asignaciones', 'equipos', 'empleados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'equipo_id' => 'required|exists:equipos,id',
        ]);

        $equipo = Equipo::findOrFail($request->equipo_id);

        if ($equipo->cantidad_disponible < 1) {
            return redirect()->back()->withErrors('No hay equipos disponibles.');
        }

        $asignacion = Asignacion::create([
            'empleado_id' => $request->empleado_id,
            'equipo_id' => $request->equipo_id,
        ]);

        // Disminuir la cantidad disponible del equipo
        $equipo->decrement('cantidad_disponible');

        return redirect()->back()->with('success', 'Asignación creada correctamente.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'equipo_id' => 'required|exists:equipos,id',
        ]);

        $asignacion = Asignacion::findOrFail($id);
        $oldEquipo = $asignacion->equipo;

        if ($oldEquipo->id !== $request->equipo_id) {
            $oldEquipo->increment('cantidad_disponible');
            $newEquipo = Equipo::findOrFail($request->equipo_id);

            if ($newEquipo->cantidad_disponible < 1) {
                return redirect()->back()->withErrors('No hay equipos disponibles.');
            }

            $newEquipo->decrement('cantidad_disponible');
            $asignacion->equipo_id = $request->equipo_id;
        }

        $asignacion->empleado_id = $request->empleado_id;
        $asignacion->save();

        return redirect()->back()->with('success', 'Asignación actualizada correctamente.');
    }

    public function destroy($id)
    {
        $asignacion = Asignacion::findOrFail($id);
        $equipo = $asignacion->equipo;

        $equipo->increment('cantidad_disponible');
        $asignacion->delete();

        return redirect()->back()->with('success', 'Asignación eliminada correctamente.');
    }
}
