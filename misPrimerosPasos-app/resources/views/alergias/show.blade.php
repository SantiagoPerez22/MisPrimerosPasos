@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Detalles de la Alergia</h5>
        </div>
        <div class="card-body">
            <p><strong>Tipo de alergia:</strong> {{ $alergia->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $alergia->descripcion }}</p>
            <p><strong>Párvulo:</strong> {{ $alergia->alumno->alumno->nombre1 }} {{ $alergia->alumno->alumno->apellido1 }}</p>
            <a href="{{ route('alergias.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
