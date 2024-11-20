<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Nomina;
use App\Models\Puesto;
use Illuminate\Http\Request;

class NominaController extends Controller
{
    //
    public function index()
{
    $nominas = Nomina::with('empleado', 'puesto')->get();
    $empleados = Empleado::all(); // Obtén todos los empleados
    $razonesSociales = 
    $puestos = Puesto::all(); // Obtén todos los puestos
    return view('nomina', compact('nominas', 'empleados', 'puestos'));

}

public function store(Request $request)
{
    $request->validate([
        'empleado_id' => 'required|exists:empleados,id',
        'puesto_id' => 'required|exists:puestos,id',
        'razon_social_id' => 'nullable|exists:razones_sociales,id',
        'salario' => 'required|numeric',
    ]);

    Nomina::create($request->all());
    return redirect()->route('nomina')->with('success', 'Nómina creada exitosamente.');
}

public function update(Request $request, Nomina $nomina)
{
    $request->validate([
        'salario' => 'required|numeric',
    ]);

    $nomina->update($request->only('salario'));
    return redirect()->route('nomina')->with('success', 'Nómina actualizada.');
}

public function destroy(Nomina $nomina)
{
    $nomina->delete();
    return redirect()->route('nomina')->with('success', 'Nómina eliminada.');
}
}
