@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Enfermedades
            </h5>
            <h6 class="card-subtitle text-muted">
                Listado de enfermedades registradas
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Alumno</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enfermedades as $enfermedad)
                    <tr>
                        <td>{{ $enfermedad->id }}</td>
                        <td>{{ $enfermedad->nombre }}</td>
                        <td>{{ $enfermedad->descripcion }}</td>
                        <td>{{ $enfermedad->alumno->nombre1 }} {{ $enfermedad->alumno->apellido1 }}</td>
                        <td>
                            <a href="{{ route('enfermedades.show', $enfermedad->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('enfermedades.edit', $enfermedad->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('enfermedades.destroy', $enfermedad->id) }}" method="POST" style="display:inline;">
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