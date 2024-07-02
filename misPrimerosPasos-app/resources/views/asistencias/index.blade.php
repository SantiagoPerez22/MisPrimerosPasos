@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Asistencias</h1>
    <a href="{{ route('asistencias.create') }}" class="btn btn-primary">Agregar Asistencia</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Clase</th>
            <th>Asistencia</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($asistencias as $asistencia)
        <tr>
            <td>{{ $asistencia->id }}</td>
            <td>{{ $asistencia->alumno->alumno->nombre1 }} {{ $asistencia->alumno->alumno->apellido1 }}</td>
            <td>{{ $asistencia->clase->sala->numero }}</td>
            <td>{{ $asistencia->asistencia }}</td>
            <td>{{ $asistencia->fecha }}</td>
            <td>
                <a href="{{ route('asistencias.show', $asistencia->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline;">
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
