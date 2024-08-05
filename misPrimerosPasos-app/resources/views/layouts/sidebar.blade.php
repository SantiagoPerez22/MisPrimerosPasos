<aside id="sidebar" class="js-sidebar" style="overflow-y: auto; height: 100vh;">
    <div class="h-100 d-flex flex-column">
        <div>
            <div class="sidebar-logo">
                <a href="{{ route('dashboard')}}">Mis Primeros Pasos</a>
            </div>
            <ul class="sidebar-nav">

                <div class="item">
                    <li class="sidebar-header">
                        Administrativo
                    </li>

                    @can('view tutor_alumno')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#tutor" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">family_restroom</span>
                            Inscripción párvulos
                        </a>
                        <ul id="tutor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create tutor_alumno')
                            <li class="sidebar-object">
                                <a href="{{ route('tutor_alumno.create') }}" class="sidebar-link">Agregar datos</a>
                            </li>
                            @endcan
                            @can('view tutor_alumno')
                            <li class="sidebar-object">
                                <a href="{{ route('tutor_alumno.index') }}" class="sidebar-link">Listado de datos</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view persona')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#personas" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">person</span>
                            Personas
                        </a>
                        <ul id="personas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create persona')
                            <li class="sidebar-object">
                                <a href="{{ route('personas.create') }}" class="sidebar-link">Agregar persona</a>
                            </li>
                            @endcan
                            @can('view persona')
                            <li class="sidebar-object">
                                <a href="{{ route('personas.index') }}" class="sidebar-link">Listado de personas</a>
                            </li>
                            @endcan
                            @can('view domicilio')
                            <li class="sidebar-object">
                                <a href="{{ route('domicilios.index') }}" class="sidebar-link">Gestión de domicilios</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view user')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#cuentas" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">badge</span>
                            Cuentas
                        </a>
                        <ul id="cuentas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create user')
                            <li class="sidebar-object">
                                <a href="{{ route('users.create') }}" class="sidebar-link">Crear cuenta</a>
                            </li>
                            @endcan
                            @can('view user')
                            <li class="sidebar-object">
                                <a href="{{ route('users.index') }}" class="sidebar-link">Listado de cuentas</a>
                            </li>
                            @endcan

                            @can('create role')
                            <li class="sidebar-object">
                                <a href="{{ route('roles.create') }}" class="sidebar-link">Crear roles</a>
                            </li>
                            @endcan
                            @can('view role')
                            <li class="sidebar-object">
                                <a href="{{ route('roles.index') }}" class="sidebar-link">Listado de roles</a>
                            </li>
                            @endcan
                            @can('view role')
                            <li class="sidebar-object">
                                <a href="{{ route('roles.assign.form') }}" class="sidebar-link">Asignar roles</a>
                            </li>
                            <li class="sidebar-object">
                                <a href="{{ route('roles.indexUsersRoles') }}" class="sidebar-link">Listado cuentas / roles</a>
                            </li>
                            <li class="sidebar-object">
                                <a href="{{ route('roles.permissions.form') }}" class="sidebar-link">Gestionar permisos por rol</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view nucleo')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#nucleo" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">book_3</span>
                            Aprendizajes
                        </a>
                        <ul id="nucleo" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create nucleo')
                            <li class="sidebar-object">
                                <a href="{{ route('nucleos.create') }}" class="sidebar-link">Agregar núcleo</a>
                            </li>
                            @endcan
                            @can('view nucleo')
                            <li class="sidebar-object">
                                <a href="{{ route('nucleos.index') }}" class="sidebar-link">Listado de núcleos</a>
                            </li>
                            @endcan
                            @can('create ambito')
                            <li class="sidebar-object">
                                <a href="{{ route('ambitos.create') }}" class="sidebar-link">Agregar ámbito</a>
                            </li>
                            @endcan
                            @can('view ambito')
                            <li class="sidebar-object">
                                <a href="{{ route('ambitos.index') }}" class="sidebar-link">Listado de ámbitos</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view nivel')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#nivel" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">signal_cellular_alt</span>
                            Niveles
                        </a>
                        <ul id="nivel" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('view nivel')
                            <li class="sidebar-object">
                                <a href="{{ route('niveles.index') }}" class="sidebar-link">Gestión de niveles</a>
                            </li>
                            @endcan
                            @can('view sala')
                            <li class="sidebar-object">
                                <a href="{{ route('salas.index') }}" class="sidebar-link">Gestión de salas</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                </div>

                <div class="item">
                    <li class="sidebar-header">
                        Educacional
                    </li>

                    @can('view clase')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#clases" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">school</span>
                            Clases
                        </a>
                        <ul id="clases" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create clase')
                            <li class="sidebar-object">
                                <a href="{{ route('clases.create') }}" class="sidebar-link">Agregar clase</a>
                            </li>
                            @endcan
                            @can('view clase')
                            <li class="sidebar-object">
                                <a href="{{ route('clases.index') }}" class="sidebar-link">Listado de clases</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view asistencia')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#asistencia" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">event_available</span>
                            Asistencia
                        </a>
                        <ul id="asistencia" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create asistencia')
                            <li class="sidebar-object">
                                <a href="{{ route('asistencias.create') }}" class="sidebar-link">Agregar asistencia</a>
                            </li>
                            @endcan
                            @can('view asistencia')
                            <li class="sidebar-object">
                                <a href="{{ route('asistencias.index') }}" class="sidebar-link">Listado de asistencia</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view observacion')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#Observaciones" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">clinical_notes</span>
                            Observaciones
                        </a>
                        <ul id="Observaciones" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create observacion')
                            <li class="sidebar-object">
                                <a href="{{ route('observaciones.create') }}" class="sidebar-link">Agregar observación</a>
                            </li>
                            @endcan
                            @can('view observacion')
                            <li class="sidebar-object">
                                <a href="{{ route('observaciones.index') }}" class="sidebar-link">Listado de observaciones</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                </div>

                <div class="item">
                    <li class="sidebar-header">
                        Registros
                    </li>

                    @can('view informe_diario')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#diario" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">today</span>
                            Informe diario
                        </a>
                        <ul id="diario" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create informe_diario')
                            <li class="sidebar-object">
                                <a href="{{ route('informes_diarios.create') }}" class="sidebar-link">Agregar datos</a>
                            </li>
                            @endcan
                            @can('view informe_diario')
                            <li class="sidebar-object">
                                <a href="{{ route('informes_diarios.index') }}" class="sidebar-link">Listado de datos</a>
                            </li>
                            @endcan
                            @can('create condicion')
                            <li class="sidebar-object">
                                <a href="{{ route('condiciones.create') }}" class="sidebar-link">Crear condición</a>
                            </li>
                            @endcan
                            @can('view condicion')
                            <li class="sidebar-object">
                                <a href="{{ route('condiciones.index') }}" class="sidebar-link">Listado de condiciones</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view informe_semanal')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#semanal" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">date_range</span>
                            Informe semanal
                        </a>
                        <ul id="semanal" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create informe_semanal')
                            <li class="sidebar-object">
                                <a href="{{ route('informes_semanales.create') }}" class="sidebar-link">Agregar datos</a>
                            </li>
                            @endcan
                            @can('view informe_semanal')
                            <li class="sidebar-object">
                                <a href="{{ route('informes_semanales.index') }}" class="sidebar-link">Listado de datos</a>
                            </li>
                            @endcan
                            @can('view informe_semanal')
                            <li class="sidebar-object">
                                <a href="{{ route('informes_semanales.charts') }}" class="sidebar-link">Gráficos de progreso</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view enfermedad')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#enfermedad" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">stethoscope</span>
                            Registro de salud
                        </a>
                        <ul id="enfermedad" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create enfermedad')
                            <li class="sidebar-object">
                                <a href="{{ route('enfermedades.create') }}" class="sidebar-link">Agregar enfermedad</a>
                            </li>
                            @endcan
                            @can('view enfermedad')
                            <li class="sidebar-object">
                                <a href="{{ route('enfermedades.index') }}" class="sidebar-link">Listado de enfermedades</a>
                            </li>
                            @endcan
                            @can('create alergia')
                            <li class="sidebar-object">
                                <a href="{{ route('alergias.create') }}" class="sidebar-link">Agregar alergia</a>
                            </li>
                            @endcan
                            @can('view alergia')
                            <li class="sidebar-object">
                                <a href="{{ route('alergias.index') }}" class="sidebar-link">Listado de alergias</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view persona')
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#reporte" data-bs-toggle="collapse"
                           aria-expanded="false">
                            <span class="material-symbols-outlined pe-2">lab_profile</span>
                            Reporte
                        </a>
                        <ul id="reporte" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            @can('create persona')
                            <li class="sidebar-object">
                                <a href="{{ route('select.alumno') }}" class="sidebar-link">Exportar datos PDF</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                </div>
            </ul>
        </div>
        <div class="theme-toggle mt-auto">
            <span class="material-symbols-outlined">brightness_medium</span>
        </div>
    </div>
</aside>
