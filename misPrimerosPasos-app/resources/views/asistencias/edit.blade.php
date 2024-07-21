@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Asistencia</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('asistencias.update', $asistencia->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_clase" class="form-label">Clase</label>
                    <select name="id_clase" class="form-control" id="id_clase" required>
                        @foreach ($clases as $clase)
                        <option value="{{ $clase->id }}" {{ $clase->id == $asistencia->id_clase ? 'selected' : '' }}>
                            {{ $clase->nombre }} {{-- Asegúrate de que el campo `nombre` exista en el modelo `Clase` --}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_alumno" class="form-label">Párvulo</label>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $asistencia->id_alumno ? 'selected' : '' }}>
                            {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="asistencia" class="form-label">Asistencia</label>
                    <select name="asistencia" class="form-control" id="asistencia" required>
                        <option value="si" {{ $asistencia->asistencia == 'si' ? 'selected' : '' }}>Sí</option>
                        <option value="no" {{ $asistencia->asistencia == 'no' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $asistencia->fecha }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
