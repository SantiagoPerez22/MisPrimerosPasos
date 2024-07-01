@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Sala</h1>
    <div class="card">
        <div class="card-header">
            Sala #{{ $sala->id }}
        </div>
        <div class="card-body">
            <p><strong>Número:</strong> {{ $sala->numero }}</p>
            <a href="{{ route('salas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
