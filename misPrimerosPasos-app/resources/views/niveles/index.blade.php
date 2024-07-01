@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Niveles</h1>
    <a href="{{ route('niveles.create') }}" class="btn btn-primary mb-2">Agregar Nivel</a>
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
        @foreach($niveles as $nivel)
        <tr>
            <td>{{ $nivel->id }}</td>
            <td>{{ $nivel->nombre }}</td>
            <td>{{ $nivel->descripcion }}</td>
            <td>
                <a href="{{ route('niveles.show', $nivel->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('niveles.edit', $nivel->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('niveles.destroy', $nivel->id) }}" method="POST" style="display:inline;">
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



