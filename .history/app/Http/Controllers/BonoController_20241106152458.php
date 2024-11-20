<?php

namespace App\Http\Controllers;

use App\Models\Bono;
use Illuminate\Http\Request;

class BonoController extends Controller
{
    public function index()
    {
        $bonos = Bono::all();
        return view('bonos.index', compact('bonos'));
    }

    public function store(Request $request)
    {
        $bono = Bono::create($request->all());
        return redirect()->route('bonos.index');
    }

    public function update(Request $request, Bono $bono)
    {
        $bono->update($request->all());
        return redirect()->route('bonos.index');
    }

    public function destroy(Bono $bono)
    {
        $bono->delete();
        return redirect()->route('bonos.index');
    }
}
