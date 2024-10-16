<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Group;
use App\Models\Project;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $projects = Project::with(['groups.empleados'])->get();

        $empleados = Empleado::all(); // Para usarlos en los modales

        $groups = Group::with('empleados')->get();
        return view('group', compact('groups'));
    }

    public function store(Request $request)
    {
        $group = Group::create($request->all());
        $group->empleados()->sync($request->employee_ids);
        return redirect()->route('groups');
    }
}

