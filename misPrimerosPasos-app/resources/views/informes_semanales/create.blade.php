@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Informe Semanal
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir un nuevo informe semanal al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('informes_semanales.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_alumno" class="form-label">Alumno</label>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        <option value="">Selecciona un alumno</option>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}">{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="altura" class="form-label">Altura</label>
                    <input type="number" step="0.01" name="altura" class="form-control" id="altura" required>
                </div>
                <div class="form-group mb-3">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" step="0.01" name="peso" class="form-control" id="peso" required>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
