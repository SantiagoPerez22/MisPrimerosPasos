@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Detalles de Nivel
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Nivel #{{ $nivel->id }}
            </h6> 
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $nivel->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $nivel->descripcion }}</p>
            <a href="{{ route('niveles.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
