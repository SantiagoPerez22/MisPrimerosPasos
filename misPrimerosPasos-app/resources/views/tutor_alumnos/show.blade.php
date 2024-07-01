@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Tutor Alumno</h1>
    <div class="card">
        <div class="card-header">
            Tutor Alumno #{{ $tutorAlumno->id }}
        </div>
        <div class="card-body">
            <p><strong>Alumno:</strong> {{ $tutorAlumno->id_alumno }}</p>
            <p><strong>Tutor 1:</strong> {{ $tutorAlumno->id_tutor1 }}</p>
            <p><strong>Tutor 2:</strong> {{ $tutorAlumno->id_tutor2 }}</p>
            <p><strong>Nivel:</strong> {{ $tutorAlumno->id_nivel }}</p>
            <p><strong>Fecha de Matrícula:</strong> {{ $tutorAlumno->fecha_matricula }}</p>
            <a href="{{ route('tutor_alumnos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
