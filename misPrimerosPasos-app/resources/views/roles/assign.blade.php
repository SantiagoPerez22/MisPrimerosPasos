@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Asignar Roles a Usuarios') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('roles.assign') }}">
                        @csrf

                        <div class="form-group">
                            <label for="user">{{ __('Usuario') }}</label>
                            <select id="user" class="form-control @error('user_id') is-invalid @enderror" name="user_id" required>
                                <option value="">{{ __('Seleccionar usuario') }}</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>

                            @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="roles">{{ __('Roles') }}</label>
                            <div id="roles" class="form-control @error('roles') is-invalid @enderror">
                                @foreach ($roles as $role)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->name }}" id="role_{{ $role->id }}">
                                    <label class="form-check-label" for="role_{{ $role->id }}">
                                        {{ $role->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>

                            @error('roles')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Asignar Roles') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('user').addEventListener('change', function () {
        const userId = this.value;

        fetch(`/users/${userId}/roles`)
            .then(response => response.json())
            .then(data => {
                document.querySelectorAll('.form-check-input').forEach(checkbox => {
                    checkbox.checked = data.roles.includes(checkbox.value);
                });
            });
    });
</script>
@endpush
