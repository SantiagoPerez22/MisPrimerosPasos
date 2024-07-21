@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Observación
            </h5>
            <h6 class="card-subtitle text-muted">
                Registrar nueva observación
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('observaciones.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_clase" class="form-label">Clase (Nivel)</label>
                    <select name="id_clase" class="form-control" id="id_clase" required>
                        <option value="">Selecciona una clase</option>
                        @foreach ($clases as $clase)
                        <option value="{{ $clase->id }}">{{ $clase->nivel->nombre }} | {{ $clase->fecha }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_alumno" class="form-label">Párvulo</label>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        <option value="">Seleccionar párvulo</option>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}">{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control" id="observaciones" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('fecha');
        const today = new Date().toISOString().split('T')[0];
        dateInput.value = today;
    });
</script>
@endpush