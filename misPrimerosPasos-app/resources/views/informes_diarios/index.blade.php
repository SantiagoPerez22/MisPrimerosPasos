@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Informes Diarios
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de informes diarios
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Condición</th>
                        <th scope="col">Párvulo</th>
                        <th scope="col">Cuenta</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($informesDiarios as $informeDiario)
                    <tr>
                        <th scope="row">{{ $informeDiario->id }}</th>
                        <td>{{ $informeDiario->condicion->nombre }}</td>
                        <td>{{ $informeDiario->alumno->alumno->nombre1 }} {{ $informeDiario->alumno->alumno->apellido1 }}</td>
                        <td>{{ $informeDiario->user->name }}</td>
                        <td>{{ $informeDiario->fecha }}</td>
                        <td>
                            <a href="{{ route('informes_diarios.show', $informeDiario->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('informes_diarios.edit', $informeDiario->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('informes_diarios.destroy', $informeDiario->id) }}" method="POST" style="display:inline;">
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
