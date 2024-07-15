@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Enfermedad</h1>
    <div class="card">
        <div class="card-header">
            {{ $enfermedad->nombre }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Descripción:</strong> {{ $enfermedad->descripcion }}</p>
            <p class="card-text"><strong>ID Alumno:</strong> {{ $enfermedad->id_alumno }}</p>
            <a href="{{ route('enfermedades.edit', $enfermedad->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('enfermedades.destroy', $enfermedad->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
