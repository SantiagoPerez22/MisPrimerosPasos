@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Persona</h1>
    <form action="{{ route('personas.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre1" class="form-label">Primer Nombre</label>
            <input type="text" name="nombre1" class="form-control" id="nombre1" value="{{ $persona->nombre1 }}" required>
        </div>
        <div class="mb-3">
            <label for="nombre2" class="form-label">Segundo Nombre</label>
            <input type="text" name="nombre2" class="form-control" id="nombre2" value="{{ $persona->nombre2 }}">
        </div>
        <div class="mb-3">
            <label for="apellido1" class="form-label">Primer Apellido</label>
            <input type="text" name="apellido1" class="form-control" id="apellido1" value="{{ $persona->apellido1 }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido2" class="form-label">Segundo Apellido</label>
            <input type="text" name="apellido2" class="form-control" id="apellido2" value="{{ $persona->apellido2 }}">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control" id="edad" value="{{ $persona->edad }}" required>
        </div>
        <div class="mb-3">
            <label for="rut" class="form-label">RUT</label>
            <input type="text" name="rut" class="form-control" id="rut" value="{{ $persona->rut }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" id="telefono" value="{{ $persona->telefono }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $persona->email }}" required>
        </div>
        <div class="mb-3">
            <label for="domicilio_id" class="form-label">Domicilio ID</label>
            <input type="number" name="domicilio_id" class="form-control" id="domicilio_id" value="{{ $persona->domicilio_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
