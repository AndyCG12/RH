<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'apellidoP',
        'apellidoM',
        'email',
        'telefono',
        'fecha_nacimiento',
        'fecha_contratacion',
        'imagen',
        'departamento_id',
        'puesto_id',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_contratacion' => 'date',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class,  'departamento_id');

    }
    public function puesto()
    {
        return $this->belongsTo(Puesto::class,  'puesto_id');

    }

public function groups()
{
    return $this->belongsToMany(Group::class, 'employee_group', 'id', 'empleados_id');
}
public function equipo()
{
    return $this->belongsTo(Equipo::class);
}
public function nomina()
{
    return $this->hasOne(Nomina::class);
}

}
