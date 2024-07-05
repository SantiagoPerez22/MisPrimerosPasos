@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Condición</h5>
            <h6 class="card-subtitle text-muted">
                Condición #{{ $condicion->id }}
            </h6>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $condicion->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $condicion->descripcion }}</p>
            <a href="{{ route('condiciones.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
