@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Alergia
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar detalles de la alergia
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('alergias.update', $alergia->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $alergia->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control">{{ $alergia->descripcion }}</textarea>
                </div>
                <div class="form-group">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" class="form-control" required>
                        @foreach($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $alergia->id_alumno ? 'selected' : '' }}>
                            {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection