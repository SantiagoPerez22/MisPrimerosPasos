@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-5">
        <h2>Gráficos</h2>
        <form method="GET" action="{{ route('informes_semanales.charts') }}">
            <div class="form-group">
                <label for="id_alumno">Seleccione Alumno:</label>
                <select name="id_alumno" id="id_alumno" class="form-control" onchange="this.form.submit()">
                    <option value="">Todos</option>
                    @foreach ($alumnos as $alumno)
                    <option value="{{ $alumno->id }}" {{ $selectedId == $alumno->id ? 'selected' : '' }}>
                        {{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">Fecha de inicio:</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $startDate }}" onchange="this.form.submit()">
            </div>
            <div class="form-group">
                <label for="end_date">Fecha de fin:</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $endDate }}" onchange="this.form.submit()">
            </div>
            <div class="form-group">
                <label for="chart_type">Tipo de gráfico:</label>
                <select name="chart_type" id="chart_type" class="form-control" onchange="this.form.submit()">
                    <option value="line" {{ $chartType == 'line' ? 'selected' : '' }}>Línea</option>
                    <option value="bar" {{ $chartType == 'bar' ? 'selected' : '' }}>Barra</option>
                    <option value="pie" {{ $chartType == 'pie' ? 'selected' : '' }}>Tarta</option>
                </select>
            </div>
        </form>
        <canvas id="heightChart" width="400" height="200"></canvas>
        <canvas id="weightChart" width="400" height="200"></canvas>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Alumno</th>
            <th>Cuenta</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($informesSemanales as $informeSemanal)
        <tr>
            <td>{{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</td>
            <td>{{ $informeSemanal->user->name }}</td>
            <td>{{ $informeSemanal->altura }}</td>
            <td>{{ $informeSemanal->peso }}</td>
            <td>{{ $informeSemanal->fecha }}</td>
            <td>
                <a href="{{ route('informes_semanales.show', $informeSemanal->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('informes_semanales.edit', $informeSemanal->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('informes_semanales.destroy', $informeSemanal->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var heightData = @json($informesSemanales->pluck('altura'));
    var weightData = @json($informesSemanales->pluck('peso'));
    var labels = @json($informesSemanales->pluck('fecha'));
    var chartType = '{{ $chartType }}';

    var ctxHeight = document.getElementById('heightChart').getContext('2d');
    var heightChart = new Chart(ctxHeight, {
        type: chartType,
        data: {
            labels: labels,
            datasets: [{
                label: 'Altura',
                data: heightData,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctxWeight = document.getElementById('weightChart').getContext('2d');
    var weightChart = new Chart(ctxWeight, {
        type: chartType,
        data: {
            labels: labels,
            datasets: [{
                label: 'Peso',
                data: weightData,
                borderColor: 'rgba(153, 102, 255, 1)',
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
