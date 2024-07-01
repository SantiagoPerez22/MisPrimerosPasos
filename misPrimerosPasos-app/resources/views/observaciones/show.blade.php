@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Observación</h1>
    <div class="card">
        <div class="card-header">
            Observación #{{ $observacion->id }}
        </div>
        <div class="card-body">
            <p><strong>Alumno:</strong> {{ $observacion->id_alumno }}</p>
            <p><strong>Clase:</strong> {{ $observacion->id_clase }}</p>
            <p><strong>Observaciones:</strong> {{ $observacion->observaciones }}</p>
            <p><strong>Fecha:</strong> {{ $observacion->fecha }}</p>
            <a href="{{ route('observaciones.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

