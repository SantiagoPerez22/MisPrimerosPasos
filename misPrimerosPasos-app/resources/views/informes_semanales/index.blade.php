@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informes Semanales</h1>
    <a href="{{ route('informes_semanales.create') }}" class="btn btn-primary">Crear Informe Semanal</a>
    <table class="table">
        <thead>
        <tr>
            <th>Alumno</th>
            <th>Cuenta</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($informesSemanales as $informeSemanal)
        <tr>
            <td>{{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</td>
            <td>{{ $informeSemanal->user->name }}</td>
            <td>{{ $informeSemanal->altura }}</td>
            <td>{{ $informeSemanal->peso }}</td>
            <td>{{ $informeSemanal->fecha }}</td>
            <td>
                <a href="{{ route('informes_semanales.show', $informeSemanal->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('informes_semanales.edit', $informeSemanal->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('informes_semanales.destroy', $informeSemanal->id) }}" method="POST" style="display:inline-block;">
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
