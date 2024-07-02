@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Observación</h1>
    <form action="{{ route('observaciones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}">{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_clase">Clase</label>
            <select name="id_clase" class="form-control" required>
                @foreach($clases as $clase)
                <option value="{{ $clase->id }}">{{ $clase->sala->numero }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea name="observaciones" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
