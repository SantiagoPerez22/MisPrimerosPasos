@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Personas</h1>
    <a href="{{ route('personas.create') }}" class="btn btn-primary">Crear Persona</a>
    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>RUT</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->nombre1 }} {{ $persona->nombre2 }}</td>
            <td>{{ $persona->apellido1 }} {{ $persona->apellido2 }}</td>
            <td>{{ $persona->edad }}</td>
            <td>{{ $persona->rut }}</td>
            <td>{{ $persona->email }}</td>
            <td>
                <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline-block;">
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
