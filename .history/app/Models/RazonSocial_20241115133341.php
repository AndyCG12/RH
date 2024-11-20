<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RazonSocial extends Model
{
    use HasFactory;

    protected $table = 'razones_sociales';

    protected $fillable = [
        'nombre', 'direccion', 'rfc',
    ];
    public function setRfcAttribute($value)
{
    $this->attributes['rfc'] = strtoupper($value);
}
public function nominas()
{
    return $this->hasMany(Nomina::class, 'razon_social_id');
}
}
