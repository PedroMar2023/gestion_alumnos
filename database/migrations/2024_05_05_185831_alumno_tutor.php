<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumno_tutor', function (Blueprint $table) {
 // Agregar una columna adicional, por ejemplo, 'relationship_type'
 $table->unsignedBigInteger('alumno_id');
 $table->unsignedBigInteger('tutor_id');
 
 
 // Definir la clave primaria compuesta
 $table->primary(['alumno_id', 'tutor_id']);
            
            // Definir las claves foráneas
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('tutor_id')->references('id')->on('tutores')->onDelete('cascade');
            

        });
    }

    public function down()
    {
        Schema::dropIfExists('alumno_tutor');
    }
};