@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Cuenta
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir una nueva cuenta al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('cuentas.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_persona">Persona</label>
                    <select name="id_persona" class="form-control" required>
                        @foreach($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rol_id">Rol</label>
                    <select name="rol_id" class="form-control" required>
                        @foreach($roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
