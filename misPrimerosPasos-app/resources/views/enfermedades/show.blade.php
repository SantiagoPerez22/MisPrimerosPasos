@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Enfermedad</h5>
        </div>
        <div class="card-body">
            <p><strong>Tipo de enfermedad:</strong> {{ $enfermedad->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $enfermedad->descripcion }}</p>
            <p><strong>Párvulo:</strong> {{ $enfermedad->alumno->alumno->nombre1 }} {{ $enfermedad->alumno->alumno->apellido1 }}</p>
            <a href="{{ route('enfermedades.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
