@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Enfermedad</h1>
    <div class="card">
        <div class="card-header">
            Enfermedad #{{ $enfermedad->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $enfermedad->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $enfermedad->descripcion }}</p>
            <p><strong>Alumno:</strong> {{ $enfermedad->id_alumno }}</p>
            <a href="{{ route('enfermedades.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
