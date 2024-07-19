<!-- resources/views/roles/manage_permissions.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestionar Permisos de Roles</h1>
    <form action="{{ route('roles.permissions') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="role">Rol</label>
            <select class="form-control" id="role" name="role_id" required>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="permissions">Permisos</label>
            <select multiple class="form-control" id="permissions" name="permissions[]" required>
                @foreach($permissions as $permission)
                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Asignar Permisos</button>
    </form>
</div>
@endsection
