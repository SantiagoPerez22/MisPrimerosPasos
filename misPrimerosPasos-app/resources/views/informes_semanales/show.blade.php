@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalle del Informe Semanal
            </h5>
            <h6 class="card-subtitle text-muted">
                Detalles específicos del informe semanal
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Alumno: {{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</h5>
            <p class="card-text">Altura: {{ $informeSemanal->altura }}</p>
            <p class="card-text">Peso: {{ $informeSemanal->peso }}</p>
            <p class="card-text">Fecha: {{ $informeSemanal->fecha }}</p>
            <a href="{{ route('informes_semanales.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
