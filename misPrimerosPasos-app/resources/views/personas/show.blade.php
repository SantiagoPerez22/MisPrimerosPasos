@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalles de la Persona
            </h5>
            <h6 class="card-subtitle text-muted">
                Información detallada de la persona #{{ $persona->id }}
            </h6>
        </div>
        <div class="card-body">
            <p><strong>Nombre 1:</strong> {{ $persona->nombre1 }}</p>
            <p><strong>Nombre 2:</strong> {{ $persona->nombre2 }}</p>
            <p><strong>Apellido 1:</strong> {{ $persona->apellido1 }}</p>
            <p><strong>Apellido 2:</strong> {{ $persona->apellido2 }}</p>
            <p><strong>Edad:</strong> {{ $persona->edad }}</p>
            <p><strong>RUT:</strong> {{ $persona->rut }}</p>
            <p><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
            <p><strong>Email:</strong> {{ $persona->email }}</p>
            <a href="{{ route('personas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
