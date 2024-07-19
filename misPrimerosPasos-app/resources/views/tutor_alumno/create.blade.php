@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Crear Tutor-Alumno</h5>
            <h6 class="card-subtitle text-muted">Añadir una nueva relación tutor-alumno al sistema</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('tutor_alumno.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_alumno" class="form-label">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        <option value="">Selecciona un alumno</option>
                        @foreach ($alumnos as $alumno)
                        <option value="{{ $alumno->id }}">{{ $alumno->nombre1 }} {{ $alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_tutor1" class="form-label">Tutor 1</label>
                    <select name="id_tutor1" class="form-control" required>
                        <option value="">Selecciona un tutor</option>
                        @foreach ($tutores as $tutor)
                        <option value="{{ $tutor->id }}">{{ $tutor->nombre1 }} {{ $tutor->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_tutor2" class="form-label">Tutor 2 (opcional)</label>
                    <select name="id_tutor2" class="form-control">
                        <option value="">Selecciona un tutor</option>
                        @foreach ($tutores as $tutor)
                        <option value="{{ $tutor->id }}">{{ $tutor->nombre1 }} {{ $tutor->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_nivel" class="form-label">Nivel</label>
                    <select name="id_nivel" class="form-control" required>
                        <option value="">Selecciona un nivel</option>
                        @foreach ($niveles as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha_matricula" class="form-label">Fecha de Matrícula</label>
                    <input type="date" name="fecha_matricula" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
