@extends('layouts/template')
@section('title', 'Cursos')
    
@section('contenido')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h2 class="card-title mb-4 text-center">Registrar Curso</h2>
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
                        
        <form action="{{ url('alumnos')}}"   method="post" id="registroForm">
            @csrf
            <input type="hidden" name="rol" value="alumno">
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-4 col-form-label">Nombre:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese nombre" value="{{ old('nombre')}}">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="descripcion">Descripción:</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripción del curso" rows="4" cols="50">{{ old('descripcion') }}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="modalidad">Modalidad:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="modalidad" name="modalidad">
                        <option value="">Elige una Modalidad</option>
                        <option value="presencial" {{ old('modalidad') == 'presencial' ? 'selected' : '' }}>Presencial</option>
                        <option value="virtual" {{ old('modalidad') == 'virtual' ? 'selected' : '' }}>Virtual</option>
                        <option value="Dual" {{ old('modalidad') == 'Dual' ? 'selected' : '' }}>Dual</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="nivel">Nivel</label>
                <div class="col-sm-6">
                    <select class="form-control" id="nivel" name="nivel">
                        <option value="">Elige un Nivel</option>
                        <option value="basico" {{ old('nivel') == 'basico' ? 'selected' : '' }}>Básico</option>
                        <option value="intermedio" {{ old('nivel') == 'intermedio' ? 'selected' : '' }}>Intermedio</option>
                        <option value="avanzado" {{ old('nivel') == 'avanzado' ? 'selected' : '' }}>Avanzado</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label  class="col-sm-4 col-form-label" for="cupo">Cupo:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="cupo" name="cupo" placeholder="Ingrese cantidad de cupos" value="{{ old('cupo')}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="estado">Estado</label>
                <div class="col-sm-6">
                    <select class="form-control" id="estado" name="estado">
                        <option value="">Elige el estado del curso</option>
                        <option value="No iniciado" {{ old('estado') == 'No iniciado' ? 'selected' : '' }}>No iniciado</option>
                        <option value="Iniciado" {{ old('estado') == 'Iniciado' ? 'selected' : '' }}>Iniciado</option>
                        <option value="Finalizado" {{ old('estado') == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label  class="col-sm-4 col-form-label" for="precio">Precio Cuota Mensual:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="precio" name="precio" step="1" placeholder="Ingrese precio cuota mensual" value="{{ old('precio')}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="fecha_inicio">Fecha de Inicio:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="date" id="fecha_inicio" name="fecha_inicio" placeholder="Ingrese fecha de Inicio" value="{{ old('fecha_inicio')}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="fecha_cierre">Fecha de Cierre</label>
                <div class="col-sm-6">
                    <input class="form-control" type="date" id="fecha_cierre" name="fecha_cierre" placeholder="Ingrese fecha de Cierre" value="{{ old('fecha_cierre')}}">
                </div>
            </div>
            
            <div class="mb-3">
                <a href="{{ url ('alumnos')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary" id="guardarAlumno">Registrar</button>
            </div>
        </form>
           </div>
</div>
</div>
</div>
</div>
</main>
<script src="tutores.js"></script>
@endsection