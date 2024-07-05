@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Asistencia
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar registro de asistencia de alumno en clase
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('asistencias.update', $asistencia->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}" {{ $asistencia->id_alumno == $alumno->id ? 'selected' : '' }}>{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_clase">Clase</label>
                    <select name="id_clase" class="form-control" required>
                        @foreach($clases as $clase)
                        <option value="{{ $clase->id }}" {{ $asistencia->id_clase == $clase->id ? 'selected' : '' }}>{{ $clase->sala->numero }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="asistencia">Asistencia</label>
                    <select name="asistencia" class="form-control" required>
                        <option value="si" {{ $asistencia->asistencia == 'si' ? 'selected' : '' }}>Sí</option>
                        <option value="no" {{ $asistencia->asistencia == 'no' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" class="form-control" value="{{ $asistencia->fecha }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
