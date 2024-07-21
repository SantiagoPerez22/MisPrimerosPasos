@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalle de relación Tutor-Párvulo</h5>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $tutorAlumno->id }}</p>
            <p><strong>Párvulo:</strong> {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</p>
            <p><strong>Tutor Principal:</strong> {{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</p>
            <p><strong>Tutor Secundario:</strong> {{ $tutorAlumno->tutor2 ? $tutorAlumno->tutor2->nombre1 . ' ' . $tutorAlumno->tutor2->apellido1 : 'N/A' }}</p>
            <p><strong>Nivel:</strong> {{ $tutorAlumno->nivel->nombre }}</p>
            <p><strong>Fecha de Matrícula:</strong> {{ $tutorAlumno->fecha_matricula }}</p>
            <a href="{{ route('tutor_alumno.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection