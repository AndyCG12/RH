<?php
namespace App\Http\Controllers;
use App\Models\Departamento;
use Illuminate\Http\Request;
class DepartamentoController extends Controller
{
    // Mostrar todos los departamentos
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos', compact('departamentos'));
    }
    // Mostrar el formulario para crear un nuevo departamento
    public function create()
    {
        return view('departamentos.create');
    }
    // Almacenar el nuevo departamento
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);
        Departamento::create($request->all());
        return redirect()->route('departamentos')->with('success', 'Departamento creado correctamente.');
    }
    public function edit($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('departamentos', compact('departamento'));
    }
    // Actualizar un departamento existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);
        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());
        return redirect()->route('departamentos')->with('success', 'Departamento actualizado correctamente.');
    }
    // Eliminar un departamento
    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();
        return redirect()->route('departamentos')->with('success', 'Departamento eliminado correctamente.');
    }
}
