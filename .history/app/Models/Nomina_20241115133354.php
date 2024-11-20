<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{

    protected $fillable = ['empleado_id', 'puesto_id', 'salario'];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }
    public function razonSocial()
{
    return $this->belongsTo(RazonSocial::class, 'razon_social_id');
}

}

