@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Personas
            </h5>
            <h6 class="card-subtitle text-muted">
                Listado de personas en el sistema
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>RUT</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($personas as $persona)
                    <tr>
                        <td>{{ $persona->nombre1 }} {{ $persona->nombre2 }}</td>
                        <td>{{ $persona->apellido1 }} {{ $persona->apellido2 }}</td>
                        <td>
                            @if($persona->dias_desde_nacimiento >= 85)
                            {{ $persona->edad }}
                            @else
                            <span class="text-warning">Edad menor a 85 días</span>
                            @endif
                        </td>
                        <td>{{ $persona->rut }}</td>
                        <td>{{ $persona->email }}</td>
                        <td>
                            <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-sm btn-info">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>
                            <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-sm btn-warning">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline-block;">
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
