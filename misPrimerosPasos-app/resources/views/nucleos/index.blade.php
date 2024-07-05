@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Table Element -->
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Núcleos
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de núcleos
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nucleos as $nucleo)
                    <tr>
                        <th scope="row">{{ $nucleo->id }}</th>
                        <td>{{ $nucleo->nombre }}</td>
                        <td>{{ $nucleo->descripcion }}</td>
                        <td>
                            <a href="{{ route('nucleos.show', $nucleo->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('nucleos.edit', $nucleo->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('nucleos.destroy', $nucleo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
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