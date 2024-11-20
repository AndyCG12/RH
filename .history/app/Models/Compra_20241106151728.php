<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'cantidad', 'precio', 'empleado_id', 'estado'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
