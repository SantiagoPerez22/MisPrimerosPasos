@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Rol</h2>

    <form action="{{ route('rolesandpermissions.updateRole', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Rol</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" required>
        </div>

        <div class="form-group">
            <label for="guard_name">Guard Name</label>
            <input type="text" name="guard_name" id="guard_name" class="form-control" value="{{ $role->guard_name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Rol</button>
    </form>
</div>
@endsection
