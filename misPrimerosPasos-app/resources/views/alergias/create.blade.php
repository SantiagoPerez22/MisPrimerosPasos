@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Alergia
            </h5>
            <h6 class="card-subtitle text-muted">
                Registrar una nueva alergia
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('alergias.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="id_alumno" class="form-label">ID Alumno</label>
                    <input type="number" name="id_alumno" class="form-control" id="id_alumno" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
