@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Informes Semanales
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de informes semanales
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Párvulo</th>
                        <th scope="col">Cuenta</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($informesSemanales as $informeSemanal)
                    <tr>
                        <th scope="row">{{ $informeSemanal->id }}</th>
                        <td>{{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</td>
                        <td>{{ $informeSemanal->user->name }}</td>
                        <td>{{ $informeSemanal->altura }}</td>
                        <td>{{ $informeSemanal->peso }}</td>
                        <td>{{ $informeSemanal->fecha }}</td>
                        <td>
                            <a href="{{ route('informes_semanales.show', $informeSemanal->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('informes_semanales.edit', $informeSemanal->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('informes_semanales.destroy', $informeSemanal->id) }}" method="POST" style="display:inline;">
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
