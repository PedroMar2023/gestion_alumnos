@extends('layouts/template')
@section('title', 'Docentes')
    
@section('contenido')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h2 class="card-title mb-4 text-center">Registrar Docente</h2>


        <form action="{{ url('alumnos')}}"   method="post" id="registroForm">
            @csrf
            <div class="mb-3 row">
                <h3 class="mb-3">Datos Personales</h3>
                <label for="nombre" class="col-sm-4 col-form-label">Nombre:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nombre" name="nombre" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="apellido">Apellido:</label>
                <div class="col-sm-6">
                 <input class="form-control" type="text" id="apellido" name="apellido" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="departamento">Departamento:</label>
                <div class="col-sm-6">
                 <input class="form-control" type="text" id="departamento" name="departamento" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="departamento">Titulo:</label>
                <div class="col-sm-6">
                 <input class="form-control" type="text" id="titulo" name="titulo" required>
                </div>
            </div>
            </div>
                       <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="email">Email:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <h2>Datos de Sistema</h2>
                <label class="col-sm-4 col-form-label" for="nombre_usuario">Nombre de usuario:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nombre_usuario" name="nombre_usuario" required>
                        @error('nombre_usuario')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
        @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" for="password">Contraseña:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>
            </div>
            <br>
            <br>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</main>