@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Clase</h1>
    <div class="card">
        <div class="card-header">
            Clase del {{ $clase->fecha }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Ámbito:</strong> {{ $clase->ambito->nombre }}</p>
            <p class="card-text"><strong>Núcleo:</strong> {{ $clase->nucleo->nombre }}</p>
            <p class="card-text"><strong>Nivel:</strong> {{ $clase->nivel->nombre }}</p>
            <p class="card-text"><strong>Profesor:</strong> {{ $clase->profesor->name }}</p>
            <p class="card-text"><strong>Asistente 1:</strong> {{ $clase->asistente1->name ?? 'N/A' }}</p>
            <p class="card-text"><strong>Asistente 2:</strong> {{ $clase->asistente2->name ?? 'N/A' }}</p>
            <p class="card-text"><strong>Sala:</strong> {{ $clase->sala->numero }}</p>
            <p class="card-text"><strong>Objetivo:</strong> {{ $clase->objetivo }}</p>
            <p class="card-text"><strong>Observaciones:</strong> {{ $clase->observaciones }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $clase->fecha }}</p>
            <a href="{{ route('clases.edit', $clase->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('clases.destroy', $clase->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
