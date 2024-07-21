@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Ámbitos
            </h5>
            <h6 class="card-subtitle text-muted">
                Listado de ámbitos en el sistema
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del ámbito</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ambitos as $ambito)
                        <tr>
                            <td>{{ $ambito->id }}</td>
                            <td>{{ $ambito->nombre }}</td>
                            <td>{{ $ambito->descripcion }}</td>
                            <td>
                                <a href="{{ route('ambitos.show', $ambito->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('ambitos.edit', $ambito->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('ambitos.destroy', $ambito->id) }}" method="POST" style="display:inline;">
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