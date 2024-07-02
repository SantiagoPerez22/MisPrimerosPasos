@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Alergia</h1>
    <div class="card">
        <div class="card-header">
            Alergia: {{ $alergia->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $alergia->descripcion }}</p>
            <p><strong>Alumno:</strong> {{ $alergia->tutorAlumno ? $alergia->tutorAlumno->alumno->nombre1 . ' ' . $alergia->tutorAlumno->alumno->apellido1 : 'No asignado' }}</p>
        </div>
    </div>
    <a href="{{ route('alergias.index') }}" class="btn btn-primary mt-3">Volver</a>
</div>
@endsection
