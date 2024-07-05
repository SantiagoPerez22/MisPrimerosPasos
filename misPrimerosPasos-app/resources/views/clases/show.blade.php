@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de la Clase
            </h5>
            <h6 class="card-subtitle text-muted">
                Ámbito: {{ $clase->ambito->nombre }}
            </h6>
        </div>
        <div class="card-body">
            <p class="card-text">Núcleo: {{ $clase->nucleo->nombre }}</p>
            <p class="card-text">Nivel: {{ $clase->nivel->nombre }}</p>
            <p class="card-text">Profesor: {{ $clase->profesor->persona->nombre1 }} {{ $clase->profesor->persona->apellido1 }}</p>
            <p class="card-text">Asistente 1: {{ $clase->asistente1 ? $clase->asistente1->persona->nombre1 . ' ' . $clase->asistente1->persona->apellido1 : '-' }}</p>
            <p class="card-text">Asistente 2: {{ $clase->asistente2 ? $clase->asistente2->persona->nombre1 . ' ' . $clase->asistente2->persona->apellido1 : '-' }}</p>
            <p class="card-text">Sala: {{ $clase->sala->numero }}</p>
            <p class="card-text">Fecha: {{ $clase->fecha }}</p>
            <p class="card-text">Objetivo: {{ $clase->objetivo }}</p>
            <p class="card-text">Observaciones: {{ $clase->observaciones }}</p>
            <a href="{{ route('clases.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
