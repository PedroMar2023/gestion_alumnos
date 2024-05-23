<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tutor extends persona
{
    protected $table = 'tutores'; // Aquí defines el nombre de la tabla
    protected $fillable = [
        'parentezco',
    ];
    public function alumnos(): BelongsToMany
    {
        return $this->belongsToMany(Alumno::class, 'alumno_tutor', 'tutor_id', 'alumno_id');
    }
}


//falta agregar el campo parentezco al formulario
