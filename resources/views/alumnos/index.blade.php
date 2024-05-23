@extends('layouts/template')
@section('title', 'Alumnos')
    
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Listado de Alumnos</h2>
        <a href="{{ url ('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
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
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->dni }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->sexo }}</td>
                    <td>{{ $alumno->provincia }}</td>
                    <td>{{ $alumno->ciudad }}</td>
                    <td>{{ $alumno->calle }}</td>
                    <td>{{ $alumno->numero_casa }}</td>
                    <td>{{ $alumno->nro_celular }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>{{ $alumno->fecha_alta }}</td>
                    <td>
                        <a href=" {{ url('alumnos/'.$alumno->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ url('alumnos/'.$alumno->id) }}" method="POST">
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