<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function consultar()
    {
        $especialidades = Especialidad::paginate(5);

        return view('especialidad.especialidades', compact('especialidades'));
    }

    function registrar(){
        return view('especialidad.registrar');
    }

    function guardar(Request $datos){
        $especialidad = Especialidad::create($datos->post());

        return redirect('/especialidades');
    }

    function eliminar($id){
        $especialidad = Especialidad::find($id);
        $especialidad->delete();

        return redirect('/especialidades');
    }
}
