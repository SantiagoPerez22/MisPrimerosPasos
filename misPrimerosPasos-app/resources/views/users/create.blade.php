@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="persona_id" class="form-label">Persona</label>
            <select name="persona_id" class="form-control" id="persona_id" required>
                <option value="">Selecciona una persona</option>
                @foreach ($personas as $persona)
                <option value="{{ $persona->id }}" data-email="{{ $persona->email }}">{{ $persona->nombre1 }} {{ $persona->apellido1 }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" readonly>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script>
    document.getElementById('persona_id').addEventListener('change', function () {
        var email = this.options[this.selectedIndex].getAttribute('data-email');
        document.getElementById('email').value = email;
    });
</script>
@endsection
