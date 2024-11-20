<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Empleado;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    // Función para mostrar la lista de compras
    public function index()
    {
        $compras = Compra::with('empleado')->get();
        $empleados = Empleado::all(); // Obtener las compras con la relación de empleado
        $estados = ['aprovado', 'pendiente', 'cancelado', 'comprado'];
        return view('compras', compact('compras','empleados', 'estados'));
    }

    // Función para almacenar una nueva compra
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
            'empleado_id' => 'required|exists:empleados,id',
            'estado' => 'required|in:aprovado,pendiente,cancelado,comprado',
        ]);

        Compra::create($request->all());

        return redirect()->back()->with('success', 'Compra creada exitosamente.');
    }

    // Función para mostrar una compra específica para su edición
    public function edit($id)
    {
        $compra = Compra::findOrFail($id);
        return response()->json($compra);
    }

    // Función para actualizar una compra existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric|min:0',
            'empleado_id' => 'required|exists:empleados,id',
            'estado' => 'required|in:aprovado,pendiente,cancelado,comprado',
        ]);

        $compra = Compra::findOrFail($id);
        $compra->update($request->all());

        return redirect()->back()->with('success', 'Compra actualizada exitosamente.');
    }

    // Función para eliminar una compra
    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();

        return redirect()->back()->with('success', 'Compra eliminada exitosamente.');
    }
}

