@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Gestionar Permisos de Roles
            </h5>
        </div>
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('roles.permissions') }}">
                @csrf

                <div class="form-group">
                    <label for="role">{{ __('Rol') }}</label>
                    <select id="role" class="form-control @error('role_id') is-invalid @enderror" name="role_id" required>
                        <option value="">{{ __('Seleccionar rol') }}</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>

                    @error('role_id')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th><label for="permissions">{{ __('Permisos') }}</label></th>
                            <th>Ver</th>
                            <th>Crear</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                        </thead>
                        <tbody id="permissions">
                        @foreach (['user', 'persona', 'domicilio', 'role', 'sala', 'nivel', 'nucleo', 'ambito', 'condicion', 'tutor_alumno', 'alergia', 'enfermedad', 'roles_and_permissions', 'informe_diario', 'informe_semanal', 'clase', 'asistencia', 'observacion'] as $entity)
                        <tr>
                            <td>{{ ucfirst($entity) }}</td>
                            @foreach (['view', 'create', 'edit', 'delete'] as $action)
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input permission-checkbox" type="checkbox" name="permissions[]" value="{{ $action . ' ' . $entity }}" id="permission_{{ $action . '_' . $entity }}">
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
                    <button type="submit" class="btn btn-primary">
                        {{ __('Gestionar Permisos') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('role').addEventListener('change', function () {
        const roleId = this.value;

        fetch(`/roles/${roleId}/permissions`)
            .then(response => response.json())
            .then(data => {
                document.querySelectorAll('.permission-checkbox').forEach(checkbox => {
                    checkbox.checked = data.permissions.includes(checkbox.value);
                });
            });
    });
</script>
@endpush
