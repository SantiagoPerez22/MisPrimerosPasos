@extends('layouts.app')

@section('content')
<div class="container">   
    <div class="card">
        <div class="card-header">
            <h1>Detalles del Rol</h1>
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
