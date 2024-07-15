<!-- resources/views/roles/edit_roles.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Roles de Usuario</h1>
    <form action="{{ route('roles.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" class="form-control" id="user" name="user" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <select multiple class="form-control" id="roles" name="roles[]">
                @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->roles->contains('id', $role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar Roles</button>
    </form>
</div>
@endsection
