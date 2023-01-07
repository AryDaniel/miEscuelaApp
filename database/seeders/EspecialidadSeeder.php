<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::create([
            'nombre' => 'Programación'
        ]);

        Especialidad::create([
            'nombre' => 'Ofimática'
        ]);

        Especialidad::create([
            'nombre' => 'Contabilidad'
        ]);

        Especialidad::create([
            'nombre' => 'Electrónica'
        ]);

        Especialidad::create([
            'nombre' => 'Diseño gráfico'
        ]);

        Especialidad::create([
            'nombre' => 'Construcción'
        ]);
    }
}
