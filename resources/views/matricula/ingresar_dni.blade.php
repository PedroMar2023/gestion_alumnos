@extends('layouts/template')
@section('title', 'Ingresar DNI')
    
@section('contenido')
<main>
    <h3>Registrar Matricula</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h4 class="card-title mb-4 text-center">Ingresar DNI de Alumno</h4>
                            <form action="{{ route('matricula.validar_dni') }}" method="POST">
                                @csrf
                            <div class="form-group">
                                 <label for="dni">DNI del Alumno</label>
                                <input type="text" class="form-control" id="dni" name="dni"  title="El DNI debe tener entre 7 y 9 dígitos">
                            </div>
                        <button type="submit" class="btn btn-primary">Matricular Alumno</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection