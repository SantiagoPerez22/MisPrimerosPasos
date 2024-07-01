@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Nucleo</h1>
    <div class="card">
        <div class="card-header">
            Nucleo #{{ $nucleo->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $nucleo->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $nucleo->descripcion }}</p>
            <a href="{{ route('nucleos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
