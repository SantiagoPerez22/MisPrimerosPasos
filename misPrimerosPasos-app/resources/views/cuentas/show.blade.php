@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Cuenta</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Persona: {{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</h5>
            <p class="card-text">Email: {{ $cuenta->email }}</p>
            <p class="card-text">Rol: {{ $cuenta->rol->nombre }}</p>
            <a href="{{ route('cuentas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
