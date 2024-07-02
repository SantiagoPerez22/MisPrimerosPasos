@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tutor Alumno</h1>
    <a href="{{ route('tutor_alumnos.create') }}" class="btn btn-primary">Agregar Tutor Alumno</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Tutor 1</th>
            <th>Tutor 2</th>
            <th>Nivel</th>
            <th>Fecha de Matrícula</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tutorAlumnos as $tutorAlumno)
        <tr>
            <td>{{ $tutorAlumno->id }}</td>
            <td>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</td>
            <td>{{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</td>
            <td>{{ $tutorAlumno->tutor2->nombre1 ?? 'N/A' }} {{ $tutorAlumno->tutor2->apellido1 ?? '' }}</td>
            <td>{{ $tutorAlumno->nivel->nombre }}</td>
            <td>{{ $tutorAlumno->fecha_matricula }}</td>
            <td>
                <a href="{{ route('tutor_alumnos.show', $tutorAlumno->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('tutor_alumnos.edit', $tutorAlumno->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('tutor_alumnos.destroy', $tutorAlumno->id) }}" method="POST" style="display:inline;">
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
