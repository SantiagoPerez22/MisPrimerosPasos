<!-- resources/views/niveles/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Nivel</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $nivel->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $nivel->nombre }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $nivel->descripcion }}</td>
        </tr>
    </table>
    <a href="{{ route('niveles.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
