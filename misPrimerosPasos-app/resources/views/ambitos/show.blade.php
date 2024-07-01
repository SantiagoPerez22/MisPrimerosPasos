@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Ámbito</h1>
    <div class="card">
        <div class="card-header">
            Ámbito #{{ $ambito->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $ambito->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $ambito->descripcion }}</p>
            <a href="{{ route('ambitos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
