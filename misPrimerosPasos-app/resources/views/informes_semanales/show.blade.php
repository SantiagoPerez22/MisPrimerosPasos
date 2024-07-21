@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Informe Semanal</h1>
    <div class="card border-0">
        <div class="card-header">
            Informe Semanal de {{ $informeSemanal->fecha }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Párvulo:</strong> {{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</p>
            <p class="card-text"><strong>Cuenta:</strong> {{ $informeSemanal->user->name }}</p>
            <p class="card-text"><strong>Altura:</strong> {{ $informeSemanal->altura }}</p>
            <p class="card-text"><strong>Peso:</strong> {{ $informeSemanal->peso }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $informeSemanal->fecha }}</p>
            <a href="{{ route('informes_semanales.index') }}" class="btn btn-primary btn-sm mt-3">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
