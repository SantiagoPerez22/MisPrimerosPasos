<!-- resources/views/roles/assign_roles.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Asignar Roles a Usuarios</h1>
    <form action="{{ route('roles.assign') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user">Usuario</label>
            <select class="form-control" id="user" name="user_id" required>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <select multiple class="form-control" id="roles" name="roles[]" required>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Asignar Roles</button>
    </form>
</div>
@endsection
