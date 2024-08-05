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
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" required>
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
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="domicilio_id" class="form-label">Domicilio</label>
                    <select name="domicilio_id" class="form-control" id="domicilio_id" required>
                        <option value="">Selecciona un domicilio</option>
                        @foreach ($domicilios as $domicilio)
                        <option value="{{ $domicilio->id }}">{{ $domicilio->direccion }}, {{ $domicilio->ciudad }}, {{ $domicilio->estado }}, {{ $domicilio->codigo_postal }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
