@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Informes Semanales
            </h5>
            <h6 class="card-subtitle text-muted">
                Gestión de informes semanales de alumnos
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Altura</th>
                            <th>Peso</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informesSemanales as $informeSemanal)
                        <tr>
                            <td>{{ $informeSemanal->id }}</td>
                            <td>{{ $informeSemanal->alumno->alumno->nombre1 }} {{ $informeSemanal->alumno->alumno->apellido1 }}</td>
                            <td>{{ $informeSemanal->altura }}</td>
                            <td>{{ $informeSemanal->peso }}</td>
                            <td>{{ $informeSemanal->fecha }}</td>
                            <td>
                                <a href="{{ route('informes_semanales.show', $informeSemanal->id) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('informes_semanales.edit', $informeSemanal->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('informes_semanales.destroy', $informeSemanal->id) }}" method="POST" style="display:inline;">
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

<div class="container">
    <div class="card border-0">
        <div class="card-header">
            <h5 class="card-title">
                Graficos de estudiantes
            </h5>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="alumnos">Alumno</label>
                <select class="form-control" name="alumnos" id="alumnos">
                    @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id }}">{{ $alumno->alumno->nombre1 }} {{ $alumno->alumno->apellido1 }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="chartType">Tipo de Grafico</label>
                <select class="form-control" name="chartType" id="chartType">
                    <option value="line">Lineas</option>
                    <option value="bar">Barras</option>
                </select>
            </div>
            <div id="ChartContainer">
                <canvas id="alturaChart"></canvas>
                <canvas id="pesoChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Listener para iniciar la carga de los graficos cada ves que se carga/recarga la pagina.
    document.addEventListener('DOMContentLoaded', function() {
        /////////// Elementos de html ///////////

            // Select de alumnos.
            const selectAlumno = document.getElementById('alumnos');
            // Select de tipo de grafico.
            const selectChartType = document.getElementById('chartType');

            // Contexto de grafico de altura.
            const alturaCtx = document.getElementById('alturaChart').getContext('2d');
            // Contexto de grafico de peso.
            const pesoCtx = document.getElementById('pesoChart').getContext('2d');

        /////////// OBTENCION DEL TIPO DE GRAFICO ///////////

            // Valor de select tipo de grafico (variable que define el tipo de grafico).
            let chartType = selectChartType.value;

        /////////// CREACION DE LOS GRAFICOS ///////////

            // Variable que contiene el grafico de altura.
            let alturaChart = crearGrafico(alturaCtx, chartType, 'Metros de altura'); // <-- Titulo del grafico.
            // Variable que contiene el grafico de peso.
            let pesoChart = crearGrafico(pesoCtx, chartType, 'Kilogramos de peso'); // <-- Titulo del grafico.

        /////////// LISTENERS ///////////

            // Listener para el cambio de alumno.
            selectAlumno.addEventListener('change', function() {
                // Variable que contiene el id del alumno.
                const studentId = selectAlumno.value;

                // Obtencion de los datos del alumno para cada grafico.
                fetchData(`/api/informes-semanales/${studentId}/altura`, alturaChart);
                fetchData(`/api/informes-semanales/${studentId}/peso`, pesoChart);
            });

            // Listener para el cambio de grafico.
            selectChartType.addEventListener('change', function() {
                // Variable que contiene el tipo de grafico.
                chartType = selectChartType.value;

                // Destruir los anteriores graficos.
                alturaChart.destroy();
                pesoChart.destroy();

                // Creacion de los nuevos graficos.
                alturaChart = crearGrafico(alturaCtx, chartType, 'Metros de altura');
                pesoChart = crearGrafico(pesoCtx, chartType, 'Kilogramos de peso');

                // Iniciar evento 'change' para que se actualicen los datos de el grafico.
                selectAlumno.dispatchEvent(new Event('change'));
            });

        ////////////// CREACION DE LOS GRAFICOS ///////////

            // Funcion para crear los graficos.
            function crearGrafico(ctx, type, label) {
                // Inicio de la creacion del grafico.
                return new Chart(ctx, {
                    // Tipo de grafico (controlado por variable: chartType).
                    type: type,

                    //Aqui van los datos del grafico.
                    data: {
                        labels: [],
                        datasets: [{
                            label: label,
                            data: [],
                            borderWidth: 1
                        }]
                    },

                    // Opciones del grafico.
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

        /////////// OBTENCION DE LOS DATOS ///////////

            // Funcion para obtener los datos de cada grafico.
            function fetchData(url, chart) {
                // Se usa la ruta en web.php para obtener los datos desde el controlador.
                fetch(url)
                    // Obtencion de los datos.
                    .then(response => response.json())

                    // Asignacion de los datos para cada parte del grafico
                    .then(data => {
                        // Mapeo de los labels, que en este caso son las fechas y se pasan a strings.
                        chart.data.labels = data.map(entry => new Date(entry.fecha).toLocaleDateString());

                        // Mapeo de los datos del alumno peso o altura para el grafico.
                        chart.data.datasets[0].data = data.map(entry => entry.valor);

                        // Actualizar el grafico
                        chart.update();
                    })

                    // Control de errores
                    .catch(error => console.error('Error fetching data:', error));

            }

        /////////// CARGA INICIAL ///////////

            // Iniciar evento 'change' para cargar los datos al iniciar la pagina.
            selectAlumno.dispatchEvent(new Event('change'));
    });
</script>
@endsection
