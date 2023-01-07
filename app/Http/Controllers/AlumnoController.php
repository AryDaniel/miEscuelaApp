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

    public function registrar()
    {
        return view('alumno.registrar');
    }

    public function guardar(Request $datos){
        $alumno = Alumno::create($datos->post());

        return redirect('/alumnos');
    }
    

    function eliminar($id){
        $alumno = Alumno::find($id);
        $alumno->delete();

        return redirect('alumnos');
    }
}
