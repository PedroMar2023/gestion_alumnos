@extends('layouts/template')
@section('title', 'Ingresar DNI')
    
@section('contenido')
<main>
    <h3>Seleccionar Curso</h3>
<form action="{{ route('matricula.store_matricula') }}" method="POST">
    @csrf
    <input type="hidden" name="alumno_id" value="{{ $alumno_id }}">
    <div class="form-group">
        <label for="curso_id">Curso</label>
        <select name="curso_id" id="curso_id" class="form-control">
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Finalizar Matrícula</button>
</form>
</main>
@endsection