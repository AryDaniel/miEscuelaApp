<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function consultar()
    {
        $especialidades = Especialidad::get();

        return view('especialidad.especialidades', ['especialidades' => $especialidades]);
    }
}
