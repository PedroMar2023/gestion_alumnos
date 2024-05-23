<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\curso;
use App\Models\Matricula;

class MatriculaController extends Controller
{
    public function ingresarDNI()
    {
        return view('matricula.ingresar_dni');
    }
    
    
    public function validar_dni(Request $request)
    {
        $dni = $request->input('dni');
        $alumno = Alumno::where('dni', $dni)->first();
    
        if ($alumno) {
            // Alumno encontrado, redirigir a la vista de edición de alumno con una bandera
            return redirect()->route('alumnos.edit', ['alumno' => $alumno->id, 'from_matricula' => true]);
        } else {
            // Alumno no encontrado, redirigir a la vista de creación de alumno con una bandera
            return redirect()->route('alumnos.create', ['from_matricula' => true]);
        }
    }
    public function seleccionar_curso($alumno_id)
{
    $cursos = Curso::all();
    return view('matricula.seleccionar_curso', ['cursos' => $cursos, 'alumno_id' => $alumno_id]);
}

    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matricula.create_dni');
    }//

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
