<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialidad extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'especialidades';

    protected $fillable = [
        'nombre',
    ];    
}
