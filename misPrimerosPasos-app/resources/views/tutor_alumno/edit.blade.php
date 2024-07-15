@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Relación Tutor-Alumno</h1>
    <form action="{{ route('tutor_alumno.update', $tutorAlumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" id="id_alumno" class="form-control">
                @foreach($alumnos as $alumno)
                <option value="{{ $alumno->id }}" {{ $tutorAlumno->id_alumno == $alumno->id ? 'selected' : '' }}>
                    {{ $alumno->nombre1 }} {{ $alumno->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_tutor1">Tutor Principal</label>
            <select name="id_tutor1" id="id_tutor1" class="form-control">
                @foreach($tutores as $tutor)
                <option value="{{ $tutor->id }}" {{ $tutorAlumno->id_tutor1 == $tutor->id ? 'selected' : '' }}>
                    {{ $tutor->nombre1 }} {{ $tutor->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_tutor2">Tutor Secundario</label>
            <select name="id_tutor2" id="id_tutor2" class="form-control">
                <option value="">N/A</option>
                @foreach($tutores as $tutor)
                <option value="{{ $tutor->id }}" {{ $tutorAlumno->id_tutor2 == $tutor->id ? 'selected' : '' }}>
                    {{ $tutor->nombre1 }} {{ $tutor->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_nivel">Nivel</label>
            <select name="id_nivel" id="id_nivel" class="form-control">
                @foreach($niveles as $nivel)
                <option value="{{ $nivel->id }}" {{ $tutorAlumno->id_nivel == $nivel->id ? 'selected' : '' }}>
                    {{ $nivel->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_matricula">Fecha de Matrícula</label>
            <input type="date" name="fecha_matricula" id="fecha_matricula" class="form-control" value="{{ $tutorAlumno->fecha_matricula }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
