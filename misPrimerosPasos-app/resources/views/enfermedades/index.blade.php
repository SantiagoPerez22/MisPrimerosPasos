@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Enfermedades</h1>
    <a href="{{ route('enfermedades.create') }}" class="btn btn-primary">Crear Enfermedad</a>
    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($enfermedades as $enfermedad)
        <tr>
            <td>{{ $enfermedad->nombre }}</td>
            <td>{{ $enfermedad->descripcion }}</td>
            <td>
                <a href="{{ route('enfermedades.show', $enfermedad->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('enfermedades.edit', $enfermedad->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('enfermedades.destroy', $enfermedad->id) }}" method="POST" style="display:inline-block;">
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
