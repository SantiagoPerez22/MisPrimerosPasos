@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Informe Diario
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar información del informe diario
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('informes_diarios.update', $informeDiario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_condicion">Condición</label>
                    <select name="id_condicion" class="form-control" required>
                        @foreach($condiciones as $condicion)
                        <option value="{{ $condicion->id }}" {{ $informeDiario->id_condicion == $condicion->id ? 'selected' : '' }}>{{ $condicion->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}" {{ $informeDiario->id_alumno == $alumno->id ? 'selected' : '' }}>{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
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
    </div>
</div>
@endsection
