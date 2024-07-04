@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Salas
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de salas
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Número</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($salas as $sala)
                    <tr>
                        <td>{{ $sala->id }}</td>
                        <td>{{ $sala->numero }}</td>
                        <td>
                            <a href="{{ route('salas.show', $sala->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('salas.edit', $sala->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('salas.destroy', $sala->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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
