<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function groups()
{
    return $this->hasMany(Group::class);
}


    public function empleados()
    {
        return $this->hasManyThrough(Empleado::class, Group::class, 'project_id', 'id', 'id', 'empleado_id'); // Asegúrate de que estás usando el modelo de tabla pivot si lo tienes
    }

    protected $fillable = ['name', 'description', 'start_date', 'end_date'];


}

