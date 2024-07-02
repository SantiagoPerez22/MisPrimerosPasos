@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Informe Diario</h1>
    <form action="{{ route('informes_diarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_condicion">Condición</label>
            <select name="id_condicion" class="form-control" required>
                @foreach($condiciones as $condicion)
                <option value="{{ $condicion->id }}">{{ $condicion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}">{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
                @endforeach
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
