@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        <h5 class="card-title">
                Detalles del Ámbito
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Ámbito #{{ $ambito->id }}
            </h6> 
        </div>
        <div class="card-body">
            <p><strong>Nombre del ámbito:</strong> {{ $ambito->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $ambito->descripcion }}</p>
            <a href="{{ route('ambitos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
