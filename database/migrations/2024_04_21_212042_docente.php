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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120)->required();
            $table->string('apellido', 120)->required();
            $table->string('email')->required();
            $table->string('nombre_usuario', 50)->unique();
            $table->string('password', 255);
            $table->string('departamento', 255);
            $table->string('titulo', 255);
            $table->string('rol', 50)->required();
            $table->enum('estado', ['activo', 'inactivo'])->nullable(); // Agregando el campo estado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
