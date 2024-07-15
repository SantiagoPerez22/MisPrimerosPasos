@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Informe Semanal</h1>
    <div class="card">
        <div class="card-header">
            Informe Semanal de {{ $informeSemanal->fecha }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Alumno:</strong> {{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</p>
            <p class="card-text"><strong>Cuenta:</strong> {{ $informeSemanal->user->name }}</p>
            <p class="card-text"><strong>Altura:</strong> {{ $informeSemanal->altura }}</p>
            <p class="card-text"><strong>Peso:</strong> {{ $informeSemanal->peso }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $informeSemanal->fecha }}</p>
            <a href="{{ route('informes_semanales.edit', $informeSemanal->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('informes_semanales.destroy', $informeSemanal->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
