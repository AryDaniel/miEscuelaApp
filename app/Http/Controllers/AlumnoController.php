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
    
    function editar($id){
        $alumno = Alumno::find($id);

        return view('alumno.editar', compact('alumno'));
    }

    function actualizar(Request $datos, $id){
        $alumno = Alumno::find($id);
        $alumno->n_control = $datos->input('n_control');
        $alumno->nombre = $datos->input('nombre');
        $alumno->edad = $datos->input('edad');
        $alumno->sexo = $datos->input('sexo');
        $alumno->fecha_nacimiento = $datos->input('fecha_nacimiento');
        $alumno->domicilio = $datos->input('domicilio');
        $alumno->telefono = $datos->input('telefono');
        $alumno->save();

        return redirect('/alumnos');
    }
}
