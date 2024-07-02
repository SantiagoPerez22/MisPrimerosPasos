@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Informe Diario</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Condición: {{ $informeDiario->condicion->nombre }}</h5>
            <p class="card-text">Alumno: {{ $informeDiario->alumno->alumno->nombre1 }} {{ $informeDiario->alumno->alumno->apellido1 }}</p>
            <p class="card-text">Fecha: {{ $informeDiario->fecha }}</p>
            <a href="{{ route('informes_diarios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
