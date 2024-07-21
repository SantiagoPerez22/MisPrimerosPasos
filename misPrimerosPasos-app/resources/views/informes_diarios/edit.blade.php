@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Informe Diario</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('informes_diarios.update', $informeDiario->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="id_condicion" class="form-label">Condición</label>
                    <select name="id_condicion" class="form-control @error('id_condicion') is-invalid @enderror" id="id_condicion" required>
                        @foreach ($condiciones as $condicion)
                        <option value="{{ $condicion->id }}" {{ $condicion->id == $informeDiario->id_condicion ? 'selected' : '' }}>{{ $condicion->nombre }}</option>
                        @endforeach
                    </select>
                    @error('id_condicion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="id_alumno" class="form-label">Párvulo</label>
                    <select name="id_alumno" class="form-control @error('id_alumno') is-invalid @enderror" id="id_alumno" required>
                        @foreach ($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}" {{ $tutorAlumno->id == $informeDiario->id_alumno ? 'selected' : '' }}>{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->apellido1 }}</option>
                        @endforeach
                    </select>
                    @error('id_alumno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" id="observaciones" required>{{ $informeDiario->observaciones }}</textarea>
                    @error('observaciones')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" id="fecha" value="{{ $informeDiario->fecha }}" required>
                    @error('fecha')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen">
                    @if ($informeDiario->imagen)
                    <img src="{{ asset('storage/' . $informeDiario->imagen) }}" alt="Imagen" class="img-thumbnail mt-2" width="150">
                    @endif
                    @error('imagen')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
