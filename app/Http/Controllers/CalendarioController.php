<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function index(){
    $projects = Project::all();  // Obtener todos los proyectos
    return view('calendario', compact('projects'));
    }

}
