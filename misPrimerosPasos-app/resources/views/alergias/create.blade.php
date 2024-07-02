@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Alergia</h1>
    <form action="{{ route('alergias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="id_alumno">Alumno</label>
            <select name="id_alumno" class="form-control" required>
                @foreach($tutoresAlumnos as $tutorAlumno)
                <option value="{{ $tutorAlumno->id }}">
                    {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
