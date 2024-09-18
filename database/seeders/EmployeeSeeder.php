<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Empleado::create([
            'nombre' => 'Andy',
            'apellidoP' => 'Canche',
            'apellidoM' => 'Gomez',
            'email' => 'agomez@gmail.com',
            'puesto' => 'Manager',
            'departamento' => 'Diseño',
        ]);

        Empleado::create([
            'nombre' => 'Dxbz',
            'apellidoP' => 'locote',
            'apellidoM' => 'isc',
            'email' => 'dlocote@gmail.com',
            'puesto' => 'vendedor',
            'departamento' => 'sales',
        ]);

    }
}

