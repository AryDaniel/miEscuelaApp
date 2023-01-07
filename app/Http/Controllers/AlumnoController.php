<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function consultar()
    {
        $alumnos = Alumno::paginate(3);

        return view('alumno.alumnos', compact('alumnos'));
    }
}
