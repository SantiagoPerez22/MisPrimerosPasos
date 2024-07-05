@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Cuentas
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de las cuentas de usuario
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Persona</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cuentas as $cuenta)
                    <tr>
                        <td>{{ $cuenta->id }}</td>
                        <td>{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</td>
                        <td>{{ $cuenta->email }}</td>
                        <td>{{ $cuenta->rol->nombre }}</td>
                        <td>
                            <a href="{{ route('cuentas.show', $cuenta->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('cuentas.edit', $cuenta->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('cuentas.destroy', $cuenta->id) }}" method="POST" style="display:inline;">
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
