@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Rol</h1>
    <div class="card">
        <div class="card-header">
            Rol #{{ $rol->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $rol->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $rol->descripcion }}</p>
            <a href="{{ route('roles.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
