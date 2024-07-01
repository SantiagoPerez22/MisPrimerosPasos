@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Clase</h1>
    <div class="card">
        <div class="card-header">
            Clase #{{ $clase->id }}
        </div>
        <div class="card-body">
            <p><strong>Ámbito:</strong> {{ $clase->id_ambito }}</p>
            <p><strong>Núcleo:</strong> {{ $clase->id_nucleo }}</p>
            <p><strong>Nivel:</strong> {{ $clase->id_nivel }}</p>
            <p><strong>Profesor:</strong> {{ $clase->id_profesor }}</p>
            <p><strong>Asistente 1:</strong> {{ $clase->id_asistente1 }}</p>
            <p><strong>Asistente 2:</strong> {{ $clase->id_asistente2 }}</p>
            <p><strong>Sala:</strong> {{ $clase->id_sala }}</p>
            <p><strong>Fecha:</strong> {{ $clase->fecha }}</p>
            <p><strong>Objetivo:</strong> {{ $clase->objetivo }}</p>
            <p><strong>Observaciones:</strong> {{ $clase->observaciones }}</p>
            <a href="{{ route('clases.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
