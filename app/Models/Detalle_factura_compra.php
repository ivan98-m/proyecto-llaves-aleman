<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_factura_compra extends Model
{
    use HasFactory;
    protected $table = 'detalle_factura_compras';
    protected $fillable =[
        'cod_factura',
        'id_proveedor',
        'cod_articulo',
        'cantidad',
        'subtotal'
    ];
}
