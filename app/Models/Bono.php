<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bono extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'monto', 'empleado_id', 'fecha'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
