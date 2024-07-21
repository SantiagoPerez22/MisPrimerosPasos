@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar relación Tutor-Párvulo</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('tutor_alumno.update', $tutorAlumno->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_alumno" class="form-label">Párvulo</label>
                    <select name="id_alumno" id="id_alumno" class="form-control">
                        @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}" {{ $tutorAlumno->id_alumno == $alumno->id ? 'selected' : '' }}>
                            {{ $alumno->nombre1 }} {{ $alumno->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_tutor1" class="form-label">Tutor Principal</label>
                    <select name="id_tutor1" id="id_tutor1" class="form-control">
                        @foreach($tutores as $tutor)
                        <option value="{{ $tutor->id }}" {{ $tutorAlumno->id_tutor1 == $tutor->id ? 'selected' : '' }}>
                            {{ $tutor->nombre1 }} {{ $tutor->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_tutor2" class="form-label">Tutor Secundario</label>
                    <select name="id_tutor2" id="id_tutor2" class="form-control">
                        <option value="">N/A</option>
                        @foreach($tutores as $tutor)
                        <option value="{{ $tutor->id }}" {{ $tutorAlumno->id_tutor2 == $tutor->id ? 'selected' : '' }}>
                            {{ $tutor->nombre1 }} {{ $tutor->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_nivel" class="form-label">Nivel</label>
                    <select name="id_nivel" id="id_nivel" class="form-control">
                        @foreach($niveles as $nivel)
                        <option value="{{ $nivel->id }}" {{ $tutorAlumno->id_nivel == $nivel->id ? 'selected' : '' }}>
                            {{ $nivel->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fecha_matricula" class="form-label">Fecha de Matrícula</label>
                    <input type="date" name="fecha_matricula" id="fecha_matricula" class="form-control" value="{{ $tutorAlumno->fecha_matricula }}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
