@extends('layouts/template')
@section('title', 'Alumnos')
    
@section('contenido')
<main>
    <div class="container">
        <div class="row justify-content-center">
                    <div class="card-body bg-light">
                        <h2 class="card-title mb-6 text-center">{{ $msg }}</h2>
                        <a href="{{ url('alumnos') }}" class="btn btn-primary btn-sm">Regresar</a>
                        <a href="{{ url('tutor/create') }}" class="btn btn-secondary btn-sm">Cargar Tutor</a>
                        