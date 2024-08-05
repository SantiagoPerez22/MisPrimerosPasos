@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Table Element -->
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Niveles
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de niveles
            </h6>
            <a href="{{ route('niveles.create') }}" class="btn btn-primary mt-2">Añadir Nivel</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del nivel </th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($niveles as $nivel)
                    <tr>
                        <th scope="row">{{ $nivel->id }}</th>
                        <td>{{ $nivel->nombre }}</td>
                        <td>{{ $nivel->descripcion }}</td>
                        <td>
                            <a href="{{ route('niveles.show', $nivel->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('niveles.edit', $nivel->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('niveles.destroy', $nivel->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
