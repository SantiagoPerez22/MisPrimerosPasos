@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Nivel
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar los detalles del nivel
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('niveles.update', $nivel->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $nivel->nombre }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control" required>{{ $nivel->descripcion }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection