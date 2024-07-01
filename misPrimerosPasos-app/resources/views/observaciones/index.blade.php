@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Observaciones</h1>
    <a href="{{ route('observaciones.create') }}" class="btn btn-primary mb-2">Agregar Observación</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Clase</th>
            <th>Observaciones</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($observaciones as $observacion)
        <tr>
            <td>{{ $observacion->id }}</td>
            <td>{{ $observacion->id_alumno }}</td>
            <td>{{ $observacion->id_clase }}</td>
            <td>{{ $observacion->observaciones }}</td>
            <td>{{ $observacion->fecha }}</td>
            <td>
                <a href="{{ route('observaciones.show', $observacion->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('observaciones.edit', $observacion->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('observaciones.destroy', $observacion->id) }}" method="POST" style="display:inline;">
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
