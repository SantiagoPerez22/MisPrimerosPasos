@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Informe Semanal</h1>
    <div class="card">
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
