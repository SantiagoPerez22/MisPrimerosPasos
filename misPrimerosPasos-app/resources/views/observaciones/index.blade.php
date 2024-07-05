@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Observaciones
            </h5>
            <h6 class="card-subtitle text-muted">
                Lista de observaciones registradas
            </h6>
        </div>
        <div class="card-body">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Alumno</th>
                        <th>Clase</th>
                        <th>Observaciones</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($observaciones as $observacion)
                    <tr>
                        <td>{{ $observacion->id }}</td>
                        <td>{{ $observacion->alumno->alumno->nombre1 }} {{ $observacion->alumno->alumno->apellido1 }}</td>
                        <td>{{ $observacion->clase->sala->numero }}</td>
                        <td>{{ $observacion->observaciones }}</td>
                        <td>{{ $observacion->fecha }}</td>
                        <td>
                            <a href="{{ route('observaciones.show', $observacion->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('observaciones.edit', $observacion->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('observaciones.destroy', $observacion->id) }}" method="POST" style="display:inline;">
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
@endsection
