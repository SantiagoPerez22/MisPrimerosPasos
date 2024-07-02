@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Clases</h1>
    <a href="{{ route('clases.create') }}" class="btn btn-primary">Agregar Clase</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ámbito</th>
            <th>Núcleo</th>
            <th>Nivel</th>
            <th>Profesor</th>
            <th>Asistente 1</th>
            <th>Asistente 2</th>
            <th>Sala</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clases as $clase)
        <tr>
            <td>{{ $clase->id }}</td>
            <td>{{ $clase->ambito->nombre }}</td>
            <td>{{ $clase->nucleo->nombre }}</td>
            <td>{{ $clase->nivel->nombre }}</td>
            <td>{{ $clase->profesor->persona->nombre1 }} {{ $clase->profesor->persona->apellido1 }}</td>
            <td>{{ $clase->asistente1 ? $clase->asistente1->persona->nombre1 . ' ' . $clase->asistente1->persona->apellido1 : '-' }}</td>
            <td>{{ $clase->asistente2 ? $clase->asistente2->persona->nombre1 . ' ' . $clase->asistente2->persona->apellido1 : '-' }}</td>
            <td>{{ $clase->sala->numero }}</td>
            <td>{{ $clase->fecha }}</td>
            <td>
                <a href="{{ route('clases.show', $clase->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('clases.edit', $clase->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('clases.destroy', $clase->id) }}" method="POST" style="display:inline;">
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
