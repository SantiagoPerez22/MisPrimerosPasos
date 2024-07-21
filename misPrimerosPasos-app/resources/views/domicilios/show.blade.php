@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles del Domicilio</h5>
            <h6 class="card-subtitle mb-2 text-muted">Domicilio #{{ $domicilio->id }}</h6>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $domicilio->id }}</p>
            <p><strong>Dirección:</strong> {{ $domicilio->direccion }}</p>
            <p><strong>Ciudad:</strong> {{ $domicilio->ciudad }}</p>
            <p><strong>Región:</strong> {{ $domicilio->estado }}</p>
            <p><strong>Código Postal:</strong> {{ $domicilio->codigo_postal }}</p>
            <a href="{{ route('domicilios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
