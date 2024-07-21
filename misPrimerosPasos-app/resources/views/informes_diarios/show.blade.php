@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles del Informe Diario</h5>
        </div>
        <div class="card-body">
            <p><strong>Fecha:</strong> {{ $informeDiario->fecha }}</p>
            <p><strong>Condición:</strong> {{ $informeDiario->condicion->nombre }}</p>
            <p><strong>Párvulo:</strong> {{ $informeDiario->alumno->alumno->nombre1 }} {{ $informeDiario->alumno->alumno->apellido1 }}</p>
            <p><strong>Observaciones:</strong> {{ $informeDiario->observaciones }}</p>
            <p><strong>Cuenta:</strong> {{ $informeDiario->user->name }}</p>
            @if ($informeDiario->imagen)
            <p><strong>Imagen:</strong></p>
            <img src="{{ asset('storage/' . $informeDiario->imagen) }}" alt="Imagen" class="img-fluid">
            @endif
            <a href="{{ route('informes_diarios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection