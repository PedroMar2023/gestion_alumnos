@extends('layouts/template')
@section('title', 'Tutores')
    
@section('contenido')
<main>
    <div class="container">
        <div class="row justify-content-center">
                    <div class="card-body bg-light">
                        <h2 class="card-title mb-6 text-center">{{ $msg }}</h2>
                        <a href="{{ url('alumnos') }}" id="regresarBtn" class="btn btn-secondary btn-sm">Regresar</a>
                        <a href="{{ url('tutor/create') }}" class="btn btn-primary btn-sm">Cargar Tutor</a>

<script>
    document.getElementById('regresarBtn').addEventListener('click', function(event) {
        event.preventDefault();
        // Limpiar la sesión del ID del alumno
        fetch("{{ route('limpiar.session') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (response.ok) {
                // Redirigir a la página de alumnos
                window.location.href = "{{ url('alumnos') }}";
            } else {
                console.error('Error al limpiar la sesión');
            }
        })
        .catch(error => {
            console.error('Error al limpiar la sesión:', error);
        });
    });
</script>
                        
                        