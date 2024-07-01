@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Roles</h1>
    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-2">Agregar Rol</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $rol)
        <tr>
            <td>{{ $rol->id }}</td>
            <td>{{ $rol->nombre }}</td>
            <td>{{ $rol->descripcion }}</td>
            <td>
                <a href="{{ route('roles.show', $rol->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
