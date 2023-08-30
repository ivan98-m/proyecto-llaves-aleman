<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura_compras', function (Blueprint $table) {
            $table->integer('cod_factura')->unsigned();
            $table->foreign('cod_factura')->references('cod_factura')->on('factura_compras');
            $table->string('id_proveedor', 20);
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->string('cod_articulo', 15);
            $table->foreign('cod_articulo')->references('cod_articulo')->on('articulos');
            $table->integer('cantidad');
            $table->integer('subtotal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura_compras');
    }
}
