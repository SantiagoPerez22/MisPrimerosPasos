@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Informe Semanal</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('informes_semanales.update', $informeSemanal->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="id_alumno" class="form-label">Párvulo</label>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $informeSemanal->id_alumno ? 'selected' : '' }}>
                            {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="altura" class="form-label">Altura</label>
                    <input type="number" step="0.01" name="altura" class="form-control" id="altura" value="{{ $informeSemanal->altura }}" required>
                </div>

                <div class="mb-3">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" step="0.01" name="peso" class="form-control" id="peso" value="{{ $informeSemanal->peso }}" required>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $informeSemanal->fecha }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
