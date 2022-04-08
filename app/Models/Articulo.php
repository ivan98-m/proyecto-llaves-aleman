<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = 'articulos';
    protected $primaryKey = 'cod_articulo';
    protected $fillable =[
        'cod_articulo',
        'cod_articulo',
        'id_proveedor',
        'art_nombre',
        'art_foto',
        'art_descripcion',
        'stock',
        'p_venta',
        'p_proveedor'
    ];
}
