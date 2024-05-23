@extends('layouts/template')
@section('title', 'Tutores')
    
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Listado de Tutores</h2>
        <a href="{{ url ('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>parentezco</th>
                <th>DNI</th>
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Provincia</th>
                <th>Ciudad</th>
                <th>Calle</th>
                <th>Nro</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Fecha de Alta</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                @foreach($tutores as $tutor)
                <tr>
                    <td>{{ $tutor->nombre }}</td>
                    <td>{{ $tutor->apellido }}</td>
                    <td>{{ $tutor->parentezco }}</td>
                    <td>{{ $tutor->dni }}</td>
                    <td>{{ $tutor->fecha_nacimiento }}</td>
                    <td>{{ $tutor->sexo }}</td>
                    <td>{{ $tutor->provincia }}</td>
                    <td>{{ $tutor->ciudad }}</td>
                    <td>{{ $tutor->calle }}</td>
                    <td>{{ $tutor->numero_casa }}</td>
                    <td>{{ $tutor->nro_celular }}</td>
                    <td>{{ $tutor->email }}</td>
                    <td>{{ $tutor->fecha_alta }}</td>
                    <td>
                        
                    </td>
                    <td>
                        <form action="{{ url('tutor/'.$tutor->id) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este alumno?')">Eliminar</button>
                            
                        </form>
                        
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</main>