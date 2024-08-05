@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Enfermedades
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de enfermedades
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Párvulo</th>
                        <th scope="col">Tipo de enfermedad</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($enfermedades as $enfermedad)
                    <tr>
                        <td>{{ $enfermedad->alumno->alumno->nombre1 }} {{ $enfermedad->alumno->alumno->apellido1 }}</td>
                        <td>{{ $enfermedad->nombre }}</td>
                        <td>{{ $enfermedad->descripcion }}</td>
                        <td>
                            <a href="{{ route('enfermedades.show', $enfermedad->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('enfermedades.edit', $enfermedad->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('enfermedades.destroy', $enfermedad->id) }}" method="POST" style="display:inline;">
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
