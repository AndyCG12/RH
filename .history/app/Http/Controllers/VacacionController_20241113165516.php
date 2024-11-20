<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Vacacion;
use Illuminate\Http\Request;

class VacacionController extends Controller
{
    // Método para mostrar la vista con empleados y vacaciones
    public function index()
    {
        // Obtener los empleados y las vacaciones
        $empleados = Empleado::all();
        $vacaciones = Vacacion::with('empleado')->get();

        // Mapeamos los datos para que sean compatibles con FullCalendar
        $vacaciones = $vacaciones->map(function ($vacacion) {
            return [
                'id' => $vacacion->id,
                'title' => $vacacion->empleado->nombre . '' $vacacion->empleado->apellidoP, // Ajusta el nombre del campo según tu modelo
                'start' => $vacacion->fecha_inicio,
                'end' => $vacacion->fecha_fin,
                'color' => $vacacion->estado === 'activo' ? 'green' : ($vacacion->estado === 'pendiente' ? 'orange' : 'red'),
                'estado' => $vacacion->estado, // Añadimos el estado para el manejo en modales
            ];
        })->toArray();

        // Pasamos los empleados y el array de vacaciones a la vista
        return view('vacaciones', compact('empleados', 'vacaciones'));
    }

    // Método para almacenar nuevas vacaciones
    public function store(Request $request)
    {
        $vacacion = Vacacion::create($request->all());
        return redirect()->back()->with('success', 'Vacaciones agregadas correctamente.');
    }

    // Método para actualizar las vacaciones
    public function update(Request $request, $id)
    {
        $vacacion = Vacacion::findOrFail($id);
        $vacacion->update($request->all());
        return redirect()->back()->with('success', 'Vacaciones actualizadas correctamente.');
    }

    // Método para eliminar las vacaciones
    public function destroy($id)
    {
        $vacacion = Vacacion::findOrFail($id);
        $vacacion->delete();
        return redirect()->back()->with('success', 'Vacaciones eliminadas correctamente.');
    }
}
