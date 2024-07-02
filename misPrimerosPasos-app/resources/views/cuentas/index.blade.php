@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cuentas</h1>
    <a href="{{ route('cuentas.create') }}" class="btn btn-primary">Agregar Cuenta</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Persona</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cuentas as $cuenta)
        <tr>
            <td>{{ $cuenta->id }}</td>
            <td>{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</td>
            <td>{{ $cuenta->email }}</td>
            <td>{{ $cuenta->rol->nombre }}</td>
            <td>
                <a href="{{ route('cuentas.show', $cuenta->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('cuentas.edit', $cuenta->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('cuentas.destroy', $cuenta->id) }}" method="POST" style="display:inline;">
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
