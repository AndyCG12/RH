<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    public function store(Request $request)
    {
        $compra = Compra::create($request->all());
        return redirect()->route('compras.index');
    }

    public function update(Request $request, Compra $compra)
    {
        $compra->update($request->all());
        return redirect()->route('compras.index');
    }

    public function destroy(Compra $compra)
    {
        $compra->delete();
        return redirect()->route('compras.index');
    }
}
