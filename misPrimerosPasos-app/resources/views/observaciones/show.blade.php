@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de la Observacion
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Alumno: {{ $observacion->alumno->alumno->nombre1 }} {{ $observacion->alumno->alumno->apellido1 }}
            </h6>
        </div>
        <div class="card-body">
            <p class="card-text">Clase: {{ $observacion->clase->sala->numero }}</p>
            <p class="card-text">Observaciones: {{ $observacion->observaciones }}</p>
            <p class="card-text">Fecha: {{ $observacion->fecha }}</p>
            <a href="{{ route('observaciones.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
