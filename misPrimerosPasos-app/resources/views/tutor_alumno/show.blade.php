@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Relación Tutor-Alumno</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $tutorAlumno->id }}</h5>
            <p class="card-text"><strong>Alumno:</strong> {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</p>
            <p class="card-text"><strong>Tutor Principal:</strong> {{ $tutorAlumno->tutor1->nombre1 }} {{ $tutorAlumno->tutor1->apellido1 }}</p>
            <p class="card-text"><strong>Tutor Secundario:</strong> {{ $tutorAlumno->tutor2 ? $tutorAlumno->tutor2->nombre1 . ' ' . $tutorAlumno->tutor2->apellido1 : 'N/A' }}</p>
            <p class="card-text"><strong>Nivel:</strong> {{ $tutorAlumno->nivel->nombre }}</p>
            <p class="card-text"><strong>Fecha de Matrícula:</strong> {{ $tutorAlumno->fecha_matricula }}</p>
            <a href="{{ route('tutor_alumno.edit', $tutorAlumno->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('tutor_alumno.destroy', $tutorAlumno->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('tutor_alumno.index') }}" class="btn btn-secondary">Volver a la Lista</a>
        </div>
    </div>
</div>
@endsection
