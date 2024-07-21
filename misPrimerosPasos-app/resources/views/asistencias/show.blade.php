@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Asistencia</h5>
        </div>
        <div class="card-body">
            <p><strong>Clase:</strong> {{ $asistencia->clase->id }}</p>
            <p><strong>Párvulo:</strong> {{ $asistencia->alumno->alumno->nombre1 }} {{ $asistencia->alumno->alumno->apellido1 }}</p>
            <p><strong>Tutor:</strong> {{ $asistencia->cuenta->name }}</p>
            <p><strong>Asistencia:</strong> {{ $asistencia->asistencia }}</p>
            <p><strong>Fecha:</strong> {{ $asistencia->fecha }}</p>
            <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection