@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Asistencias
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de registros de asistencia
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Clase</th>
                            <th>Asistencia</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($asistencias as $asistencia)
                        <tr>
                            <td>{{ $asistencia->id }}</td>
                            <td>{{ $asistencia->alumno->alumno->nombre1 }} {{ $asistencia->alumno->alumno->apellido1 }}</td>
                            <td>{{ $asistencia->clase->sala->numero }}</td>
                            <td>{{ $asistencia->asistencia }}</td>
                            <td>{{ $asistencia->fecha }}</td>
                            <td>
                                <a href="{{ route('asistencias.show', $asistencia->id) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
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
