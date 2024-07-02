@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Tutor Alumno</h1>
    <div class="card">
        <div class="card-header">Información del Alumno</div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</p>
            <p><strong>RUT:</strong> {{ $tutorAlumno->alumno->rut }}</p>
            <p><strong>Edad:</strong> {{ $tutorAlumno->alumno->edad }}</p>
            <p><strong>Email:</strong> {{ $tutorAlumno->alumno->email }}</p>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">Información de los Tutores</div>
        <div class="card-body">
            <p><strong>Tutor 1:</strong> {{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</p>
            <p><strong>Tutor 2:</strong> {{ $tutorAlumno->tutor2->nombre1 ?? 'N/A' }} {{ $tutorAlumno->tutor2->apellido1 ?? '' }}</p>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">Información Académica</div>
        <div class="card-body">
            <p><strong>Nivel:</strong> {{ $tutorAlumno->nivel->nombre }}</p>
            <p><strong>Fecha de Matrícula:</strong> {{ $tutorAlumno->fecha_matricula }}</p>
        </div>
    </div>
    <a href="{{ route('tutor_alumnos.index') }}" class="btn btn-primary mt-3">Volver</a>
</div>
@endsection
