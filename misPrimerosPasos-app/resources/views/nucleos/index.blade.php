@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nucleos</h1>
    <a href="{{ route('nucleos.create') }}" class="btn btn-primary mb-2">Agregar Nucleo</a>
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
        @foreach($nucleos as $nucleo)
        <tr>
            <td>{{ $nucleo->id }}</td>
            <td>{{ $nucleo->nombre }}</td>
            <td>{{ $nucleo->descripcion }}</td>
            <td>
                <a href="{{ route('nucleos.show', $nucleo->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('nucleos.edit', $nucleo->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('nucleos.destroy', $nucleo->id) }}" method="POST" style="display:inline;">
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
