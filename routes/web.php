<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

/*
    Ejecutamos:
        php artisan make:model -ms

        m       migration
        s       seeder
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/alumnos', [AlumnoController::class, 'consultar']);