@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Clases
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de clases
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Ámbito</th>
                        <th scope="col">Núcleo</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Educadora</th>
                        <th scope="col">Técnico 1</th>
                        <th scope="col">Técnico 2</th>
                        <th scope="col">Sala</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clases as $clase)
                    <tr>
                        <th scope="row">{{ $clase->id }}</th>
                        <td>{{ $clase->ambito->nombre }}</td>
                        <td>{{ $clase->nucleo->nombre }}</td>
                        <td>{{ $clase->nivel->nombre }}</td>
                        <td>{{ $clase->profesor->name }}</td>
                        <td>{{ $clase->asistente1->name ?? 'N/A' }}</td>
                        <td>{{ $clase->asistente2->name ?? 'N/A' }}</td>
                        <td>{{ $clase->sala->numero }}</td>
                        <td>{{ $clase->fecha }}</td>
                        <td>
                            <a href="{{ route('clases.show', $clase->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('clases.edit', $clase->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('clases.destroy', $clase->id) }}" method="POST" style="display:inline;">
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