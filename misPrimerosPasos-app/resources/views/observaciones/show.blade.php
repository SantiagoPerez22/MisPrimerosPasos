@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5>Observación del {{ $observacion->fecha }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Clase (Nivel):</strong> {{ $observacion->clase->nivel->nombre }} | {{ $observacion->clase->fecha }}</p>
            <p><strong>Párvulo:</strong> {{ $observacion->alumno->alumno->nombre1 }} {{ $observacion->alumno->alumno->apellido1 }}</p>
            <p><strong>Registrado:</strong> {{ $observacion->cuenta->name }} el {{ $observacion->fecha }}</p>
            <p><strong>Observaciones:</strong> {{ $observacion->observaciones }}</p>
            <a href="{{ route('observaciones.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection