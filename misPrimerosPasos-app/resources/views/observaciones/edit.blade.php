@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Observación</h1>
    <form action="{{ route('observaciones.update', $observacion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}" {{ $alumno->id == $observacion->id_alumno ? 'selected' : '' }}>{{ $alumno->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_clase">Clase</label>
            <select name="id_clase" class="form-control" required>
                @foreach($clases as $clase)
                <option value="{{ $clase->id }}" {{ $clase->id == $observacion->id_clase ? 'selected' : '' }}>{{ $clase->id }}</option>
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
@endsection
