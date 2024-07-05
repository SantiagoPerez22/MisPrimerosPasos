@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Observación
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar detalles de la observación
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('observaciones.update', $observacion->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}" {{ $observacion->id_alumno == $alumno->id ? 'selected' : '' }}>{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_clase">Clase</label>
                    <select name="id_clase" class="form-control" required>
                        @foreach($clases as $clase)
                        <option value="{{ $clase->id }}" {{ $observacion->id_clase == $clase->id ? 'selected' : '' }}>{{ $clase->sala->numero }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea name="observaciones" class="form-control" required>{{ $observacion->observaciones }}</textarea>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" class="form-control" value="{{ $observacion->fecha }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
