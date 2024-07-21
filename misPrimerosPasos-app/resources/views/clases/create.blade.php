@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Clase
            </h5>
            <h6 class="card-subtitle text-muted">
                Registrar nueva clase
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('clases.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="id_ambito" class="form-label">Ámbito</label>
                    <select name="id_ambito" class="form-control" id="id_ambito" required>
                        <option value="">Seleccionar ámbito</option>
                        @foreach ($ambitos as $ambito)
                        <option value="{{ $ambito->id }}">{{ $ambito->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_nucleo" class="form-label">Núcleo</label>
                    <select name="id_nucleo" class="form-control" id="id_nucleo" required>
                        <option value="">Seleccionar núcleo</option>
                        @foreach ($nucleos as $nucleo)
                        <option value="{{ $nucleo->id }}">{{ $nucleo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_nivel" class="form-label">Nivel</label>
                    <select name="id_nivel" class="form-control" id="id_nivel" required>
                        <option value="">Seleccionar nivel</option>
                        @foreach ($niveles as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_profesor" class="form-label">Educadora</label>
                    <select name="id_profesor" class="form-control" id="id_profesor" required>
                        <option value="">Seleccionar educadora</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_asistente1" class="form-label">Técnico 1</label>
                    <select name="id_asistente1" class="form-control" id="id_asistente1">
                        <option value="">Seleccionar técnico en párvulos</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_asistente2" class="form-label">Técnico 2</label>
                    <select name="id_asistente2" class="form-control" id="id_asistente2">
                        <option value="">Seleccionar técnico en párvulos</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_sala" class="form-label">Sala</label>
                    <select name="id_sala" class="form-control" id="id_sala" required>
                        <option value="">Seleccionar sala</option>
                        @foreach ($salas as $sala)
                        <option value="{{ $sala->id }}">{{ $sala->numero }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="objetivo" class="form-label">Objetivo</label>
                    <textarea name="objetivo" class="form-control" id="objetivo"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('fecha');
        const today = new Date().toISOString().split('T')[0];
        dateInput.value = today;
    });
</script>
@endpush