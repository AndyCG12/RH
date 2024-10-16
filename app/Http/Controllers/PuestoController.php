<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    // Mostrar todos los puestos
    public function index()
    {
        $puestos = Puesto::all();
        return view('puesto', compact('puestos'));
    }
    // Mostrar el formulario para crear un nuevo Puesto
    public function create()
    {
        return view('puesto.create');
    }
    // Almacenar el nuevo Puesto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);
        Puesto::create($request->all());
        return redirect()->route('puestos')->with('success', 'Puesto creado correctamente.');
    }
    public function edit($id)
    {
        $puestos = Puesto::findOrFail($id);
        return view('puesto', compact('Puesto'));
    }
    // Actualizar un Puesto existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',

        ]);
        $puestos = Puesto::findOrFail($id);
        $puestos->update($request->all());
        return redirect()->route('puestos')->with('success', 'Puesto actualizado correctamente.');
    }
    // Eliminar un Puesto
    public function destroy($id)
    {
        $puestos = Puesto::findOrFail($id);
        $puestos->delete();
        return redirect()->route('puesto')->with('success', 'Puesto eliminado correctamente.');
    }
}
