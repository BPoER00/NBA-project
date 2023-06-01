<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Rutas para importar a los jugadores con su nombres
Route::get('ruta-jugadores', [\App\Http\Controllers\JugadoresController::class, 'rutaJugadores'])->name('ruta-jugadores');
Route::post('import-jugadores', [\App\Http\Controllers\JugadoresController::class, 'importJugadores'])->name('import-jugadores');

//Ruta paroriasa importar a los jugadores con su equipo
Route::get('ruta-jugadores-equipos', [\App\Http\Controllers\JugadorEquipoController::class, 'rutaJugadoresEquipo'])->name('ruta-jugadores-equipos');
Route::post('import-jugadores-equipos', [\App\Http\Controllers\JugadorEquipoController::class, 'rutaJugadoresEquipoImport'])->name('import-jugadores-equipos');

//Ruta para impoortar las estadisticas de un jugador por partido
Route::get('ruta-estadisticas-jugadores-equipos', [\App\Http\Controllers\EstadisticasJugadorEquipoController::class, 'rutaEstadisticasJugadoresEquipo'])->name('ruta-estadisticas-jugadores-equipos');
Route::post('import-estadisticas-jugadores', [\App\Http\Controllers\EstadisticasJugadorEquipoController::class, 'rutaEstadisticasJugadoresEquipoImport'])->name('import-estadisticas-jugadores');

//Rutas de consultas a las preguntas
//que equipo tiene mas titulos en la nba hasta la temp 2017-2018
Route::get('equipo-mas-titulos', [\App\Http\Controllers\PreguntasController::class, 'equipoMasTitulos'])->name('equipo-mas-titulos');

//que equipo tiene mas puntos en la nba temp 2017/2018
Route::get('equipo-mas-puntos', [\App\Http\Controllers\PreguntasController::class, 'equipoMasPuntos'])->name('equipo-mas-puntos');

//que equipos clasifican a Playoffs
Route::get('equipo-playoffs', [\App\Http\Controllers\PreguntasController::class, 'equiposPlayoffs'])->name('equipo-playoffs');

//que equio tiene mas vistorias
Route::get('equipo-victorias', [\App\Http\Controllers\PreguntasController::class, 'equipovictorias'])->name('equipo-victorias');

//que equipo tiene mas triples anotados en la temporada
Route::get('equipo-triples', [\App\Http\Controllers\PreguntasController::class, 'equipoMasTriples'])->name('equipo-triples');

//que equipo tiene mas libres anotados en la temporada
Route::get('equipo-libres', [\App\Http\Controllers\PreguntasController::class, 'equipoMasLibres'])->name('equipo-libres');

//que equipo tiene mas asistencias anotados en la temporada
Route::get('equipo-asistencias', [\App\Http\Controllers\PreguntasController::class, 'equipoMasAsistencias'])->name('equipo-asistencias');

//que equipo tiene mas asistencias anotados en la temporada
Route::get('equipo-perdidas', [\App\Http\Controllers\PreguntasController::class, 'equipoMasPerdidas'])->name('equipo-perdidas');

//que equipo tiene mas robos anotados en la temporada
Route::get('equipo-robos', [\App\Http\Controllers\PreguntasController::class, 'equipoMasRobos'])->name('equipo-robos');

//que equipo tiene mas robos anotados en la temporada
Route::get('equipo-tapas', [\App\Http\Controllers\PreguntasController::class, 'equipoMasTapas'])->name('equipo-tapas');
