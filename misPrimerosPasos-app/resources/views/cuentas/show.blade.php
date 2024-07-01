@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Cuenta</h1>
    <div class="card">
        <div class="card-header">
            Cuenta #{{ $cuenta->id }}
        </div>
        <div class="card-body">
            <p><strong>Persona:</strong> {{ $cuenta->id_persona }}</p>
            <p><strong>Email:</strong> {{ $cuenta->email }}</p>
            <p><strong>Rol:</strong> {{ $cuenta->rol_id }}</p>
            <a href="{{ route('cuentas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
