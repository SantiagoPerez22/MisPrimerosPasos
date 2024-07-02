@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Enfermedad</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $enfermedad->nombre }}</h5>
            <p class="card-text">Descripción: {{ $enfermedad->descripcion }}</p>
            <p class="card-text">Alumno: {{ $enfermedad->alumno->alumno->nombre1 }} {{ $enfermedad->alumno->alumno->apellido1 }}</p>
            <a href="{{ route('enfermedades.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
