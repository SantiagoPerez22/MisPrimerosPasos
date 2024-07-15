@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Observación</h1>
    <div class="card">
        <div class="card-header">
            Observación del {{ $observacion->fecha }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Clase (Nivel):</strong> {{ $observacion->clase->nivel->nombre }}</p>
            <p class="card-text"><strong>Alumno:</strong> {{ $observacion->alumno->alumno->nombre1 }} {{ $observacion->alumno->alumno->apellido1 }}</p>
            <p class="card-text"><strong>Cuenta:</strong> {{ $observacion->cuenta->name }}</p>
            <p class="card-text"><strong>Observaciones:</strong> {{ $observacion->observaciones }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $observacion->fecha }}</p>
            <a href="{{ route('observaciones.edit', $observacion->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('observaciones.destroy', $observacion->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
