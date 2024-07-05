@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Persona
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir una nueva persona al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nombre1">Primer Nombre</label>
                    <input type="text" name="nombre1" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nombre2">Segundo Nombre</label>
                    <input type="text" name="nombre2" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="apellido1">Primer Apellido</label>
                    <input type="text" name="apellido1" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" name="apellido2" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rut">RUT</label>
                    <input type="text" name="rut" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
