@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Agregar Clase
            </h5>
            <h6 class="card-subtitle text-muted">
                Registrar una nueva clase
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('clases.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_ambito">Ámbito</label>
                    <select name="id_ambito" class="form-control" required>
                        @foreach($ambitos as $ambito)
                        <option value="{{ $ambito->id }}">{{ $ambito->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_nucleo">Núcleo</label>
                    <select name="id_nucleo" class="form-control" required>
                        @foreach($nucleos as $nucleo)
                        <option value="{{ $nucleo->id }}">{{ $nucleo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_nivel">Nivel</label>
                    <select name="id_nivel" class="form-control" required>
                        @foreach($niveles as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_profesor">Profesor</label>
                    <select name="id_profesor" class="form-control" required>
                        @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}">{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_asistente1">Asistente 1</label>
                    <select name="id_asistente1" class="form-control">
                        <option value="">Ninguno</option>
                        @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}">{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_asistente2">Asistente 2</label>
                    <select name="id_asistente2" class="form-control">
                        <option value="">Ninguno</option>
                        @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}">{{ $cuenta->persona->nombre1 }} {{ $cuenta->persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_sala">Sala</label>
                    <select name="id_sala" class="form-control" required>
                        @foreach($salas as $sala)
                        <option value="{{ $sala->id }}">{{ $sala->numero }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="objetivo">Objetivo</label>
                    <textarea name="objetivo" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea name="observaciones" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
