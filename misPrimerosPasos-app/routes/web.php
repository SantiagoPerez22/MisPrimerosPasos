<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DomicilioController;
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
use App\Http\Controllers\RolesAndPermissionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformeDiarioController;
use App\Http\Controllers\InformeSemanalController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ObservacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('roles/assign', [RoleController::class, 'assignRolesForm'])->name('roles.assign.form');
Route::post('roles/assign', [RoleController::class, 'assignRoles'])->name('roles.assign');
Route::get('roles/permissions', [RoleController::class, 'managePermissionsForm'])->name('roles.permissions.form');
Route::post('roles/permissions', [RoleController::class, 'managePermissions'])->name('roles.permissions');
Route::get('roles/users', [RoleController::class, 'indexUsersRoles'])->name('roles.users.index');
Route::get('roles/permissions', [RoleController::class, 'indexRolesPermissions'])->name('roles.permissions.index');
Route::get('roles/permissions/manage', [RoleController::class, 'managePermissionsForm'])->name('roles.permissions.form');
Route::post('roles/permissions/manage', [RoleController::class, 'managePermissions'])->name('roles.permissions');
Route::get('roles/{id}/edit', [RoleController::class, 'editRoles'])->name('roles.edit');
Route::put('roles/{id}', [RoleController::class, 'updateRoles'])->name('roles.update');
Route::get('roles/users', [RoleController::class, 'indexUsersRoles'])->name('roles.users.index');
Route::get('roles/permissions', [RoleController::class, 'indexRolesPermissions'])->name('roles.permissions.index');
Route::get('roles/assign', [RoleController::class, 'assignRolesForm'])->name('roles.assign.form');
Route::post('roles/assign', [RoleController::class, 'assignRoles'])->name('roles.assign');
Route::get('roles/users', [RoleController::class, 'indexUsersRoles'])->name('roles.users.index');
Route::get('roles/permissions', [RoleController::class, 'indexRolesPermissions'])->name('roles.permissions.index');
Route::get('roles/assign', [RoleController::class, 'assignRolesForm'])->name('roles.assign.form');
Route::post('roles/assign', [RoleController::class, 'assignRoles'])->name('roles.assign');
Route::get('roles/permissions/manage', [RoleController::class, 'managePermissionsForm'])->name('roles.permissions.form');
Route::post('roles/permissions/manage', [RoleController::class, 'managePermissions'])->name('roles.permissions');
Route::get('roles/{id}/edit', [RoleController::class, 'editRoles'])->name('roles.edit');
Route::put('roles/{id}', [RoleController::class, 'updateRoles'])->name('roles.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Resource routes for various controllers
Route::middleware(['auth'])->group(function () {
    Route::resource('domicilios', DomicilioController::class);
    Route::resource('salas', SalaController::class);
    Route::resource('niveles', NivelController::class);
    Route::resource('nucleos', NucleoController::class);
    Route::resource('ambitos', AmbitoController::class);
    Route::resource('condiciones', CondicionController::class);
    Route::resource('personas', PersonaController::class);
    Route::resource('tutor_alumno', TutorAlumnoController::class);
    Route::resource('alergias', AlergiaController::class);
    Route::resource('enfermedades', EnfermedadController::class);
    Route::resource('rolesandpermissions', RolesAndPermissionsController::class);
    Route::resource('users', UserController::class);
    Route::resource('informes_diarios', InformeDiarioController::class);
    Route::resource('informes_semanales', InformeSemanalController::class);
    Route::resource('clases', ClaseController::class);
    Route::resource('asistencias', AsistenciaController::class);
    Route::resource('observaciones', ObservacionController::class);
});
