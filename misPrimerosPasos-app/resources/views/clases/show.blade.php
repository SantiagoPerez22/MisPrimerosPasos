@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Clase</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Ámbito:</strong> {{ $clase->ambito->nombre }}</p>
            <p class="card-text"><strong>Núcleo:</strong> {{ $clase->nucleo->nombre }}</p>
            <p class="card-text"><strong>Nivel:</strong> {{ $clase->nivel->nombre }}</p>
            <p class="card-text"><strong>Educadora:</strong> {{ $clase->profesor->name }}</p>
            <p class="card-text"><strong>Técnico 1:</strong> {{ $clase->asistente1->name ?? 'N/A' }}</p>
            <p class="card-text"><strong>Técnico 2:</strong> {{ $clase->asistente2->name ?? 'N/A' }}</p>
            <p class="card-text"><strong>Sala:</strong> {{ $clase->sala->numero }}</p>
            <p class="card-text"><strong>Objetivo:</strong> {{ $clase->objetivo }}</p>
            <p class="card-text"><strong>Observaciones:</strong> {{ $clase->observaciones }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $clase->fecha }}</p>
            <a href="{{ route('clases.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
