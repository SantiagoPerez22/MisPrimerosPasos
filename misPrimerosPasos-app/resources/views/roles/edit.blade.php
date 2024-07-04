@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Rol
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar los detalles del rol
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.update', $rol->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $rol->nombre }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control" required>{{ $rol->descripcion }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
