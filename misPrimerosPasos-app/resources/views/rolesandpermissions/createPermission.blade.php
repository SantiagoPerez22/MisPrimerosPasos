@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Permiso</h2>

    <form action="{{ route('rolesandpermissions.storePermission') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Permiso</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guard_name">Guard Name</label>
            <input type="text" name="guard_name" id="guard_name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Permiso</button>
    </form>
</div>
@endsection
