@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Asistencia</h1>
    <div class="card">
        <div class="card-header">
            Asistencia #{{ $asistencia->id }}
        </div>
        <div class="card-body">
            <p><strong>Alumno:</strong> {{ $asistencia->id_alumno }}</p>
            <p><strong>Clase:</strong> {{ $asistencia->id_clase }}</p>
            <p><strong>Asistencia:</strong> {{ $asistencia->asistencia }}</p>
            <p><strong>Fecha:</strong> {{ $asistencia->fecha }}</p>
            <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

