@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Clase</h1>
    <form action="{{ route('clases.update', $clase->id) }}" method="POST">
    @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_ambito">Ámbito</label>
            <input type="number" name="id_ambito" class="form-control" value="{{ $clase->id_ambito }}" required>
        </div>
        <div class="form-group">
            <label for="id_nucleo">Núcleo</label>
            <input type="number" name="id_nucleo" class="form-control" value="{{ $clase->id_nucleo }}" required>
        </div>
        <div class="form-group">
            <label for="id_nivel">Nivel</label>
            <input type="number" name="id_nivel" class="form-control" value="{{ $clase->id_nivel }}" required>
        </div>
        <div class="form-group">
            <label for="id_profesor">Profesor</label>
            <input type="number" name="id_profesor" class="form-control" value="{{ $clase->id_profesor }}" required>
        </div>
        <div class="form-group">
            <label for="id_asistente1">Asistente 1</label>
            <input type="number" name="id_asistente1" class="form-control" value="{{ $clase->id_asistente1 }}">
        </div>
        <div class="form-group">
            <label for="id_asistente2">Asistente 2</label>
            <input type="number" name="id_asistente2" class="form-control" value="{{ $clase->id_asistente2 }}">
        </div>
        <div class="form-group">
            <label for="id_sala">Sala</label>
            <input type="number" name="id_sala" class="form-control" value="{{ $clase->id_sala }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $clase->fecha }}" required>
        </div>
        <div class="form-group">
            <label for="objetivo">Objetivo</label>
            <textarea name="objetivo" class="form-control">{{ $clase->objetivo }}</textarea>
        </div>
        <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea name="observaciones" class="form-control">{{ $clase->observaciones }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
