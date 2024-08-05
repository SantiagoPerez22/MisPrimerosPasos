@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Observación</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('observaciones.update', $observacion->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_clase" class="form-label">Clase (Nivel)</label>
                    <select name="id_clase" class="form-control" id="id_clase" required>
                        @foreach ($clases as $clase)
                        <option value="{{ $clase->id }}" {{ $clase->id == $observacion->id_clase ? 'selected' : '' }}>{{ $clase->nivel->nombre }} | {{ $clase->fecha }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_alumno" class="form-label">Párvulo</label>
                    <select name="id_alumno" class="form-control" id="id_alumno" required>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $observacion->id_alumno ? 'selected' : '' }}>
                            {{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control" id="observaciones" required>{{ $observacion->observaciones }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen">
                    @if ($informeDiario->imagen)
                    <img src="{{ asset('storage/' . $observacion->imagen) }}" alt="Imagen" class="img-thumbnail mt-2" width="150">
                    @endif
                    @error('imagen')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $observacion->fecha }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
