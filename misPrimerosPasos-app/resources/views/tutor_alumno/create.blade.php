@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Enfermedad</h1>
    <form action="{{ route('enfermedades.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="id_alumno" class="form-label">ID Alumno</label>
            <input type="number" name="id_alumno" class="form-control" id="id_alumno" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
