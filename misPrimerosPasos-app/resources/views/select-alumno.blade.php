@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Seleccionar Párvulo</h5>
            <h6 class="card-subtitle text-muted">Seleccionar párvulo para exportar sus datos</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('exportar.pdf') }}" method="GET">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_alumno">Seleccionar Párvulo:</label>
                    <select name="id_alumno" id="id_alumno" class="form-control" required>
                        @foreach($tutoresAlumnos as $tutorAlumno)
                        <option value="{{ $tutorAlumno->id }}">{{ $tutorAlumno->alumno->nombre1 }} {{ $tutorAlumno->alumno->nombre2 }} {{ $tutorAlumno->alumno->apellido1 }} {{ $tutorAlumno->alumno->apellido2 }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Exportar a PDF</button>
            </form>
        </div>
    </div>
</div>
@endsection
