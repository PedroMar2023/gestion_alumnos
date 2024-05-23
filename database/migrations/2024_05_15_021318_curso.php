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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120)->required();
            $table->text('descripcion')->nullable();
            $table->enum('modalidad', ['Presencial', 'Virtual', 'Dual']); // Agregar una columna adicional
            $table->enum('nivel', ['Basico', 'Intermedio', 'Avanzado']); // Agregar una columna adicional
            $table->string('horario');
            $table->string('sala');
            $table->string('docente');
            $table->integer('cupo');
            $table->enum('estado', ['No iniciado', 'Iniciado', 'Finalizado']); // Agregar una columna adicional
            $table->decimal('precio', 8, 2);
            $table->date('fecha_inicio');
            $table->date('fecha_cierre');
            // Otros campos necesarios para el curso
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
