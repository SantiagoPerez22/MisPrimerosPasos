@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0 mb-4">
        <div class="card-header">
            <h5 class="card-title">Gráficos</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('informes_semanales.charts') }}">
                <div class="form-group">
                    <label for="id_alumno">Seleccionar Párvulo:</label>
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
                    </select>
                </div>
            </form>

            <div class="mt-4">
                <canvas id="heightChart" width="400" height="200"></canvas>
                <canvas id="weightChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">Informes Semanales</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Párvulo</th>
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
                        <a href="{{ route('informes_semanales.show', $informeSemanal->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('informes_semanales.edit', $informeSemanal->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('informes_semanales.destroy', $informeSemanal->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
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

    document.addEventListener('DOMContentLoaded', function () {
        const endDateInput = document.getElementById('end_date');
        const startDateInput = document.getElementById('start_date');
        const today = new Date();
        const todayString = today.toISOString().split('T')[0];
        endDateInput.value = todayString;

        const fourteenDaysAgo = new Date(today);
        fourteenDaysAgo.setDate(fourteenDaysAgo.getDate() - 14);
        const fourteenDaysAgoString = fourteenDaysAgo.toISOString().split('T')[0];
        startDateInput.value = fourteenDaysAgoString;
    });
</script>
@endsection
