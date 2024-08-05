@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Relación Tutor-Párvulo
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de relaciones tutor-párvulo
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Párvulo</th>
                        <th scope="col">Tutor Principal</th>
                        <th scope="col">Tutor Secundario</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Fecha Matrícula</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tutoresAlumnos as $tutorAlumno)
                    <tr>
                        <th scope="row">{{ $tutorAlumno->id }}</th>
                        <td>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</td>
                        <td>{{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</td>
                        <td>{{ $tutorAlumno->tutor2 ? $tutorAlumno->tutor2->nombre1 . ' ' . $tutorAlumno->tutor2->apellido1 : 'N/A' }}</td>
                        <td>{{ $tutorAlumno->nivel->nombre }}</td>
                        <td>{{ $tutorAlumno->fecha_matricula }}</td>
                        <td>
                            <a href="{{ route('tutor_alumno.show', $tutorAlumno->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('tutor_alumno.edit', $tutorAlumno->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('tutor_alumno.destroy', $tutorAlumno->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
