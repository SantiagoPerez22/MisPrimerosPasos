<!-- resources/views/roles/index_users_roles.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios y Roles Asignados</h1>
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ID de Usuario</th>
            <th>Nombre de Usuario</th>
            <th>Roles</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
            <td>
                <a href="{{ route('roles.edit', $user->id) }}" class="btn btn-warning">Editar Roles</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
