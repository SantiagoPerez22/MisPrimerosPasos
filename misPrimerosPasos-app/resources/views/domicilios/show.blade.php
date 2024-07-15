<!-- resources/views/domicilios/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Domicilio</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $domicilio->id }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $domicilio->direccion }}</td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td>{{ $domicilio->ciudad }}</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>{{ $domicilio->estado }}</td>
        </tr>
        <tr>
            <th>Código Postal</th>
            <td>{{ $domicilio->codigo_postal }}</td>
        </tr>
    </table>
    <a href="{{ route('domicilios.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
