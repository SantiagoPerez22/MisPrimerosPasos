@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Informe Semanal</h1>
    <div class="card">
        <div class="card-header">
            Informe Semanal #{{ $informeSemanal->id }}
        </div>
        <div class="card-body">
            <p><strong>Alumno:</strong> {{ $informeSemanal->id_alumno }}</p>
            <p><strong>Altura:</strong> {{ $informeSemanal->altura }}</p>
            <p><strong>Peso:</strong> {{ $informeSemanal->peso }}</p>
            <p><strong>Fecha:</strong> {{ $informeSemanal->fecha }}</p>
            <a href="{{ route('informes_semanales.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
