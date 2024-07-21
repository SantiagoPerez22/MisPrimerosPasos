@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Persona</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('personas.update', $persona->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre1" class="form-label">Primer Nombre:</label>
                    <input type="text" name="nombre1" class="form-control" value="{{ old('nombre1', $persona->nombre1) }}" required>
                </div>
                <div class="mb-3">
                    <label for="nombre2" class="form-label">Segundo Nombre:</label>
                    <input type="text" name="nombre2" class="form-control" value="{{ old('nombre2', $persona->nombre2) }}">
                </div>
                <div class="mb-3">
                    <label for="apellido1" class="form-label">Primer Apellido:</label>
                    <input type="text" name="apellido1" class="form-control" value="{{ old('apellido1', $persona->apellido1) }}" required>
                </div>
                <div class="mb-3">
                    <label for="apellido2" class="form-label">Segundo Apellido:</label>
                    <input type="text" name="apellido2" class="form-control" value="{{ old('apellido2', $persona->apellido2) }}">
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="number" name="edad" class="form-control" value="{{ old('edad', $persona->edad) }}" required>
                </div>
                <div class="mb-3">
                    <label for="rut" class="form-label">RUT:</label>
                    <input type="text" name="rut" class="form-control" value="{{ old('rut', $persona->rut) }}" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $persona->telefono) }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $persona->email) }}" required>
                </div>
                <div class="mb-3">
                    <label for="domicilio_id" class="form-label">Domicilio:</label>
                    <select name="domicilio_id" class="form-control" id="domicilio_id" required>
                        <option value="">Selecciona un domicilio</option>
                        @foreach ($domicilios as $domicilio)
                        <option value="{{ $domicilio->id }}" {{ $domicilio->id == old('domicilio_id', $persona->domicilio_id) ? 'selected' : '' }}>{{ $domicilio->direccion }}, {{ $domicilio->ciudad }}, {{ $domicilio->estado }}, {{ $domicilio->codigo_postal }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Persona</button>
            </form>
        </div>
    </div>
</div>
@endsection
