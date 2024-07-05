@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Informe Semanal
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir un nuevo informe semanal
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('informes_semanales.store') }}" method="POST">
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
                    <label for="altura">Altura</label>
                    <input type="number" step="0.01" name="altura" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" step="0.01" name="peso" class="form-control" required>
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
