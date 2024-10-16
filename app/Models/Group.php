<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class,  'employee_group', 'group_id', 'empleado_id');
    }
}
