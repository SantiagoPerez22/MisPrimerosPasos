@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Enfermedad</h1>
    <form action="{{ route('enfermedades.update', $enfermedad->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $enfermedad->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" id="descripcion">{{ $enfermedad->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="id_alumno" class="form-label">ID Alumno</label>
            <input type="number" name="id_alumno" class="form-control" id="id_alumno" value="{{ $enfermedad->id_alumno }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
