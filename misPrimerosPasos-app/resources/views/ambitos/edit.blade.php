@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Ámbito
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar los detalles del ámbito
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('ambitos.update', $ambito->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $ambito->nombre }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control">{{ $ambito->descripcion }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection