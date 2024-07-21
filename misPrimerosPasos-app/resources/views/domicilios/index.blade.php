@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Domicilios
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de domicilios
            </h6>
            <a href="{{ route('domicilios.create') }}" class="btn btn-primary mt-2">Añadir Domicilio</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Región</th>
                        <th scope="col">Código Postal</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($domicilios as $domicilio)
                    <tr>
                        <th scope="row">{{ $domicilio->id }}</th>
                        <td>{{ $domicilio->direccion }}</td>
                        <td>{{ $domicilio->ciudad }}</td>
                        <td>{{ $domicilio->estado }}</td>
                        <td>{{ $domicilio->codigo_postal }}</td>
                        <td>
                            <a href="{{ route('domicilios.show', $domicilio->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('domicilios.edit', $domicilio->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('domicilios.destroy', $domicilio->id) }}" method="POST" style="display:inline;">
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
