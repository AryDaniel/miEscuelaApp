<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

/*
    Ejecutamos:
        php artisan make:model -ms

        m       migration
        s       seeder

    php artisan migrate:refresh --seed
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/alumnos', [AlumnoController::class, 'consultar']);

Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);

Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);

Route::get('/alumno/editar/{id}', [AlumnoController::class, 'editar']);
Route::post('/alumno/actualizar', [AlumnoController::class, 'actualizar']);