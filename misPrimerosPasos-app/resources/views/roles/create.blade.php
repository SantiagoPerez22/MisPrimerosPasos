@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">{{ __('Crear Rol') }}</h5>
                    <h6 class="card-subtitle text-muted">Añadir un nuevo rol al sistema</h6>
                </div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">{{ __('Nombre del Rol') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="permissions">{{ __('Permisos') }}</label>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Permiso</th>
                                    <th>View</th>
                                    <th>Create</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (['user', 'persona', 'domicilio', 'role', 'sala', 'nivel', 'nucleo', 'ambito', 'condicion', 'tutor_alumno', 'alergia', 'enfermedad', 'roles_and_permissions', 'informe_diario', 'informe_semanal', 'clase', 'asistencia', 'observacion'] as $entity)
                                <tr>
                                    <td>{{ ucfirst($entity) }}</td>
                                    @foreach (['view', 'create', 'edit', 'delete'] as $action)
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $action . ' ' . $entity }}" id="permission_{{ $action . '_' . $entity }}">
                                            <label class="form-check-label" for="permission_{{ $action . '_' . $entity }}"></label>
                                        </div>
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">{{ __('Crear Rol') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
