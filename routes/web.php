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