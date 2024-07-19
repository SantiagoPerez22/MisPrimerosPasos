@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Rol</h2>

    <form action="{{ route('rolesandpermissions.storeRole') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Rol</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guard_name">Guard Name</label>
            <input type="text" name="guard_name" id="guard_name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Rol</button>
    </form>
</div>
@endsection
