@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Card Element -->
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de la Alergia
            </h5>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">
                Alergia: {{ $alergia->nombre }}
            </h6>
            <p class="card-text"><strong>Descripción:</strong> {{ $alergia->descripcion }}</p>
            <p class="card-text"><strong>Alumno:</strong> 
                {{ $alergia->tutorAlumno ? $alergia->tutorAlumno->alumno->nombre1 . ' ' . $alergia->tutorAlumno->alumno->apellido1 : 'No asignado' }}
            </p>
            <a href="{{ route('alergias.index') }}" class="btn btn-primary mt-3">
                <i class="fa fa-arrow-left"></i> Volver
            </a>
        </div>
    </div>
</div>
@endsection