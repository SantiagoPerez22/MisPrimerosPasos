<nav class="navbar navbar-expand px-3 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="btn btn-dark" id="search" type="button">
        <h9>
            Buscador
            <span class="material-symbols-outlined">search</span>
        </h9>
    </button>
    <div class="navbar-collapse navbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    <img src="{{asset('images/1.jpg')}}" class="avatar img-fluid rounded" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="dropdown-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Modal para Buscador -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Buscador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form class="search-bar d-flex flex-column" role="search" method="GET">
                    <!-- Campo de entrada para términos de búsqueda -->
                    <div class="mb-3">
                        <label for="searchQuery" class="form-label">Término de Búsqueda</label>
                        <input type="text" class="form-control" id="searchQuery" name="query" placeholder="Escribe tu búsqueda...">
                    </div>

                    <!-- Categorías con Checkboxes -->
                    <div class="mb-3">
                        <h6>Categorías</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="inscripcion_parvulos" id="category1">
                            <label class="form-check-label" for="category1">
                                Párvulos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="personas" id="category2">
                            <label class="form-check-label" for="category2">
                                Personas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="cuentas" id="category3">
                            <label class="form-check-label" for="category3">
                                Cuentas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="aprendizajes" id="category4">
                            <label class="form-check-label" for="category4">
                                Aprendizajes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="niveles" id="category5">
                            <label class="form-check-label" for="category5">
                                Niveles
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="clases" id="category6">
                            <label class="form-check-label" for="category6">
                                Clases
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="asistencia" id="category7">
                            <label class="form-check-label" for="category7">
                                Asistencia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="observaciones" id="category8">
                            <label class="form-check-label" for="category8">
                                Observaciones
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="informe_diario" id="category9">
                            <label class="form-check-label" for="category9">
                                Informe diario
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="informe_semanal" id="category10">
                            <label class="form-check-label" for="category10">
                                Informe semanal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="category[]" value="registro_salud" id="category11">
                            <label class="form-check-label" for="category11">
                                Registro de salud
                            </label>
                        </div>
                    </div>

                    <!-- Selector de fechas -->
                    <div class="mb-3">
                        <h6>Rango de Fechas</h6>
                        <div class="row">
                            <div class="col">
                                <label for="startDate" class="form-label">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="startDate" name="start_date">
                            </div>
                            <div class="col">
                                <label for="endDate" class="form-label">Fecha de Fin</label>
                                <input type="date" class="form-control" id="endDate" name="end_date">
                            </div>
                        </div>
                    </div>

                    <!-- Botón de búsqueda -->
                    <button class="search-btn btn btn-primary mt-3" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Espera a que el documento esté completamente cargado
    document.addEventListener('DOMContentLoaded', function() {
        var searchButton = document.getElementById('search');
        var searchModal = new bootstrap.Modal(document.getElementById('searchModal'));

        // Agrega un evento para abrir el modal cuando se haga clic en el botón de búsqueda
        searchButton.addEventListener('click', function() {
            searchModal.show();
        });
    });
</script>
