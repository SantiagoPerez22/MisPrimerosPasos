@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Persona</h5>
        </div>
        <div class="card-body">
            <p><strong>Nombre completo:</strong> {{ $persona->nombre1 }} {{ $persona->nombre2 }} {{ $persona->apellido1 }} {{ $persona->apellido2 }}</p>
            <p><strong>Edad:</strong> {{ $persona->edad }}</p>
            <p><strong>RUT:</strong> {{ $persona->rut }}</p>
            <p><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
            <p><strong>Email:</strong> {{ $persona->email }}</p>
            <p><strong>Domicilio:</strong> {{ $persona->domicilio->direccion }}, {{ $persona->domicilio->ciudad }}, {{ $persona->domicilio->estado }}, {{ $persona->domicilio->codigo_postal }}</p>
            <a href="{{ route('personas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
