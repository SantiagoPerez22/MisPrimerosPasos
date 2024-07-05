@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Detalle de la Cuenta
            </h5>
            <h6 class="card-subtitle text-muted">
                Persona: {{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}
            </h6>
        </div>
        <div class="card-body">
            <p class="card-text">Email: {{ $cuenta->email }}</p>
            <p class="card-text">Rol: {{ $cuenta->rol->nombre }}</p>
            <a href="{{ route('cuentas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
