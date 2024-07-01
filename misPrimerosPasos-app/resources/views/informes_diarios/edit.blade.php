@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Informe Diario</h1>
    <form action="{{ route('informes_diarios.update', $informeDiario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_condicion">Condición</label>
            <select name="id_condicion" class="form-control" required>
                @foreach($condiciones as $condicion)
                <option value="{{ $condicion->id }}" {{ $condicion->id == $informeDiario->id_condicion ? 'selected' : '' }}>{{ $condicion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}" {{ $alumno->id == $informeDiario->id_alumno ? 'selected' : '' }}>{{ $alumno->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $informeDiario->fecha }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
