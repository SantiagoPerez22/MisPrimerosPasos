@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Sala
            </h5>
            <h6 class="card-subtitle text-muted">
                Modificar los detalles de la sala
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('salas.update', $sala->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="numero">Número</label>
                    <input type="number" name="numero" class="form-control" value="{{ $sala->numero }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
