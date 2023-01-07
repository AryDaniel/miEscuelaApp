<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function consultar()
    {
        return view('alumno.alumnos');
    }
}
