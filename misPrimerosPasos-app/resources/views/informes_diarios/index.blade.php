@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informes Diarios</h1>
    <a href="{{ route('informes_diarios.create') }}" class="btn btn-primary">Crear Informe Diario</a>
    <table class="table">
        <thead>
        <tr>
            <th>Condición</th>
            <th>Alumno</th>
            <th>Cuenta</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($informesDiarios as $informeDiario)
        <tr>
            <td>{{ $informeDiario->condicion->nombre }}</td>
            <td>{{ $informeDiario->alumno->alumno->nombre1 }} {{ $informeDiario->alumno->alumno->apellido1 }}</td>
            <td>{{ $informeDiario->user->name }}</td>
            <td>{{ $informeDiario->fecha }}</td>
            <td>
                <a href="{{ route('informes_diarios.show', $informeDiario->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('informes_diarios.edit', $informeDiario->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('informes_diarios.destroy', $informeDiario->id) }}" method="POST" style="display:inline-block;">
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
