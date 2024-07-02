@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Clase</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ámbito: {{ $clase->ambito->nombre }}</h5>
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
