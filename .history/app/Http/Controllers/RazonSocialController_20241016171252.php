<?php

namespace App\Http\Controllers;

use App\Models\RazonSocial;
use Illuminate\Http\Request;

class RazonSocialController extends Controller
{
    public function index()
    {
        $razonesSociales = RazonSocial::all();
        return view('razones_sociales', compact('razonesSociales'));
    }

    public function create()
    {
        return view('razonesrazones_sociales');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'rfc' => 'required|string|size:13',
        ]);

        RazonSocial::create($request->all());

        return redirect()->route('razones')->with('success', 'Razón social creada con éxito.');
    }

    public function edit(RazonSocial $razonSocial)
    {
        return view('razones', compact('razonSocial'));
    }

    public function update(Request $request, $id)
{
    $razon = RazonSocial::findOrFail($id);
    $razon->update($request->all());
    return redirect()->route('razones')->with('success', 'Razón social actualizada');
}

public function destroy($id)
{
    $razon = RazonSocial::findOrFail($id);
    $razon->delete();
    return redirect()->route('razones')->with('success', 'Razón social eliminada');
}

}
