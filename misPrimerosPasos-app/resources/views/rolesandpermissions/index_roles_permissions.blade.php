<!-- resources/views/roles/index_roles_permissions.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Roles y Permisos Asignados</h1>
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ID de Rol</th>
            <th>Nombre de Rol</th>
            <th>Permisos</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->permissions->pluck('name')->join(', ') }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
