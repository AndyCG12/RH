<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Empleado;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
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
