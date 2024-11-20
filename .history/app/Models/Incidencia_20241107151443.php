<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    protected $table = 'incidencias';
    protected $fillable = [
        'titulo', 'descripcion', 'empleado_id', 'estado'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
