@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Nivel</h1>
    <div class="card">
        <div class="card-header">
            Nivel #{{ $nivel->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $nivel->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $nivel->descripcion }}</p>
            <a href="{{ route('niveles.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
