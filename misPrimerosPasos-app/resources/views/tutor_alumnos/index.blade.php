@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Tutor Alumno
            </h5>
            <h6 class="card-subtitle text-muted">
                Lista de tutores y alumnos en el sistema
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <td>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</td>
                            <td>{{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</td>
                            <td>{{ $tutorAlumno->tutor2->nombre1 ?? 'N/A' }} {{ $tutorAlumno->tutor2->apellido1 ?? '' }}</td>
                            <td>{{ $tutorAlumno->nivel->nombre }}</td>
                            <td>{{ $tutorAlumno->fecha_matricula }}</td>
                            <td>
                                <a href="{{ route('tutor_alumnos.show', $tutorAlumno->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('tutor_alumnos.edit', $tutorAlumno->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('tutor_alumnos.destroy', $tutorAlumno->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
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