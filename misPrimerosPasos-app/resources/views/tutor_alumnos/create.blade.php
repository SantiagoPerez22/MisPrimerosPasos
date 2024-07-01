@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Tutor Alumno</h1>
    <form action="{{ route('tutor_alumnos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_tutor1">Tutor 1</label>
            <select name="id_tutor1" class="form-control" required>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_tutor2">Tutor 2</label>
            <select name="id_tutor2" class="form-control">
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_nivel">Nivel</label>
            <select name="id_nivel" class="form-control" required>
                @foreach($niveles as $nivel)
                <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_matricula">Fecha de Matrícula</label>
            <input type="date" name="fecha_matricula" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
