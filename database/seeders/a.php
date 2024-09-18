<?php

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class a extends Seeder
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
