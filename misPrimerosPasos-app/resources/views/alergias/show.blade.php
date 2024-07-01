@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Alergia</h1>
    <div class="card">
        <div class="card-header">
            Alergia #{{ $alergia->id }}
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $alergia->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $alergia->descripcion }}</p>
            <p><strong>Alumno:</strong> {{ $alergia->id_alumno }}</p>
            <a href="{{ route('alergias.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
