@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Informe Semanal</h1>
    <form action="{{ route('informes_semanales.update', $informeSemanal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}" {{ $informeSemanal->id_alumno == $alumno->id ? 'selected' : '' }}>{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="altura">Altura</label>
            <input type="number" step="0.01" name="altura" class="form-control" value="{{ $informeSemanal->altura }}" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="number" step="0.01" name="peso" class="form-control" value="{{ $informeSemanal->peso }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $informeSemanal->fecha }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
