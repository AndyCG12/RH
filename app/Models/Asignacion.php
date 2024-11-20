<?php

// app/Models/Asignacion.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'equipo_id',
    ];

    /**
     * Relación con el modelo Empleado.
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    /**
     * Relación con el modelo Equipo.
     */
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
