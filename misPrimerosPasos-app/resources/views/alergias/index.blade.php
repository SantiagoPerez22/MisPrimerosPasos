@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Alergias</h1>
    <a href="{{ route('alergias.create') }}" class="btn btn-primary">Crear Alergia</a>
    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($alergias as $alergia)
        <tr>
            <td>{{ $alergia->nombre }}</td>
            <td>{{ $alergia->descripcion }}</td>
            <td>
                <a href="{{ route('alergias.show', $alergia->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('alergias.edit', $alergia->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('alergias.destroy', $alergia->id) }}" method="POST" style="display:inline-block;">
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
