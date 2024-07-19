@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Asignar Roles</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('rolesandpermissions.assign') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user">Usuario</label>
            <select name="user_id" id="user" class="form-control" required>
                <option value="">Seleccione un usuario</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="roles">Roles</label>
            <select name="roles[]" id="roles" class="form-control" multiple required>
                @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Asignar Roles</button>
    </form>
</div>
@endsection
