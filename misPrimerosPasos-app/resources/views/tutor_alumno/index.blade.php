@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Relaciones Tutor-Alumno</h1>
    <a href="{{ route('tutor_alumno.create') }}" class="btn btn-primary">Crear Nueva Relación</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Tutor Principal</th>
            <th>Tutor Secundario</th>
            <th>Nivel</th>
            <th>Fecha Matrícula</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tutoresAlumnos as $tutorAlumno)
        <tr>
            <td>{{ $tutorAlumno->id }}</td>
            <td>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</td>
            <td>{{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</td>
            <td>{{ $tutorAlumno->tutor2 ? $tutorAlumno->tutor2->nombre1 . ' ' . $tutorAlumno->tutor2->apellido1 : 'N/A' }}</td>
            <td>{{ $tutorAlumno->nivel->nombre }}</td>
            <td>{{ $tutorAlumno->fecha_matricula }}</td>
            <td>
                <a href="{{ route('tutor_alumno.show', $tutorAlumno->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('tutor_alumno.edit', $tutorAlumno->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('tutor_alumno.destroy', $tutorAlumno->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
