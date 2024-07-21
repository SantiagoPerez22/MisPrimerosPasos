@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Condición
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar información de la condición
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('condiciones.update', $condicion->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre de la condición</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $condicion->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control">{{ $condicion->descripcion }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
