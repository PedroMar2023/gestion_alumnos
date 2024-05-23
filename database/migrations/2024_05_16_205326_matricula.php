<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('curso_id');
            // Aquí puedes agregar otros campos necesarios para la relación
            $table->unique(['alumno_id', 'curso_id']); // Restricción única en la combinación de alumno_id y curso_id
            
            // Otros campos necesarios para la matrícula
            $table->date('fecha_inscripcion');
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
};
