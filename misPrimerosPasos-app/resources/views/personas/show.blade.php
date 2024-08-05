@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Persona</h5>
        </div>
        <div class="card-body">
            <p><strong>Nombre completo:</strong> {{ $persona->nombre1 }} {{ $persona->nombre2 }} {{ $persona->apellido1 }} {{ $persona->apellido2 }}</p>
            <p><strong>Edad:</strong>
                @if($persona->dias_desde_nacimiento >= 85)
                {{ $persona->edad }}
                @else
                <span class="text-warning">Advertencia: Edad menor a 85 días</span>
                @endif
            </p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $persona->fecha_nacimiento }}</p>
            <p><strong>RUT:</strong> {{ $persona->rut }}</p>
            <p><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
            <p><strong>Email:</strong> {{ $persona->email }}</p>
            <p><strong>Domicilio:</strong> {{ $persona->domicilio->direccion }}, {{ $persona->domicilio->ciudad }}, {{ $persona->domicilio->estado }}, {{ $persona->domicilio->codigo_postal }}</p>
            <a href="{{ route('personas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
