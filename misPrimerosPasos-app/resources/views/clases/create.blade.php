@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Clase</h1>
    <form action="{{ route('clases.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_ambito" class="form-label">Ámbito</label>
            <select name="id_ambito" class="form-control" id="id_ambito" required>
                <option value="">Selecciona un ámbito</option>
                @foreach ($ambitos as $ambito)
                <option value="{{ $ambito->id }}">{{ $ambito->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_nucleo" class="form-label">Núcleo</label>
            <select name="id_nucleo" class="form-control" id="id_nucleo" required>
                <option value="">Selecciona un núcleo</option>
                @foreach ($nucleos as $nucleo)
                <option value="{{ $nucleo->id }}">{{ $nucleo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_nivel" class="form-label">Nivel</label>
            <select name="id_nivel" class="form-control" id="id_nivel" required>
                <option value="">Selecciona un nivel</option>
                @foreach ($niveles as $nivel)
                <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_profesor" class="form-label">Profesor</label>
            <select name="id_profesor" class="form-control" id="id_profesor" required>
                <option value="">Selecciona un profesor</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_asistente1" class="form-label">Asistente 1</label>
            <select name="id_asistente1" class="form-control" id="id_asistente1">
                <option value="">Selecciona un asistente</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_asistente2" class="form-label">Asistente 2</label>
            <select name="id_asistente2" class="form-control" id="id_asistente2">
                <option value="">Selecciona un asistente</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_sala" class="form-label">Sala</label>
            <select name="id_sala" class="form-control" id="id_sala" required>
                <option value="">Selecciona una sala</option>
                @foreach ($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->numero }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="objetivo" class="form-label">Objetivo</label>
            <textarea name="objetivo" class="form-control" id="objetivo"></textarea>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
