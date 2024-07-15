@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Alergia</h1>
    <div class="card">
        <div class="card-header">
            {{ $alergia->nombre }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Descripción:</strong> {{ $alergia->descripcion }}</p>
            <p class="card-text"><strong>ID Alumno:</strong> {{ $alergia->id_alumno }}</p>
            <a href="{{ route('alergias.edit', $alergia->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('alergias.destroy', $alergia->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
