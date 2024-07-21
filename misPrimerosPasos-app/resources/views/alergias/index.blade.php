@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Alergias
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de alergias
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Tipo de alergia</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Párvulo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alergias as $alergia)
                    <tr>
                        <td>{{ $alergia->nombre }}</td>
                        <td>{{ $alergia->descripcion }}</td>
                        <td>{{ $alergia->alumno->alumno->nombre1 }} {{ $alergia->alumno->alumno->apellido1 }}</td>
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
