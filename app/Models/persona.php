<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'dni',
        'fecha_nacimiento',
        'nombre_usuario',
        'password',
        'calle',
        'numero_casa',
        'departamento',
        'ciudad',
        'nro_celular',
        'sexo',
        'email',
    ];
}

