@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h5 class="card-title mb-0">
                    Observaciones
                </h5>
                <h6 class="card-subtitle text-muted">
                    Listado de observaciones en el sistema
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Clase (Nivel)</th>
                        <th>Párvulo</th>
                        <th>Cuenta</th>
                        <th>Observaciones</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($observaciones as $observacion)
                    <tr>
                        <td>{{ $observacion->clase->nivel->nombre }} | {{ $observacion->clase->fecha }}</td>
                        <td>{{ $observacion->alumno->alumno->nombre1 }} {{ $observacion->alumno->alumno->apellido1 }}</td>
                        <td>{{ $observacion->cuenta->name }}</td>
                        <td>{{ $observacion->observaciones }}</td>
                        <td>{{ $observacion->fecha }}</td>
                        <td>
                            <a href="{{ route('observaciones.show', $observacion->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('observaciones.edit', $observacion->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('observaciones.destroy', $observacion->id) }}" method="POST" style="display:inline-block;">
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
