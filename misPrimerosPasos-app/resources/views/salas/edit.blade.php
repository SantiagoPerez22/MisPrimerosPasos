@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Sala</h1>
    <form action="{{ route('salas.update', $sala->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" name="numero" class="form-control" value="{{ $sala->numero }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
