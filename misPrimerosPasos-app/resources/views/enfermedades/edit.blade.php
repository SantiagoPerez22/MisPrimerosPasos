@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Enfermedad</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('enfermedades.update', $enfermedad->id) }}" method="POST">
                @csrf
                @method('PUT')
                <p>
                    <strong>Tipo de enfermedad:</strong>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $enfermedad->nombre }}" required>
                </p>
                <p>
                    <strong>Descripción:</strong>
                    <textarea name="descripcion" class="form-control" id="descripcion">{{ $enfermedad->descripcion }}</textarea>
                </p>
                <p>
                    <strong>Párvulo:</strong>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $enfermedad->id_alumno ? 'selected' : '' }}>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </p>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
