<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\NucleoController;
use App\Http\Controllers\AmbitoController;
use App\Http\Controllers\CondicionController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TutorAlumnoController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\EnfermedadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformeDiarioController;
use App\Http\Controllers\InformeSemanalController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ObservacionController;
use App\Models\Persona;
use App\Models\TutorAlumno;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/send-email', [MailController::class, 'sendWelcomeEmail']);

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:Administrador|Profesor|Asistente|Tutor|Auditor'])->group(function () {
        Route::get('roles/assign', [RoleController::class, 'assignRolesForm'])->name('roles.assign.form');
        Route::post('roles/assign', [RoleController::class, 'assignRoles'])->name('roles.assign');
        Route::get('roles/permissions', [RoleController::class, 'managePermissionsForm'])->name('roles.permissions.form');
        Route::post('roles/permissions', [RoleController::class, 'managePermissions'])->name('roles.permissions');
        Route::get('roles/{role}/permissions', function (Role $role) {
            return response()->json(['permissions' => $role->permissions->pluck('name')]);
        });

        Route::resource('roles', RoleController::class);
        Route::get('users/{user}/roles', [RoleController::class, 'getUserRoles']);


        Route::get('/select-alumno', function() {
            $alumnos = TutorAlumno::with('alumno')->get()->pluck('alumno')->unique('id');
            return view('select-alumno', compact('alumnos'));
        })->name('select.alumno');

        Route::get('/exportar-pdf', [ExportController::class, 'exportarPDF'])->name('exportar.pdf');



    });

    Route::middleware(['permission:view user|create user|edit user|delete user'])->group(function () {
        Route::resource('users', UserController::class);
    });

    Route::middleware(['permission:view persona|create persona|edit persona|delete persona'])->group(function () {
        Route::resource('personas', PersonaController::class);
    });

    Route::middleware(['permission:view domicilio|create domicilio|edit domicilio|delete domicilio'])->group(function () {
        Route::resource('domicilios', DomicilioController::class);
    });

    Route::middleware(['permission:view sala|create sala|edit sala|delete sala'])->group(function () {
        Route::resource('salas', SalaController::class);
    });

    Route::middleware(['permission:view nivel|create nivel|edit nivel|delete nivel'])->group(function () {
        Route::resource('niveles', NivelController::class);
    });

    Route::middleware(['permission:view nucleo|create nucleo|edit nucleo|delete nucleo'])->group(function () {
        Route::resource('nucleos', NucleoController::class);
    });

    Route::middleware(['permission:view ambito|create ambito|edit ambito|delete ambito'])->group(function () {
        Route::resource('ambitos', AmbitoController::class);
    });

    Route::middleware(['permission:view condicion|create condicion|edit condicion|delete condicion'])->group(function () {
        Route::resource('condiciones', CondicionController::class);
    });

    Route::middleware(['permission:view tutor_alumno|create tutor_alumno|edit tutor_alumno|delete tutor_alumno'])->group(function () {
        Route::resource('tutor_alumno', TutorAlumnoController::class);
    });

    Route::middleware(['permission:view alergia|create alergia|edit alergia|delete alergia'])->group(function () {
        Route::resource('alergias', AlergiaController::class);
    });

    Route::middleware(['permission:view enfermedad|create enfermedad|edit enfermedad|delete enfermedad'])->group(function () {
        Route::resource('enfermedades', EnfermedadController::class);
    });

    Route::middleware(['permission:view informe_diario|create informe_diario|edit informe_diario|delete informe_diario'])->group(function () {
        Route::resource('informes_diarios', InformeDiarioController::class);
    });

    Route::middleware(['permission:view informe_semanal|create informe_semanal|edit informe_semanal|delete informe_semanal'])->group(function () {
        Route::get('/charts', [InformeSemanalController::class, 'showCharts'])->name('informes_semanales.charts');
        Route::resource('informes_semanales', InformeSemanalController::class);
    });

    Route::middleware(['permission:view clase|create clase|edit clase|delete clase'])->group(function () {
        Route::resource('clases', ClaseController::class);
    });

    Route::middleware(['permission:view asistencia|create asistencia|edit asistencia|delete asistencia'])->group(function () {
        Route::resource('asistencias', AsistenciaController::class);
    });

    Route::middleware(['permission:view observacion|create observacion|edit observacion|delete observacion'])->group(function () {
        Route::resource('observaciones', ObservacionController::class);
    });
});
