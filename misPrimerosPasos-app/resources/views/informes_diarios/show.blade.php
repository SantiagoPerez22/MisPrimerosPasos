@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalle del Informe Diario
            </h5>
            <h6 class="card-subtitle text-muted">
                Condición: {{ $informeDiario->condicion->nombre }}
            </h6>
        </div>
        <div class="card-body">
            <p class="card-text">Alumno: {{ $informeDiario->alumno->alumno->nombre1 }} {{ $informeDiario->alumno->alumno->apellido1 }}</p>
            <p class="card-text">Fecha: {{ $informeDiario->fecha }}</p>
            <a href="{{ route('informes_diarios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
