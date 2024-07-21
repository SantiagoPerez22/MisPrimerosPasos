@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Detalles del Núcleo
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Nucleo #{{ $nucleo->id }}
            </h6>             
        </div>
        <div class="card-body">
            <p><strong>Nombre del núcleo:</strong> {{ $nucleo->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $nucleo->descripcion }}</p>
            <a href="{{ route('nucleos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
