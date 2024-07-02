@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Observación</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Alumno: {{ $observacion->alumno->alumno->nombre1 }} {{ $observacion->alumno->alumno->apellido1 }}</h5>
            <p class="card-text">Clase: {{ $observacion->clase->sala->numero }}</p>
            <p class="card-text">Observaciones: {{ $observacion->observaciones }}</p>
            <p class="card-text">Fecha: {{ $observacion->fecha }}</p>
            <a href="{{ route('observaciones.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
