<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        $articulos = Articulo::all();
        $proveedores = Proveedor::all();
        return view('inventarios.inventario',['articulos' => $articulos, 'proveedores'=>$proveedores]);
    }

   public function createProduct(Request $request)
   {
    $articulo = new Articulo([
        'cod_articulo' => $request->cod_articulo,
        'id_proveedor' => $request->id_proveedor,
        'art_nombre' => $request->art_nombre,
        'art_descripcion' => $request->art_descripcion,
        'p_venta' => $request->p_venta,
        'p_proveedor' => $request->p_proveedor,
        'stock' => $request->stock
    ]);

    toast('Producto creado con exito','success')->autoClose(3000);
    $articulo->save();
    return redirect('/dashboard/inventario');
   }

   public function editProduct(Request $request, $id)
   {
       $articulo = Articulo::findOrFail($id);

        $articulo->cod_articulo = $request->cod_articulo;
        $articulo->id_proveedor = $request->id_proveedor;
        $articulo->art_nombre = $request->art_nombre;
        
        $articulo->art_descripcion = $request->art_descripcion;
        $articulo->stock = $request->stock;
        //$articulo->stock = $articulo->stock+$request->stock;
        $articulo->p_venta = $request->p_venta;
        $articulo->p_proveedor = $request->p_proveedor;

        $articulo->save();
        toast('Articulo actualizado con exito','success')->autoClose(3000);
        return redirect('/dashboard/inventario');
   }

   public function deleteProduct($id)
   {
    Articulo::findOrFail($id)->delete();
    toast('Producto eliminado','warning')->autoClose(3000);
    return redirect('/dashboard/inventario');
   }
}
