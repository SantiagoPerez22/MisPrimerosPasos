@extends('layouts.pdf')

@section('title', 'Reporte de Alumno')

@section('content')
<div class="card border-0">
    <div class="card-header">
        <h5 class="card-title">
            Datos del Párvulo
        </h5>
        <h6 class="card-subtitle text-muted">
            Información detallada del párvulo
        </h6>
    </div>
    <div class="card-body">
        @if(!$datos->isEmpty())
        <p><strong>Nombre del párvulo:</strong> {{ $datos->first()->alumno->nombre1 }} {{ $datos->first()->alumno->nombre2 }} {{ $datos->first()->alumno->apellido1 }} {{ $datos->first()->alumno->apellido2 }}</p>
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th>Tutor Principal</th>
                <th>Tutor Secundario</th>
                <th>Nivel</th>
                <th>Fecha Matrícula</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->tutor1->nombre1 }} {{ $dato->tutor1->nombre2 }} {{ $dato->tutor1->apellido1 }} {{ $dato->tutor1->apellido2 }}</td>
                <td>{{ $dato->tutor2->nombre1 }} {{ $dato->tutor2->nombre2 }} {{ $dato->tutor2->apellido1 }} {{ $dato->tutor2->apellido2 }}</td>
                <td>{{ $dato->nivel->nombre }}</td>
                <td>{{ $dato->fecha_matricula }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>No se encontraron datos para el ID del párvulo especificado.</p>
        @endif
    </div>
</div>
@endsection
