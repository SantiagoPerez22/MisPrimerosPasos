@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalles de la Sala
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Número #{{ $sala->id }}
            </h6> 
        </div>
        <div class="card-body">
            <div class="card-text">
                <p><strong>Número:</strong> {{ $sala->numero }}</p>
                <a href="{{ route('salas.index') }}" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>
</div>
@endsection