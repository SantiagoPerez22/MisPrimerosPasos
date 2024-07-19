@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Domicilio
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir un nuevo domicilio al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('domicilios.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>
                <div class="form-group mb-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                </div>
                <div class="form-group mb-3">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" required>
                </div>
                <div class="form-group mb-3">
                    <label for="codigo_postal">Código Postal</label>
                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
