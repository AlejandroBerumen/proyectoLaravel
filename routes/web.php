<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('alumnos/{alumno}/agregarAGrupo', [AlumnoController::class, 'agregarAgrupo'])->name('alumnos.agregarAGrupo');
Route::post('eliminarGrupoAlumnos', [AlumnoController::class, 'eliminarGrupoAlumnos'])->name('eliminarGrupoAlumnos');

return Route::resource('alumnos', AlumnoController::class);



// Route::post('alumnos/{alumno}/agregarAGrupo', [AlumnoController::class, 'agregarAGrupo'])->name('alumnos.agregarAGrupo');
// Route::post('eliminarGrupoAlumnos', [AlumnoController::class, 'eliminarGrupoAlumnos'])->name('eliminarGrupoAlumnos');





