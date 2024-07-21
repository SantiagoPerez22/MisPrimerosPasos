@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Condición
            </h5>
            <h6 class="card-subtitle text-muted">
                Agregar nueva condición
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('condiciones.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nombre">Nombre de condición</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
