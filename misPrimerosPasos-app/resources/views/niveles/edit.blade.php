<!-- resources/views/niveles/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Nivel</h1>
    <form action="{{ route('niveles.update', $nivel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del Nivel</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $nivel->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $nivel->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection
