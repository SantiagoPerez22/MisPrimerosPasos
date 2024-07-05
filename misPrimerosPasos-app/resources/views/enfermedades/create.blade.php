@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Enfermedad
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir una nueva enfermedad al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('enfermedades.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}">{{ $alumno->nombre1 }} {{ $alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection