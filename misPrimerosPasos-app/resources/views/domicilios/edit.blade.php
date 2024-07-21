@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Domicilio</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('domicilios.update', $domicilio->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $domicilio->direccion }}" required>
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $domicilio->ciudad }}" required>
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Región</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="{{ $domicilio->estado }}" required>
                </div>
                <div class="mb-3">
                    <label for="codigo_postal" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="{{ $domicilio->codigo_postal }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
