@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Condición</h1>
    <div class="card">
        <div class="card-header">
            Condición #{{ $condicion->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $condicion->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $condicion->descripcion }}</p>
            <a href="{{ route('condiciones.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
