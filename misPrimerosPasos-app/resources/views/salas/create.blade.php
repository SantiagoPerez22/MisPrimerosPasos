@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Sala</h1>
    <form action="{{ route('salas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" name="numero" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
