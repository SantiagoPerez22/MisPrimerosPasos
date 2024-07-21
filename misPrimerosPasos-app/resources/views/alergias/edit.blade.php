@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Alergia</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('alergias.update', $alergia->id) }}" method="POST">
                @csrf
                @method('PUT')
                <p>
                    <strong>Tipo de alergia:</strong>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $alergia->nombre }}" required>
                </p>
                <p>
                    <strong>Descripción:</strong>
                    <textarea name="descripcion" class="form-control" id="descripcion">{{ $alergia->descripcion }}</textarea>
                </p>
                <p>
                    <strong>Párvulo:</strong>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $alergia->id_alumno ? 'selected' : '' }}>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                </p>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
