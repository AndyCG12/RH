<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Group;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

    // Obtener los proyectos junto con los grupos y empleados
    /* $projects = Project::with('groups.employees')->get(); */
    $projects = Project::with(['groups.empleados'])->get();

    $empleados = Empleado::all(); // Para usarlos en los modales

    return view('project', compact('projects', 'empleados'));
    }

    public function create()
{
    $empleados = Empleado::all();
    return view('project', compact('empleados'));
}

/* public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'empleados' => 'required|array',
    ]);

    // Crear proyecto
    $proyecto = Project::create($validated);

    // Crear un grupo para el proyecto
    $grupo = Group::create([
        'project_id' => $proyecto->id,
        'name' => 'Grupo del Proyecto ' . $validated['name'],
    ]);

    // Asignar empleados al grupo
    $grupo->empleados()->attach($validated['empleados']);

    return redirect()->route('project.index')->with('success', 'Proyecto y grupo creados exitosamente.');
} */
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date',
        'empleados' => 'required|array', // Array de IDs de empleados
    ]);

    // Crear el proyecto
    $project = Project::create($validated);

    // Crear el grupo asociado al proyecto (el nombre del grupo será el nombre del proyecto)
    $group = Group::create([
        'name' => $project->name,
        'project_id' => $project->id,
    ]);

    // Asignar empleados al grupo
    $group->empleados()->attach($validated['empleados']);

    return redirect()->route('project')->with('status', 'Proyecto creado exitosamente!');
}

/* public function update(Request $request, Project $project )
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'empleados' => 'required|array',
    ]);

    // Actualizar proyecto
    $project->update($validated);

    // Actualizar el grupo principal del proyecto
    $grupo = $project->groups->first();
    $grupo->empleados()->sync($validated['empleados']);

    return redirect()->route('project')->with('success', 'Proyecto actualizado exitosamente.');
} */

public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project', compact('projects'));
    }

public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'empleados' => 'required|array',
    ]);

    // Actualizar proyecto
    $project->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'start_date' => $validated['start_date'],
        'end_date' => $validated['end_date'],
    ]);

    // Actualizar el grupo principal del proyecto y sus empleados
    $grupo = $project->groups->first();
    if ($grupo) {
        $grupo->empleados()->sync($validated['empleados']);
    }

    return redirect()->route('project')->with('success', 'Proyecto actualizado exitosamente.');
}

public function destroy(Project $project)
{
    $project->delete();

    return redirect()->route('project')->with('success', 'Proyecto eliminado exitosamente.');
}



    public function show(Project $project)
    {
        return view('project', compact('project'));
    }
}
