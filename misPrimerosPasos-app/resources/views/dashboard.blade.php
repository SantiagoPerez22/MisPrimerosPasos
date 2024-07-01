<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Enlaces a la creación de recursos -->
                        <a href="{{ route('personas.store') }}" class="btn btn-primary mb-2">Agregar Persona</a>
                        <a href="{{ route('roles.store') }}" class="btn btn-primary mb-2">Agregar Rol</a>
                        <a href="{{ route('niveles.store') }}" class="btn btn-primary mb-2">Agregar Nivel</a>
                        <a href="{{ route('nucleos.store') }}" class="btn btn-primary mb-2">Agregar Nucleo</a>
                        <a href="{{ route('ambitos.store') }}" class="btn btn-primary mb-2">Agregar Ambito</a>
                        <a href="{{ route('salas.store') }}" class="btn btn-primary mb-2">Agregar Sala</a>
                        <a href="{{ route('condiciones.store') }}" class="btn btn-primary mb-2">Agregar Condición</a>
                        <a href="{{ route('tutor_alumnos.store') }}" class="btn btn-primary mb-2">Agregar Tutor Alumno</a>
                        <a href="{{ route('alergias.store') }}" class="btn btn-primary mb-2">Agregar Alergia</a>
                        <a href="{{ route('enfermedades.store') }}" class="btn btn-primary mb-2">Agregar Enfermedad</a>
                        <a href="{{ route('informes_diarios.store') }}" class="btn btn-primary mb-2">Agregar Informe Diario</a>
                        <a href="{{ route('informes_semanales.store') }}" class="btn btn-primary mb-2">Agregar Informe Semanal</a>
                        <a href="{{ route('cuentas.store') }}" class="btn btn-primary mb-2">Agregar Cuenta</a>
                        <a href="{{ route('clases.store') }}" class="btn btn-primary mb-2">Agregar Clase</a>
                        <a href="{{ route('asistencias.store') }}" class="btn btn-primary mb-2">Agregar Asistencia</a>
                        <a href="{{ route('observaciones.store') }}" class="btn btn-primary mb-2">Agregar Observación</a>

                        <!-- Botón de Logout -->
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
