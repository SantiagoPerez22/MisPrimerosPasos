@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Sala
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir nueva sala al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('salas.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="numero">Número</label>
                    <input type="number" name="numero" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
