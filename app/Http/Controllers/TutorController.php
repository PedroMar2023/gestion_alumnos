<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ingresarDNI()
    {
        return view('tutor.ingresar_dni');
    }
     
    
    public function validar_dni(Request $request)
    {
        $dni = $request->input('dni');
        $tutor = Tutor::where('dni', $dni)->first();
    
        if ($tutor) {
            // Alumno encontrado, redirigir a la vista de edición de alumno con una bandera
            return redirect()->route('tutor.edit', ['tutor' => $tutor->id, 'from_matricula' => true]);
        } else {
            // Alumno no encontrado, redirigir a la vista de creación de alumno con una bandera
            return redirect()->route('tutor.create', ['from_matricula' => true]);
        }
    }
    
    
    
    
    
    public function index()
    {
        $tutores = Tutor::all();
        return view('tutor.index', ['tutores' => $tutores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $request->validate([
                 'parentezco' => ['required', 'string', 'max:120', Rule::in(['Madre', 'Padre', 'Tutor'])],
                'nombre' => 'required|string|max:120',
                'apellido' => 'required|string|max:120',
                'dni' => 'required|regex:/^\d{7,9}$/|unique:alumnos,dni', // Validación del DNI
                'fecha_nacimiento' => 'required|date',
                'provincia' => 'required|string|max:100',
                'ciudad' => 'required|string|max:120',
                'calle' => 'nullable|string|max:120',
                'numero_casa' => 'nullable|integer',
                'nro_celular' => 'required|string|max:30',
                'sexo' => 'nullable|in:masculino,femenino,otro',
                'email' => 'required|string|email|max:255',
                 //'nombre_usuario' => 'required|string|max:50|unique:alumnos,nombre_usuario',
                //'password' => 'required|string|max:255',
                'fecha_alta' => 'required|date',
    
                // Asegurarse de que el rol exista en la base de datos
                // Otros campos de formulario
            ]);
            $tutores= new Tutor();
            $tutores->rol = $request->input('rol');
            $tutores->parentezco = $request->input('parentezco');
            $tutores->nombre = $request->input('nombre');
            $tutores->apellido = $request->input('apellido');
            $tutores->dni = $request->input('dni');
            $tutores->fecha_nacimiento = $request->input('fecha_nacimiento');
            $tutores->provincia = $request->input('provincia');
            $tutores->ciudad = $request->input('ciudad');
            $tutores->calle = $request->input('calle');
            $tutores->numero_casa = $request->input('numero_casa');
            $tutores->nro_celular = $request->input('nro_celular');
            $tutores->sexo = $request->input('sexo');
            $tutores->email = $request->input('email');
            $tutores->fecha_alta = $request->input('fecha_alta');
            $tutores->save();
              // Guardar la relación en la tabla intermedia
              $tutorId = $tutores->id;

              // Si hay un alumno asociado, asociar al tutor con el alumno
              if (session()->has('alumno_id')) {
                  $alumnoId = session('alumno_id');
                  $alumno = Alumno::find($alumnoId);
                 $alumno->tutores()->attach($tutorId);

              }
            return view ("tutor.message", ['msg' => "Registro Guardado"]);
    
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
