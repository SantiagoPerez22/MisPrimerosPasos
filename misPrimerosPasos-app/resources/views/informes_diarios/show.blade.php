@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Informe Diario</h1>
    <div class="card">
        <div class="card-header">
            Informe Diario de {{ $informeDiario->fecha }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Condición:</strong> {{ $informeDiario->condicion->nombre }}</p>
            <p class="card-text"><strong>Alumno:</strong> {{ $informeDiario->alumno->alumno->nombre1 }} {{ $informeDiario->alumno->alumno->apellido1 }}</p>
            <p class="card-text"><strong>Observaciones:</strong> {{ $informeDiario->observaciones }}</p>
            <p class="card-text"><strong>Cuenta:</strong> {{ $informeDiario->user->name }}</p>
            @if ($informeDiario->imagen)
            <p class="card-text"><strong>Imagen:</strong></p>
            <img src="{{ asset('storage/' . $informeDiario->imagen) }}" alt="Imagen" class="img-fluid">
            @endif
            <a href="{{ route('informes_diarios.edit', $informeDiario->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('informes_diarios.destroy', $informeDiario->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection