@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Informe Diario
            </h5>
            <h6 class="card-subtitle text-muted">
                Agregar un nuevo informe diario
            </h6>
        </div>
        <div class="card-body">
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
    </div>
</div>
@endsection
