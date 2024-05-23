<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
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
            'fecha_alta' => 'required|date',

            // Asegurarse de que el rol exista en la base de datos
            // Otros campos de formulario
        ]);
        $alumno = new Alumno();
        $alumno->rol = $request->input('rol');
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->dni = $request->input('dni');
        $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno->provincia = $request->input('provincia');
        $alumno->ciudad = $request->input('ciudad');
        $alumno->calle = $request->input('calle');
        $alumno->numero_casa = $request->input('numero_casa');
        $alumno->nro_celular = $request->input('nro_celular');
        $alumno->sexo = $request->input('sexo');
        $alumno->email = $request->input('email');
        $alumno->fecha_alta = $request->input('fecha_alta');
        $alumno->save();
        // Guardar el ID del alumno en la sesión
        session(['alumno_id' => $alumno->id]);
        if ($request->has('from_matricula')) {
            // Redirigir a la vista para seleccionar el curso con el ID del alumno
            return redirect()->route('matricula.seleccionar_curso', ['alumno_id' => $alumno->id]);
        }
    
        return redirect()->route('alumnos.index');
        return view ("alumnos.message", ['msg' => "Registro Guardado"]);

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
    public function edit($id, Request $request)
{
    $alumno = Alumno::findOrFail($id);
    $from_matricula = $request->query('from_matricula', false);
    return view('alumnos.edit', ['alumno' => $alumno, 'from_matricula' => $from_matricula]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:120',
            'apellido' => 'required|string|max:120',
            'dni' => 'required|regex:/^\d{7,9}$/|unique:alumnos,dni,' . $id,
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
        $alumno = new Alumno();
        $alumno->rol = $request->input('rol');
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->dni = $request->input('dni');
        $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno->provincia = $request->input('provincia');
        $alumno->ciudad = $request->input('ciudad');
        $alumno->calle = $request->input('calle');
        $alumno->numero_casa = $request->input('numero_casa');
        $alumno->nro_celular = $request->input('nro_celular');
        $alumno->sexo = $request->input('sexo');
        $alumno->email = $request->input('email');
        $alumno->fecha_alta = $request->input('fecha_alta');
        $alumno->save();
        // Almacenar el ID del alumno en la sesión
            session()->put('alumno_id', $alumno->id);
        return view ("alumnos.message", ['msg' => "Registro Modificado"]);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect("alumnos");
    }
    public function limpiarSession()
{
    session()->forget('alumno_id');
    return redirect()->route('alumnos.index');
}

}
