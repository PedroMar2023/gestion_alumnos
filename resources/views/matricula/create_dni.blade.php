@extends('layouts/template')
@section('title', 'Gestión de Inscrpciones')
    
@section('contenido')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h2 class="card-title mb-4 text-center">Cargar Alumno</h2>
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                 <ul>
                                     @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
        <form action="{{ url('alumnos/'.$alumno->id)}}"  id="registroForm"  method="post">
            @method("PUT")
            @csrf
            <div class="mb-3 row">
                <h3 class="mb-3">Datos Personales</h3>
                <label for="nombre" class="col-sm-4 col-form-label">Nombre:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese nombre" value="{{ $alumno->nombre }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="apellido">Apellido:</label>
                <div class="col-sm-6">
                 <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Ingrese apellido" value="{{ $alumno->apellido }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="dni">DNI:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="dni" name="dni" placeholder="Ingrese DNI" value="{{ $alumno->dni}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese fecha de nacimiento" value="{{ $alumno->fecha_nacimiento }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="provincia">Provincia:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="provincia" name="provincia" placeholder="Elija una provincia" value="{{ $alumno->provincia}}">
                        <option value="">Selecciona una provincia</option>
                        <option value="Buenos Aires">Buenos Aires</option>
                        <option value="Catamarca">Catamarca</option>
                        <option value="Chaco">Chaco</option>
                        <option value="Chubut">Chubut</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Corrientes">Corrientes</option>
                        <option value="Entre Ríos">Entre Ríos</option>
                        <option value="Formosa">Formosa</option>
                        <option value="Jujuy">Jujuy</option>
                        <option value="La Pampa">La Pampa</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Mendoza">Mendoza</option>
                        <option value="Misiones">Misiones</option>
                        <option value="Neuquén">Neuquén</option>
                        <option value="Río Negro">Río Negro</option>
                        <option value="Salta">Salta</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Luis">San Luis</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Santiago del Estero">Santiago del Estero</option>
                        <option value="Tierra del Fuego">Tierra del Fuego</option>
                        <option value="Tucumán">Tucumán</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label  class="col-sm-4 col-form-label" for="ciudad">Ciudad:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="ciudad" name="ciudad" placeholder="Ingrese ciudad o localidad" value="{{ $alumno->ciudad }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="calle">Calle:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="calle" name="calle" placeholder="Ingrese calle del domicilio" value="{{ $alumno->calle }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label  class="col-sm-4 col-form-label" for="numero_casa">Número de Casa:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="numero_casa" name="numero_casa" placeholder="Ingrese número del domicilio" value="{{ $alumno->numero_casa }}">
                </div>
            </div>
    
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="nro_celular">Número de Celular:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="tel" id="nro_celular" name="nro_celular" placeholder="Ingrese número de contacto" value="{{ $alumno->nro_celular }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="sexo">Sexo:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="">Elige una opción</option>
                        <option value="masculino" {{ $alumno->sexo === 'masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="femenino" {{ $alumno->sexo === 'femenino' ? 'selected' : '' }}>Femenino</option>
                        <option value="otro" {{ $alumno->sexo === 'otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="email">Email:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese email" value="{{ $alumno->email }}">
                </div>
            </div>
            <div class="mb-3 row">
                <h2>Datos de Sistema</h2>
                
            <input type="hidden" name="rol" value="alumno">
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="fecha_alta">Fecha de Alta:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="date" id="fecha_alta" name="fecha_alta" placeholder="Ingrese fecha de alta" value="{{ $alumno->fecha_alta }}">
                </div>
            </div>
            <br>
            <br>
            <div class="mb-3">
                <a href="{{ url ('alumnos')}}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary" id="guardarAlumno">Registrar y Continuar</button>
            </div>
        </form>
        <script>
            document.getElementById('guardarAlumno').addEventListener('click', function(event) {
                event.preventDefault(); // Prevenir el envío del formulario por defecto
        
                // Mostrar mensaje de confirmación
                var confirmacion = confirm('¿Deseas agregar un tutor?');
        
                if (confirmacion) {
                    window.location.href = "{{ route('tutor.create') }}"; // Redirigir al formulario de tutores
                } else {
                    // Enviar el formulario de alumnos si el usuario no desea agregar un tutor
                    document.getElementById('registroForm').submit();
                }
            });
        </script>
    </div>
</div>
</div>
</div>
</div>
</main>
@endsection