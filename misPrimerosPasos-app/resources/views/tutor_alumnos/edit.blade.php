@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tutor Alumno</h1>
    <form action="{{ route('tutor_alumnos.update', $tutorAlumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}" @if($tutorAlumno->id_alumno == $persona->id) selected @endif>
                    {{ $persona->nombre1 }} {{ $persona->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_tutor1">Tutor 1</label>
            <select name="id_tutor1" class="form-control" required>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}" @if($tutorAlumno->id_tutor1 == $persona->id) selected @endif>
                    {{ $persona->nombre1 }} {{ $persona->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_tutor2">Tutor 2</label>
            <select name="id_tutor2" class="form-control">
                <option value="">N/A</option>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}" @if($tutorAlumno->id_tutor2 == $persona->id) selected @endif>
                    {{ $persona->nombre1 }} {{ $persona->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_nivel">Nivel</label>
            <select name="id_nivel" class="form-control" required>
                @foreach($niveles as $nivel)
                <option value="{{ $nivel->id }}" @if($tutorAlumno->id_nivel == $nivel->id) selected @endif>
                    {{ $nivel->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_matricula">Fecha de Matrícula</label>
            <input type="date" name="fecha_matricula" class="form-control" value="{{ $tutorAlumno->fecha_matricula }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
