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
            Schema::create('alumnos', function (Blueprint $table) {
                $table->id();
                $table->string('nombre', 120)->required();
                $table->string('apellido', 120)->required();
                $table->string('dni', 9)->unique()->required();
                $table->date('fecha_nacimiento')->required();
                $table->string('calle', 120)->nullable();
                $table->unsignedBigInteger('numero_casa')->nullable();
                $table->string('provincia', 20);
                $table->string('ciudad', 120)->required();
                $table->string('nro_celular', 30)->required();
                $table->enum('sexo', ['masculino', 'femenino', 'otro'])->nullable();
                $table->string('email')->required();
                $table->date('fecha_alta')->required();
                
                $table->timestamps();

                $table->string('rol', 50)->nullable();
               
            });
        }
    
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
                      
            Schema::dropIfExists('alumnos');
        }
     };
