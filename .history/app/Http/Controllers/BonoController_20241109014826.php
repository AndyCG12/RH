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
        $bonos = bono::with('empleado')->get(); // Carga la relación con empleados
        $empleados = Empleado::all(); // Obtener todos los empleados para el modal de agregar/editar

        return view('bono', compact('bonos', 'empleados'));
    }

    // Guardar una nueva bono
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'monto' => 'required|numeric',
            'empleado_id' => 'required|exists:empleados,id',
            'fecha' => 'nullable|date',
        ]);

        bono::create([
            'nombre' => $request->nombre,
            'monto' => $request->monto,
            'empleado_id' => $request->empleado_id,
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('bono')->with('success', 'bono agregada con éxito');
    }

    // Mostrar el formulario para editar una bono
    public function edit(bono $bono)
    {
        $empleados = Empleado::all();

        return view('bono.edit', compact('bono', 'empleados'));
    }

    // Actualizar una bono
    public function update(Request $request, bono $bono)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'monto' => 'required|numeric',
            'empleado_id' => 'required|exists:empleados,id',
            'fecha' => 'required|date',
        ]);

        $bono->update([
            'nombre' => $request->nombre,
            'monto' => $request->monto,
            'empleado_id' => $request->empleado_id,
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('')->with('success', 'bono actualizada con éxito');
    }

    // Eliminar una bono
    public function destroy(bono $bono)
    {
        $bono->delete();

        return redirect()->route('bono')->with('success', 'bono eliminada con éxito');
    }
}
