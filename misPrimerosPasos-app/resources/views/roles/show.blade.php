@extends('layouts.app')

@section('content')
<div class="container">   
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de rol
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Rol #{{ $rol->id }}
            </h6> 
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $rol->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $rol->descripcion }}</p>
            <a href="{{ route('roles.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
