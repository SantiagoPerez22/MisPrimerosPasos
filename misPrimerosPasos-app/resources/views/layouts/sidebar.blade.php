<aside id="sidebar" class="js-sidebar collapsed" >
    <!-- Content For Sidebar -->
    <div class="h-100 d-flex flex-column">
        <div>
            <div class="sidebar-logo">
                <a href="#">Mis Primeros Pasos</a>
            </div>
            <ul class="sidebar-nav flex-grow-1">
                <li class="sidebar-header">
                    Dashboard
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#personas" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-address-book pe-2"></i>
                        Personas
                    </a>
                    <ul id="personas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('personas.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('personas.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#cuentas" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-regular fa-id-card pe-2"></i>
                        Cuentas
                    </a>
                    <ul id="cuentas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('cuentas.create') }}" class="sidebar-link">Crear cuenta</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('cuentas.store') }}" class="sidebar-link">Listado de cuentas</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#semanal" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-line-chart pe-2"></i>
                        Informe Semanal
                    </a>
                    <ul id="semanal" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('informes_semanales.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('informes_semanales.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#asistencia" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-regular fa-square-check pe-2"></i>
                        Asistencia
                    </a>
                    <ul id="asistencia" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('asistencias.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('asistencias.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#Observaciones" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-regular fa-eye pe-2"></i>
                        Observaciones
                    </a>
                    <ul id="Observaciones" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('observaciones.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('observaciones.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#clases" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-book pe-2"></i>
                        Clases
                    </a>
                    <ul id="clases" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('clases.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('clases.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#diario" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa fa-calendar-plus-o pe-2"></i>
                        Informe diario
                    </a>
                    <ul id="diario" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('informes_diarios.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('informes_diarios.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#condicion" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-plus-circle pe-2"></i>
                        Creador condiciones
                    </a>
                    <ul id="condicion" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('condiciones.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('condiciones.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#alergia" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-exclamation-triangle pe-2"></i>
                        Alergias
                    </a>
                    <ul id="alergia" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('alergias.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('alergias.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#enfermedad" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-exclamation-circle pe-2"></i>
                        Enfermedades
                    </a>
                    <ul id="enfermedad" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('enfermedades.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('enfermedades.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#tutor" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-users pe-2"></i>
                        Inscripcion alumno
                    </a>
                    <ul id="tutor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('tutor_alumnos.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('tutor_alumnos.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#ambito" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-leaf pe-2"></i>
                        Ambitos
                    </a>
                    <ul id="ambito" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('ambitos.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('ambitos.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#nucleo" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-sign-language pe-2"></i>
                        Nucleos
                    </a>
                    <ul id="nucleo" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('nucleos.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('nucleos.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#nivel" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-signal pe-2"></i>
                        Niveles
                    </a>
                    <ul id="nivel" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('niveles.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('niveles.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#rol" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-lock pe-2"></i>
                        Roles
                    </a>
                    <ul id="rol" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('roles.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('roles.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link collapsed" data-bs-target="#sala" data-bs-toggle="collapse"
                       aria-expanded="false"><i class="fa-solid fa-indent pe-2"></i>
                        Salas
                    </a>
                    <ul id="sala" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('salas.create') }}" class="sidebar-link">Agregar datos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('salas.store') }}" class="sidebar-link">Listado de datos</a>
                        </li>
                    </ul>
                </li>
                <!--                multi drop del sidebar-->
<!--                <li class="sidebar-header">-->
<!--                    Multi Level Menu-->
<!--                </li>-->
<!--                <li class="sidebar-item">-->
<!--                    <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"-->
<!--                       aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>-->
<!--                        Multi Dropdown-->
<!--                    </a>-->
<!--                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">-->
<!--                        <li class="sidebar-item">-->
<!--                            <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"-->
<!--                               data-bs-toggle="collapse" aria-expanded="false">Level 1</a>-->
<!--                            <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">-->
<!--                                <li class="sidebar-item">-->
<!--                                    <a href="#" class="sidebar-link">Level 1.1</a>-->
<!--                                </li>-->
<!--                                <li class="sidebar-item">-->
<!--                                    <a href="#" class="sidebar-link">Level 1.2</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </div>
        <div class="theme-toggle mt-auto">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
        </div>
    </div>
</aside>
