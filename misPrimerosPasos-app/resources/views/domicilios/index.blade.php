<!-- resources/views/domicilios/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Domicilios</h1>
    <a href="{{ route('domicilios.create') }}" class="btn btn-primary">Agregar Domicilio</a>
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Código Postal</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($domicilios as $domicilio)
        <tr>
            <td>{{ $domicilio->id }}</td>
            <td>{{ $domicilio->direccion }}</td>
            <td>{{ $domicilio->ciudad }}</td>
            <td>{{ $domicilio->estado }}</td>
            <td>{{ $domicilio->codigo_postal }}</td>
            <td>
                <a href="{{ route('domicilios.show', $domicilio->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('domicilios.edit', $domicilio->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('domicilios.destroy', $domicilio->id) }}" method="POST" style="display:inline-block;">
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
