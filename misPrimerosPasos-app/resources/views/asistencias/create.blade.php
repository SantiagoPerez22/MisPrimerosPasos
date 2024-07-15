@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Asistencia</h1>
    <form action="{{ route('asistencias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_clase" class="form-label">Clase</label>
            <select name="id_clase" class="form-control" id="id_clase" required>
                <option value="">Selecciona una clase</option>
                @foreach ($clases as $clase)
                <option value="{{ $clase->id }}">{{ $clase->id }}</option> {{-- Asegúrate de que el campo `nombre` exista en el modelo `Clase` --}}
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_alumno" class="form-label">Alumno</label>
            <select name="id_alumno" class="form-control" id="id_alumno" required>
                <option value="">Selecciona un alumno</option>
                @foreach ($tutoresAlumnos as $tutorAlumno)
                <option value="{{ $tutorAlumno->id }}">{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="asistencia" class="form-label">Asistencia</label>
            <select name="asistencia" class="form-control" id="asistencia" required>
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
