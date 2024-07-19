@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Roles y Permisos</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div>
        <h3>Roles</h3>
        <ul>
            @foreach ($roles as $role)
            <li>{{ $role->name }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <h3>Permisos</h3>
        <ul>
            @foreach ($permissions as $permission)
            <li>{{ $permission->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
