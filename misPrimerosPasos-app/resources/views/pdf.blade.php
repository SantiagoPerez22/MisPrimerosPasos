@extends('layouts.pdf')

@section('title', 'Reporte de Alumno')

@section('content')
<div class="card border-0">
    <div class="card-header">
        <h5 class="card-title">Datos del Párvulo</h5>
        <h6 class="card-subtitle text-muted">Información detallada del párvulo</h6>
    </div>
    <div class="card-body">
        @if(isset($tutorAlumno->alumno))
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <tr>
                <th>Nombre Completo</th>
                <td>{{ $tutorAlumno->alumno->getNombreCompletoAttribute() }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>{{ $tutorAlumno->alumno->edad }}</td>
            </tr>
            <tr>
                <th>RUT</th>
                <td>{{ $tutorAlumno->alumno->rut }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $tutorAlumno->alumno->telefono }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $tutorAlumno->alumno->email }}</td>
            </tr>
            <tr>
                <th>Domicilio</th>
                <td>{{ $tutorAlumno->alumno->domicilio->direccion }}</td>
            </tr>
        </table>
        @else
        <p>No se encontraron datos personales para el ID del alumno especificado.</p>
        @endif

        <h5>Datos del Tutor</h5>
        @if(isset($tutorAlumno))
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Tutor Principal</th>
                <th>Tutor Secundario</th>
                <th>Nivel</th>
                <th>Fecha Matrícula</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $tutorAlumno->tutor1->getNombreCompletoAttribute() }}</td>
                <td>{{ $tutorAlumno->tutor2->getNombreCompletoAttribute() }}</td>
                <td>{{ $tutorAlumno->nivel->nombre }}</td>
                <td>{{ $tutorAlumno->fecha_matricula }}</td>
            </tr>
            </tbody>
        </table>
        @else
        <p>No se encontraron datos del tutor para el ID del alumno especificado.</p>
        @endif

        <h5>Observaciones</h5>
        @if(!$tutorAlumno->observaciones->isEmpty())
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Observaciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tutorAlumno->observaciones as $observacion)
            <tr>
                <td>{{ $observacion->fecha }}</td>
                <td>{{ $observacion->observaciones }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron observaciones para el ID del alumno especificado.</p>
        @endif

        <h5>Informes Semanales</h5>
        @if(!$tutorAlumno->informesSemanales->isEmpty())
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Altura</th>
                <th>Peso</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tutorAlumno->informesSemanales as $informe)
            <tr>
                <td>{{ $informe->fecha }}</td>
                <td>{{ $informe->altura }}</td>
                <td>{{ $informe->peso }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron informes semanales para el ID del alumno especificado.</p>
        @endif

        <h5>Informes Diarios</h5>
        @if(!$tutorAlumno->informesDiarios->isEmpty())
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Observaciones</th>
                <th>Imagen</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tutorAlumno->informesDiarios as $informe)
            <tr>
                <td>{{ $informe->fecha }}</td>
                <td>{{ $informe->observaciones }}</td>
                <td>
                    @if($informe->imagen)
                    <img src="{{ public_path('storage/'.$informe->imagen) }}" alt="Imagen" style="width:100px;height:100px;">
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron informes diarios para el ID del alumno especificado.</p>
        @endif

        <h5>Enfermedades</h5>
        @if(!$tutorAlumno->enfermedades->isEmpty())
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tutorAlumno->enfermedades as $enfermedad)
            <tr>
                <td>{{ $enfermedad->nombre }}</td>
                <td>{{ $enfermedad->descripcion }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron enfermedades para el ID del alumno especificado.</p>
        @endif

        <h5>Alergias</h5>
        @if(!$tutorAlumno->alergias->isEmpty())
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tutorAlumno->alergias as $alergia)
            <tr>
                <td>{{ $alergia->nombre }}</td>
                <td>{{ $alergia->descripcion }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron alergias para el ID del alumno especificado.</p>
        @endif

        <h5>Clases</h5>
        @if(!$tutorAlumno->asistencias->isEmpty())
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Objetivo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tutorAlumno->asistencias as $asistencia)
            <tr>
                <td>{{ $asistencia->clase->fecha }}</td>
                <td>{{ $asistencia->clase->objetivo }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron clases para el ID del alumno especificado.</p>
        @endif
    </div>
</div>
@endsection
