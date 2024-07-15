@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Asistencia</h1>
    <div class="card">
        <div class="card-header">
            Asistencia del {{ $asistencia->fecha }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Clase:</strong> {{ $asistencia->clase->id }}</p> {{-- Asegúrate de que el campo `nombre` exista en el modelo `Clase` --}}
            <p class="card-text"><strong>Alumno:</strong> {{ $asistencia->alumno->alumno->nombre1 }} {{ $asistencia->alumno->alumno->apellido1 }}</p>
            <p class="card-text"><strong>Cuenta:</strong> {{ $asistencia->cuenta->name }}</p>
            <p class="card-text"><strong>Asistencia:</strong> {{ $asistencia->asistencia }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $asistencia->fecha }}</p>
            <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
