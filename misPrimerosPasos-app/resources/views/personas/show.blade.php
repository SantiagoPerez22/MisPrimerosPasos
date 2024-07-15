@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Persona</h1>
    <div class="card">
        <div class="card-header">
            {{ $persona->nombre1 }} {{ $persona->nombre2 }} {{ $persona->apellido1 }} {{ $persona->apellido2 }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Edad:</strong> {{ $persona->edad }}</p>
            <p class="card-text"><strong>RUT:</strong> {{ $persona->rut }}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $persona->email }}</p>
            <p class="card-text"><strong>Domicilio ID:</strong> {{ $persona->domicilio_id }}</p>
            <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
