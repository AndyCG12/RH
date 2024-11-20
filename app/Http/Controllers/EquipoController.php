<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    // Mostrar la lista de equipos
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos', compact('equipos'));
    }

    // Guardar un nuevo equipo
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

    // Actualizar un equipo existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|in:Laptop,PC de Escritorio',
            'cantidad_total' => 'required|integer|min:1',
        ]);

        $equipo = Equipo::findOrFail($id);

        // Ajustar cantidad disponible en base a la nueva cantidad total
        $diferencia = $request->cantidad_total - $equipo->cantidad_total;
        $equipo->update([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'cantidad_total' => $request->cantidad_total,
            'cantidad_disponible' => $equipo->cantidad_disponible + $diferencia,
        ]);

        return redirect()->back()->with('success', 'Equipo de cómputo actualizado correctamente.');
    }

    // Eliminar un equipo
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);

        // Verificar que no haya equipos asignados antes de eliminar
        if ($equipo->cantidad_disponible < $equipo->cantidad_total) {
            return redirect()->back()->with('error', 'No se puede eliminar el equipo porque tiene unidades asignadas.');
        }

        $equipo->delete();

        return redirect()->back()->with('success', 'Equipo de cómputo eliminado correctamente.');
    }
}
