@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Persona</h1>
    <form action="{{ route('personas.update', $persona->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre1">Primer Nombre</label>
            <input type="text" name="nombre1" class="form-control" value="{{ $persona->nombre1 }}" required>
        </div>
        <div class="form-group">
            <label for="nombre2">Segundo Nombre</label>
            <input type="text" name="nombre2" class="form-control" value="{{ $persona->nombre2 }}">
        </div>
        <div class="form-group">
            <label for="apellido1">Primer Apellido</label>
            <input type="text" name="apellido1" class="form-control" value="{{ $persona->apellido1 }}" required>
        </div>
        <div class="form-group">
            <label for="apellido2">Segundo Apellido</label>
            <input type="text" name="apellido2" class="form-control" value="{{ $persona->apellido2 }}">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" name="edad" class="form-control" value="{{ $persona->edad }}" required>
        </div>
        <div class="form-group">
            <label for="rut">RUT</label>
            <input type="text" name="rut" class="form-control" value="{{ $persona->rut }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $persona->telefono }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $persona->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
