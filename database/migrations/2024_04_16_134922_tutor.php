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
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120)->required();
            $table->string('apellido', 120)->required();
            $table->string('dni', 9)->unique()->nullable();
            $table->date('fecha_nacimiento')->required();
            $table->string('calle', 120)->required();
            $table->unsignedBigInteger('numero_casa');
            $table->string('provincia', 20);
            $table->string('ciudad', 120)->required();
            $table->string('nro_celular', 30)->required();;
            $table->enum('sexo', ['masculino', 'femenino', 'otro']);
            $table->string('email')->required();
            $table->enum('parentezco', ['Madre', 'Padre', 'Tutor']); // Agregar una columna adicional
            $table->date('fecha_alta')->required();
              $table->timestamps();
            $table->string('rol', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutores');
    }
};

