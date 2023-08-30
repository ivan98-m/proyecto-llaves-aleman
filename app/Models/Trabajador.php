<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $table = 'trabajadores';
    protected $primaryKey = 'id_trabajador';
    protected $fillable =[
        'id_trabajador',
        'nombres',
        'apellidos',
        'especialidad',
        'direccion',
        'celular',
        'correo'
    ];
}
