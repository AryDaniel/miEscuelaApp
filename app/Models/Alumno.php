<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'alumnos';

    // ASIGNACIÓN MASIVA
    /* Con esto estamos especificando que solos los
    campos que aparezcan aqui seran los que iran 
    a la base de datos */
    protected $fillable = [
        'n_control',
        'nombre',
        'edad',
        'sexo',
        'fecha_nacimiento',
        'domicilio',
        'telefono'
    ];
}
