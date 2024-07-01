@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ámbitos</h1>
    <a href="{{ route('ambitos.create') }}" class="btn btn-primary mb-2">Agregar Ámbito</a>
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
        @foreach($ambitos as $ambito)
        <tr>
            <td>{{ $ambito->id }}</td>
            <td>{{ $ambito->nombre }}</td>
            <td>{{ $ambito->descripcion }}</td>
            <td>
                <a href="{{ route('ambitos.show', $ambito->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('ambitos.edit', $ambito->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('ambitos.destroy', $ambito->id) }}" method="POST" style="display:inline;">
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
