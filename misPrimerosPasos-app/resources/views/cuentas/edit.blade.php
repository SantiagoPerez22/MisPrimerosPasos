@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cuenta</h1>
    <form action="{{ route('cuentas.update', $cuenta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_persona">Persona</label>
            <select name="id_persona" class="form-control" required>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}" {{ $persona->id == $cuenta->id_persona ? 'selected' : '' }}>{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $cuenta->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña (dejar en blanco para mantener la misma)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="rol_id">Rol</label>
            <select name="rol_id" class="form-control" required>
                @foreach($roles as $rol)
                <option value="{{ $rol->id }}" {{ $rol->id == $cuenta->rol_id ? 'selected' : '' }}>{{ $rol->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

