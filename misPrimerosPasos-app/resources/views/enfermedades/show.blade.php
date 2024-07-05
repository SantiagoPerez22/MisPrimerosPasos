@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de la Enfermedad
            </h5>
            <h6 class="card-subtitle text-muted">
            Nombre:  {{ $enfermedad->nombre }}
            </h6>
        </div>
        <div class="card-body">
            <p class="card-text">Descripción: {{ $enfermedad->descripcion }}</p>
            <p class="card-text">Alumno: {{ $enfermedad->alumno->alumno->nombre1 }} {{ $enfermedad->alumno->alumno->apellido1 }}</p>
            <a href="{{ route('enfermedades.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection