@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Editar Clase
            </h5>
            <h6 class="card-subtitle text-muted">
                Actualizar detalles de la clase
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('clases.update', $clase->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_ambito">Ámbito</label>
                    <select name="id_ambito" class="form-control" required>
                        @foreach($ambitos as $ambito)
                        <option value="{{ $ambito->id }}" {{ $clase->id_ambito == $ambito->id ? 'selected' : '' }}>{{ $ambito->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_nucleo">Núcleo</label>
                    <select name="id_nucleo" class="form-control" required>
                        @foreach($nucleos as $nucleo)
                        <option value="{{ $nucleo->id }}" {{ $clase->id_nucleo == $nucleo->id ? 'selected' : '' }}>{{ $nucleo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_nivel">Nivel</label>
                    <select name="id_nivel" class="form-control" required>
                        @foreach($niveles as $nivel)
                        <option value="{{ $nivel->id }}" {{ $clase->id_nivel == $nivel->id ? 'selected' : '' }}>{{ $nivel->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_profesor">Profesor</label>
                    <select name="id_profesor" class="form-control" required>
                        @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}" {{ $clase->id_profesor == $cuenta->id ? 'selected' : '' }}>{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_asistente1">Asistente 1</label>
                    <select name="id_asistente1" class="form-control">
                        <option value="">Ninguno</option>
                        @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}" {{ $clase->id_asistente1 == $cuenta->id ? 'selected' : '' }}>{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_asistente2">Asistente 2</label>
                    <select name="id_asistente2" class="form-control">
                        <option value="">Ninguno</option>
                        @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}" {{ $clase->id_asistente2 == $cuenta->id ? 'selected' : '' }}>{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_sala">Sala</label>
                    <select name="id_sala" class="form-control" required>
                        @foreach($salas as $sala)
                        <option value="{{ $sala->id }}" {{ $clase->id_sala == $sala->id ? 'selected' : '' }}>{{ $sala->numero }}</option>
                        @endforeach
                    </select>
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
    </div>
</div>
@endsection
