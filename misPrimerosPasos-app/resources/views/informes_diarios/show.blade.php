@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Informe Diario</h1>
    <div class="card">
        <div class="card-header">
            Informe Diario #{{ $informeDiario->id }}
        </div>
        <div class="card-body">
            <p><strong>Condición:</strong> {{ $informeDiario->id_condicion }}</p>
            <p><strong>Alumno:</strong> {{ $informeDiario->id_alumno }}</p>
            <p><strong>Fecha:</strong> {{ $informeDiario->fecha }}</p>
            <a href="{{ route('informes_diarios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
