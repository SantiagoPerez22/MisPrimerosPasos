@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Salas</h1>
    <a href="{{ route('salas.create') }}" class="btn btn-primary mb-2">Agregar Sala</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($salas as $sala)
        <tr>
            <td>{{ $sala->id }}</td>
            <td>{{ $sala->numero }}</td>
            <td>
                <a href="{{ route('salas.show', $sala->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('salas.edit', $sala->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('salas.destroy', $sala->id) }}" method="POST" style="display:inline;">
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
