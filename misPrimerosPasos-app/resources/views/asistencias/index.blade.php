@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Asistencias
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de asistencias
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Clase</th>
                        <th scope="col">Párvulo</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Asistencia</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($asistencias as $asistencia)
                    <tr>
                        <td>{{ $asistencia->clase->id }}</td>
                        <td>{{ $asistencia->alumno->alumno->nombre1 }} {{ $asistencia->alumno->alumno->apellido1 }}</td>
                        <td>{{ $asistencia->cuenta->name }}</td>
                        <td>{{ $asistencia->asistencia }}</td>
                        <td>{{ $asistencia->fecha }}</td>
                        <td>
                            <a href="{{ route('asistencias.show', $asistencia->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
