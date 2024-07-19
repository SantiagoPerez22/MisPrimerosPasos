@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Informe Diario
            </h5>
            <h6 class="card-subtitle text-muted">
                Registrar un nuevo informe diario
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('informes_diarios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_condicion" class="form-label">Condición</label>
                    <select name="id_condicion" class="form-control" id="id_condicion" required>
                        <option value="">Selecciona una condición</option>
                        @foreach ($condiciones as $condicion)
                        <option value="{{ $condicion->id }}">{{ $condicion->nombre }}</option>
                        @endforeach
                    </select>
                </div>
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
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control" id="observaciones" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" required>
                </div>
                <div class="form-group mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control" id="imagen">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
