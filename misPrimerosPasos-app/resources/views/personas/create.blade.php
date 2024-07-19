@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Persona
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir una nueva persona al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nombre1" class="form-label">Primer Nombre</label>
                    <input type="text" name="nombre1" class="form-control" id="nombre1" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nombre2" class="form-label">Segundo Nombre</label>
                    <input type="text" name="nombre2" class="form-control" id="nombre2">
                </div>
                <div class="form-group mb-3">
                    <label for="apellido1" class="form-label">Primer Apellido</label>
                    <input type="text" name="apellido1" class="form-control" id="apellido1" required>
                </div>
                <div class="form-group mb-3">
                    <label for="apellido2" class="form-label">Segundo Apellido</label>
                    <input type="text" name="apellido2" class="form-control" id="apellido2">
                </div>
                <div class="form-group mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" name="edad" class="form-control" id="edad" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rut" class="form-label">RUT</label>
                    <input type="text" name="rut" class="form-control" id="rut" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="domicilio_id" class="form-label">Domicilio ID</label>
                    <input type="number" name="domicilio_id" class="form-control" id="domicilio_id">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
