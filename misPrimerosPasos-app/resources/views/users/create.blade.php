@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Crear Usuario
            </h5>
            <h6 class="card-subtitle text-muted">
                Añadir un nuevo usuario al sistema
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="persona_id" class="form-label">Persona</label>
                    <select name="persona_id" class="form-control" id="persona_id" required>
                        <option value="">Selecciona una persona</option>
                        @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}" data-email="{{ $persona->email }}">{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('persona_id').addEventListener('change', function () {
        var email = this.options[this.selectedIndex].getAttribute('data-email');
        document.getElementById('email').value = email;
    });
</script>
@endsection
