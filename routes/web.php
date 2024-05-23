<?php

use App\Http\Controllers\AdministrativoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\CursoController;
use App\Models\Matricula;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('alumnos', AlumnoController::class);
Route::resource('tutor', TutorController::class);
Route::resource('Administrativo', AdministrativoController::class);
Route::get('matricula/ingresar_dni', [MatriculaController::class, 'ingresarDNI'])->name('matricula.ingresar_dni');
Route::post('matricula/validar_dni', [MatriculaController::class, 'validar_dni'])->name('matricula.validar_dni');
Route::resource('matricula', MatriculaController::class);
Route::get('matricula/seleccionar-curso/{alumno_id}', [MatriculaController::class, 'seleccionar_curso'])->name('matricula.seleccionar_curso');


Route::resource('cursos', CursoController::class);
Route::post('/limpiar-session', 'App\Http\Controllers\AlumnoController@limpiarSession')->name('limpiar.session');

