@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Informe Diario</h1>
    <form action="{{ route('informes_diarios.update', $informeDiario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_condicion" class="form-label">Condición</label>
            <select name="id_condicion" class="form-control" id="id_condicion" required>
                @foreach ($condiciones as $condicion)
                <option value="{{ $condicion->id }}" {{ $condicion->id == $informeDiario->id_condicion ? 'selected' : '' }}>{{ $condicion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_alumno" class="form-label">Alumno</label>
            <select name="id_alumno" class="form-control" id="id_alumno" required>
                @foreach ($tutoresAlumnos as $tutorAlumno)
                <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $informeDiario->id_alumno ? 'selected' : '' }}>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" id="observaciones" required>{{ $informeDiario->observaciones }}</textarea>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $informeDiario->fecha }}" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" name="imagen" class="form-control" id="imagen">
            @if ($informeDiario->imagen)
            <img src="{{ asset('storage/' . $informeDiario->imagen) }}" alt="Imagen" class="img-thumbnail mt-2" width="150">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
