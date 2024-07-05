@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de la Asistencia
            </h5>
            <h6 class="card-subtitle text-muted">
                Información detallada de la asistencia
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Alumno: {{ $asistencia->alumno->alumno->nombre1 }} {{ $asistencia->alumno->alumno->apellido1 }}</h5>
            <p class="card-text">Clase: {{ $asistencia->clase->sala->numero }}</p>
            <p class="card-text">Asistencia: {{ $asistencia->asistencia }}</p>
            <p class="card-text">Fecha: {{ $asistencia->fecha }}</p>
            <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
