
    document.getElementById('guardarAlumno').addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario por defecto

        // Mostrar mensaje de confirmación
        var confirmacion = confirm('¿Deseas agregar un tutor?');

        if (confirmacion) {
            window.location.href = "{{ route('tutores.create') }}"; // Redirigir al formulario de tutores
        } else {
            // Enviar el formulario de alumnos si el usuario no desea agregar un tutor
            document.getElementById('formularioAlumno').submit();
        }
    });

    //Agregar tutores
    document.getElementById('guardarAlumno').addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario por defecto

        // Mostrar mensaje de confirmación
        var confirmacion = confirm('¿Deseas agregar un tutor?');

        if (confirmacion) {
            window.location.href = "{{ route('tutores.create') }}"; // Redirigir al formulario de tutores
        } else {
            // Enviar el formulario de alumnos si el usuario no desea agregar un tutor
            document.getElementById('formularioAlumno').submit();
        }
    });