<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Detalle_factura_compra;
use App\Models\Factura_compra;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function getIndex()
    {
        $compras = Factura_compra::all();
        $proveedores = Proveedor::all();
        return view('facturacion.compras.factura_compras',
        ['compras'=>$compras, 
        'proveedores'=>$proveedores
        ]);
    }

    public function getCompraDetalle($id)
    {
        $compra = Factura_compra::findOrFail($id);
        $productos = Articulo::all();
        $proveedores = Proveedor::all();
        $compra_detalles = Detalle_factura_compra::all();
		return view('facturacion.compras.factura_compra_detalle', 
        ['id'=>$id,
        'compra' => $compra,
        'productos' => $productos,
        'proveedores' => $proveedores,
        'compra_detalles' => $compra_detalles
        ]);
    }

    public function createCompra(Request $request)
    {
        $fac_compra = new Factura_compra([
            'cod_factura' => $request->cod_factura,
            'id_proveedor' => $request->id_proveedor,
            'fecha'=> $request->fecha,
            'total' => $request->total
        ]);

        $fac_compra->save();
        toast('Factura compra creada con exito','success')->autoClose(3000);
        return redirect('/dashboard/facturacion/compras');
    }

    public function deleteCompra($id)
    {
        Factura_compra::findOrFail($id)->delete();
        toast('Factura compra eliminada','warning')->autoClose(3000);
        return redirect('/dashboard/facturacion/compras');
    }

    public function createFacturadet(Request $request){
        $fac_deta = new Detalle_factura_compra([
            'cod_factura' => $request->cod_factura,
            'id_proveedor' => $request->id_proveedor,
            'cod_articulo'=> $request->cod_articulo,
            'cantidad' => $request->cantidad,
            'subtotal' => $request->subtotal * $request->cantidad
        ]);
        $fac_deta->save();
        return redirect('/dashboard/facturacion/compras');
    }
}
