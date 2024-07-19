@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Seleccionar Alumno
            </h5>
            <h6 class="card-subtitle text-muted">
                Seleccione un alumno para exportar sus datos
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('exportar.pdf') }}" method="GET">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_alumno">Seleccione un Alumno:</label>
                    <select name="id_alumno" id="id_alumno" class="form-control" required>
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}">{{ $alumno->nombre1 }} {{ $alumno->nombre2 }} {{ $alumno->apellido1 }} {{ $alumno->apellido2 }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Exportar a PDF</button>
            </form>
        </div>
    </div>
</div>
@endsection
