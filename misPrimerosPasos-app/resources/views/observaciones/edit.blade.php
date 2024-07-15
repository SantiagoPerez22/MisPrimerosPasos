@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Observación</h1>
    <form action="{{ route('observaciones.update', $observacion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_clase" class="form-label">Clase (Nivel)</label>
            <select name="id_clase" class="form-control" id="id_clase" required>
                @foreach ($clases as $clase)
                <option value="{{ $clase->id }}" {{ $clase->id == $observacion->id_clase ? 'selected' : '' }}>{{ $clase->nivel->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_alumno" class="form-label">Alumno</label>
            <select name="id_alumno" class="form-control" id="id_alumno" required>
                @foreach ($tutoresAlumnos as $tutorAlumno)
                <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $observacion->id_alumno ? 'selected' : '' }}>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" id="observaciones" required>{{ $observacion->observaciones }}</textarea>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $observacion->fecha }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
