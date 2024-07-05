@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Card Element -->
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Alergias
            </h5>
            <h6 class="card-subtitle text-muted">
                Listado de alergias registradas
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alergias as $alergia)
                    <tr>
                        <th scope="row">{{ $alergia->id }}</th>
                        <td>{{ $alergia->nombre }}</td>
                        <td>{{ $alergia->descripcion }}</td>
                        <td>{{ $alergia->tutorAlumno ? $alergia->tutorAlumno->alumno->nombre1 . ' ' . $alergia->tutorAlumno->alumno->apellido1 : 'No asignado' }}</td>
                        <td>
                            <a href="{{ route('alergias.show', $alergia->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('alergias.edit', $alergia->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('alergias.destroy', $alergia->id) }}" method="POST" style="display:inline;">
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