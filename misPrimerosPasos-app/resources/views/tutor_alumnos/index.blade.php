@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tutor Alumnos</h1>
    <a href="{{ route('tutor_alumnos.create') }}" class="btn btn-primary mb-2">Agregar Tutor Alumno</a>
    <table class="table">
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
            <td>{{ $tutorAlumno->id_alumno }}</td>
            <td>{{ $tutorAlumno->id_tutor1 }}</td>
            <td>{{ $tutorAlumno->id_tutor2 }}</td>
            <td>{{ $tutorAlumno->id_nivel }}</td>
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
