@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles del Nivel</h5>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $nivel->id }}</p>
            <p><strong>Nombre del nivel:</strong> {{ $nivel->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $nivel->descripcion }}</p>
            <a href="{{ route('niveles.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
