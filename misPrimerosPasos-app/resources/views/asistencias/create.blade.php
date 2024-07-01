@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Asistencia</h1>
    <form action="{{ route('asistencias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}">{{ $alumno->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_clase">Clase</label>
            <select name="id_clase" class="form-control" required>
                @foreach($clases as $clase)
                <option value="{{ $clase->id }}">{{ $clase->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="asistencia">Asistencia</label>
            <select name="asistencia" class="form-control" required>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
