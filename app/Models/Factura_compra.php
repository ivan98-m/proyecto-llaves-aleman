<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_compra extends Model
{
    use HasFactory;
    protected $table = 'factura_compras';
    protected $primaryKey = 'cod_factura';
    protected $fillable =[
        'cod_factura',
        'id_proveedor',
        'total'
    ];
    
}
