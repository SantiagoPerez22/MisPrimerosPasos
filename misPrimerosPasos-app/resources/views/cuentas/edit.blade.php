@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Cuenta
            </h5>
            <h6 class="card-subtitle text-muted">
                Actualizar información de la cuenta
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('cuentas.update', $cuenta->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="id_persona">Persona</label>
                    <select name="id_persona" class="form-control" required>
                        @foreach($personas as $persona)
                        <option value="{{ $persona->id }}" {{ $cuenta->id_persona == $persona->id ? 'selected' : '' }}>
                            {{ $persona->nombre1 }} {{ $persona->apellido1 }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $cuenta->email }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control">
                    <small class="form-text text-muted">Dejar en blanco si no deseas cambiarla.</small>
                </div>
                <div class="form-group mb-3">
                    <label for="rol_id">Rol</label>
                    <select name="rol_id" class="form-control" required>
                        @foreach($roles as $rol)
                        <option value="{{ $rol->id }}" {{ $cuenta->rol_id == $rol->id ? 'selected' : '' }}>
                            {{ $rol->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
