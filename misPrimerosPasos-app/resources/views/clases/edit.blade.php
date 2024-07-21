@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Editar Clase</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('clases.update', $clase->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="id_ambito" class="form-label">Ámbito</label>
                    <select name="id_ambito" class="form-control" id="id_ambito" required>
                        @foreach ($ambitos as $ambito)
                        <option value="{{ $ambito->id }}" {{ $ambito->id == $clase->id_ambito ? 'selected' : '' }}>
                            {{ $ambito->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_nucleo" class="form-label">Núcleo</label>
                    <select name="id_nucleo" class="form-control" id="id_nucleo" required>
                        @foreach ($nucleos as $nucleo)
                        <option value="{{ $nucleo->id }}" {{ $nucleo->id == $clase->id_nucleo ? 'selected' : '' }}>
                            {{ $nucleo->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_nivel" class="form-label">Nivel</label>
                    <select name="id_nivel" class="form-control" id="id_nivel" required>
                        @foreach ($niveles as $nivel)
                        <option value="{{ $nivel->id }}" {{ $nivel->id == $clase->id_nivel ? 'selected' : '' }}>
                            {{ $nivel->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_profesor" class="form-label">Educadora</label>
                    <select name="id_profesor" class="form-control" id="id_profesor" required>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $clase->id_profesor ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_asistente1" class="form-label">Técnico 1</label>
                    <select name="id_asistente1" class="form-control" id="id_asistente1">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $clase->id_asistente1 ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_asistente2" class="form-label">Técnico 2</label>
                    <select name="id_asistente2" class="form-control" id="id_asistente2">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $clase->id_asistente2 ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_sala" class="form-label">Sala</label>
                    <select name="id_sala" class="form-control" id="id_sala" required>
                        @foreach ($salas as $sala)
                        <option value="{{ $sala->id }}" {{ $sala->id == $clase->id_sala ? 'selected' : '' }}>
                            {{ $sala->numero }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="objetivo" class="form-label">Objetivo</label>
                    <textarea name="objetivo" class="form-control" id="objetivo">{{ $clase->objetivo }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control" id="observaciones">{{ $clase->observaciones }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $clase->fecha }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
