<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\NucleoController;
use App\Http\Controllers\AmbitoController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\CondicionController;
use App\Http\Controllers\TutorAlumnoController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\EnfermedadesController;
use App\Http\Controllers\InformeDiarioController;
use App\Http\Controllers\InformeSemanalController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ObservacionesController;

Route::resource('personas', PersonasController::class);
Route::resource('roles', RolesController::class);
Route::resource('nivel', NivelController::class);
Route::resource('nucleo', NucleoController::class);
Route::resource('ambito', AmbitoController::class);
Route::resource('sala', SalaController::class);
Route::resource('condicion', CondicionController::class);
Route::resource('tutor_alumno', TutorAlumnoController::class);
Route::resource('alergia', AlergiaController::class);
Route::resource('enfermedades', EnfermedadesController::class);
Route::resource('informe_diario', InformeDiarioController::class);
Route::resource('informe_semanal', InformeSemanalController::class);
Route::resource('cuentas', CuentasController::class);
Route::resource('clase', ClaseController::class);
Route::resource('asistencia', AsistenciaController::class);
Route::resource('observaciones', ObservacionesController::class);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
