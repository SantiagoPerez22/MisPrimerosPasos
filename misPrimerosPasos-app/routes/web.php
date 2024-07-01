<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\NucleoController;
use App\Http\Controllers\AmbitoController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\CondicionController;
use App\Http\Controllers\TutorAlumnoController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\EnfermedadController;
use App\Http\Controllers\InformeDiarioController;
use App\Http\Controllers\InformeSemanalController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ObservacionController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('personas', PersonaController::class)->middleware('auth');
Route::resource('roles', RolController::class)->middleware('auth');
Route::resource('niveles', NivelController::class)->middleware('auth');
Route::resource('nucleos', NucleoController::class)->middleware('auth');
Route::resource('ambitos', AmbitoController::class)->middleware('auth');
Route::resource('salas', SalaController::class)->middleware('auth');
Route::resource('condiciones', CondicionController::class)->middleware('auth');
Route::resource('tutor_alumnos', TutorAlumnoController::class)->middleware('auth');
Route::resource('alergias', AlergiaController::class)->middleware('auth');
Route::resource('enfermedades', EnfermedadController::class)->middleware('auth');
Route::resource('informes_diarios', InformeDiarioController::class)->middleware('auth');
Route::resource('informes_semanales', InformeSemanalController::class)->middleware('auth');
Route::resource('cuentas', CuentaController::class)->middleware('auth');
Route::resource('clases', ClaseController::class)->middleware('auth');
Route::resource('asistencias', AsistenciaController::class)->middleware('auth');
Route::resource('observaciones', ObservacionController::class)->middleware('auth');

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Ruta para manejar el proceso de inicio de sesión
Route::post('/login', [LoginController::class, 'login']);
// Ruta para manejar el proceso de cierre de sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Ruta del dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    // Rutas para gestionar personas
    Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');
    Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');
});

// Ruta raíz
Route::get('/', function () {
    return view('welcome');
});

// Ruta de logout
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/');
})->name('logout');
