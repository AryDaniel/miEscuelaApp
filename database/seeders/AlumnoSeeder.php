<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
//Recuerda poner esto para que funcione (use \\Alumno;)

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'n_control'         => '203263041701',
            'nombre'            => 'Francisco López',
            'edad'              => 18,
            'sexo'              => 1,
            'fecha_nacimiento'  => '2004-12-01',
            'domicilio'         => 'Calle X col Y CP 0000',
            'telefono'          => '6677435654'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);

        Alumno::create([
            'n_control'         => '203263041702',
            'nombre'            => 'Claudia López',
            'edad'              => 17,
            'sexo'              => 0,
            'fecha_nacimiento'  => '2005-11-04',
            'domicilio'         => 'Calle sfewf col wefewr CP 30000',
            'telefono'          => '6673098765'
        ]);
    }
}