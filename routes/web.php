<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EspecialidadController;
use Illuminate\Support\Facades\Route;

/*
    Ejecutamos:
        php artisan make:controller EspecialidadController
        php artisan make:model      Especicialidad -ms
        php artisan migrate --seed
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/alumnos', [AlumnoController::class, 'consultar']);

Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);

Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);

Route::get('/alumno/editar/{id}', [AlumnoController::class, 'editar']);
Route::post('/alumno/actualizar/{id}', [AlumnoController::class, 'actualizar']);

// Especialidades
Route::get('/especialidades', [EspecialidadController::class, 'consultar']);

Route::get('/especialidad/registrar', [EspecialidadController::class, 'registrar']);
Route::post('/especialidad/guardar', [EspecialidadController::class, 'guardar']);

Route::get('/especialidad/eliminar/{id}', [EspecialidadController::class, 'eliminar']);

Route::get('/especialidad/editar/{id}', [EspecialidadController::class, 'editar']);
Route::post('/especialidad/actualizar/{id}', [EspecialidadController::class, 'actualizar']);
                    //Aqui recibimos el id de editar.blade.php