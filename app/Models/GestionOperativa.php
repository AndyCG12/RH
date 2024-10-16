<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionOperativa extends Model
{
    use HasFactory;

    protected $table = 'gestion_operativa';

    protected $fillable = [
        'empleado_id', 'fecha', 'hora_entrada', 'hora_salida', 'tarea_asignada'
    ];

    protected $casts = [
        'fecha' => 'date',
        'hora_entrada' => 'datetime',
        'hora_salida' => 'datetime',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
