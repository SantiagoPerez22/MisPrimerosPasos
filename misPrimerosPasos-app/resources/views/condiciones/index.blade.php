@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Condiciones</h1>
    <a href="{{ route('condiciones.create') }}" class="btn btn-primary mb-2">Agregar Condición</a>
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
        @foreach($condiciones as $condicion)
        <tr>
            <td>{{ $condicion->id }}</td>
            <td>{{ $condicion->nombre }}</td>
            <td>{{ $condicion->descripcion }}</td>
            <td>
                <a href="{{ route('condiciones.show', $condicion->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('condiciones.edit', $condicion->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('condiciones.destroy', $condicion->id) }}" method="POST" style="display:inline;">
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
