@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Permiso</h2>

    <form action="{{ route('rolesandpermissions.updatePermission', $permission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Permiso</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $permission->name }}" required>
        </div>

        <div class="form-group">
            <label for="guard_name">Guard Name</label>
            <input type="text" name="guard_name" id="guard_name" class="form-control" value="{{ $permission->guard_name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Permiso</button>
    </form>
</div>
@endsection
