@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Enfermedad
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar los detalles de la enfermedad
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('enfermedades.update', $enfermedad->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $enfermedad->nombre }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control">{{ $enfermedad->descripcion }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}" {{ $enfermedad->id_alumno == $alumno->id ? 'selected' : '' }}>{{ $alumno->nombre1 }} {{ $alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection