<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'especialidad_id'   => 1,
            'clave'             => '5AVP',
            'turno'             => 1,
            'descripcion'       => 'Grupo de programación vespertino',
            'semestre'          => 5
        ]);

        Grupo::create([
            'especialidad_id'   => 1,
            'clave'             => '5AMP',
            'turno'             => 0,
            'descripcion'       => 'Grupo de programación matutino',
            'semestre'          => 5
        ]);

        Grupo::create([
            'especialidad_id'   => 2,
            'clave'             => '3AVO',
            'turno'             => 1,
            'descripcion'       => 'Grupo de ofimatica vespertino',
            'semestre'          => 3
        ]);

        Grupo::create([
            'especialidad_id'   => 2,
            'clave'             => '3AMO',
            'turno'             => 0,
            'descripcion'       => 'Grupo de ofimatica matutino',
            'semestre'          => 3
        ]);    
    }
}
