<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function consultar()
    {
        $alumnos = Alumno::get();

        return view('alumno.alumnos', ['alumnos' => $alumnos]);
    }
}
